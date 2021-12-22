<?php

namespace App\Http\Controllers;

use App\Models\Support_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SupportUserController extends Controller
{
    public function index($id)
    {
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
        $user        = User::find($id);
        $supportUser = DB::table('support_users')->orderBy('id', 'DESC')->where('user_id','=',$user->id)->get();
        return view('supportUsers.index',["user"         => $user,
                                          "supportUser" => $supportUser,
                                          "admin" => $admin
    ]);
        
    }
    public function update(Request $request,$id)
    {
        $supportUser = Support_user::find($id);
        $supportUser->admin = $request->messageAdmin;
        $supportUser->save();
        Session::flash("success","đã trả lời khách hàng");
        return redirect()->back();
    }
}
