<?php

namespace App\Http\Controllers;

use App\Services\Impl\StaffServiceImpl;
use App\Services\StaffService;
use Illuminate\Http\Request;

class StaffsController extends Controller
{
    protected $staffService;

    public function __construct(StaffServiceImpl $staffService)
    {
        $this->staffService = $staffService;
    }

    public function index()
    {
        $staffs = $this->staffService->getAll();

        return response()->json($staffs, 200);
    }

    public function show($id)
    {
        $dataStaff = $this->staffService->findById($id);

        return response()->json($dataStaff['staffs'], $dataStaff['statusCode']);
    }

    public function store(Request $request)
    {
        
        $dataStaff = $this->staffService->create($request->all());
        return response()->json($dataStaff['staffs'], $dataStaff['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $dataStaff = $this->staffService->update($request->all(), $id);
// dd($dataStaff);
        return response()->json($dataStaff['staffs'], $dataStaff['statusCode']);
    }

    public function destroy($id)
    {
        $dataStaff = $this->staffService->destroy($id);

        return response()->json($dataStaff['message'], $dataStaff['statusCode']);
    }

}
