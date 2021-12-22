<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $search = (isset($request->search) && !empty($request->search)) ? $request->search:"";
       if($search){
        $countries = DB::table('countries')->where("name","like","%".$search."%")->get();
       }else
       {
        $countries = DB::table('countries')->get();
       }
      return view('countries/index',["countries" => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->name  == "")
        {
            Session::flash('error_name', 'không đươc để trống name ');
            return redirect()->route('countries.create');
        }
        else
        {
            $objCountries = new Country();
            $objCountries->name = $request->name;
            $objCountries->save();
            Session::flash('success', 'thêm mới quốc gia thành công ');
            return redirect()->route('countries.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = DB::table('countries')->where("id",$id)->first();
        return view('countries/edit',["country"=>$country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->name  == "")
        {
            Session::flash('error_name', 'không đươc để trống name ');
            return redirect()->route('countries.edit',$id);
        }
        else
        {
            $objCountries = Country::find($id);
            $objCountries->name = $request->name;

            $objCountries->save();
            Session::flash('success', ' thay đổi tên quốc gia thành công ');
            return redirect()->route('countries.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objCountries = Country::find($id);
        $objCountries->delete();
        Session::flash('success', ' xóa quốc gia thành công ');
        return redirect()->route('countries.index');
    }
}
