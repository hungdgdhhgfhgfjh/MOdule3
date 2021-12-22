<?php
namespace App\Repositories\Impl;

use App\Models\Staff;
use App\Repositories\StaffsRepository;
use App\Repositories\Eloquent\EloquentRepository;

class StaffsRepositoryImpl extends EloquentRepository  implements StaffsRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Staff::class;
        return $model;
    }

    public function create($data)
    {
        $staff = new Staff();
        $staff->position = $data['position'];
        $staff->name = $data['name'];
        $staff->save();

        return $staff;
    }
    public function update($data, $id)
    {
        $staff = Staff::find($id)->first();
        $staff->position = $data['position'];
        $staff->name = $data['name'];
        $staff->save();
        // dd($staff);
        return $staff;
    }
    public function findById($id)
    {
    //    
    // echo __METHOD__;
    // die();
    $staff = Staff::find($id);
    // dd();
    return $staff;
    }
    // public function save()
    // {
    //     echo __METHOD__;
    //     die();

    // }
    

    
}