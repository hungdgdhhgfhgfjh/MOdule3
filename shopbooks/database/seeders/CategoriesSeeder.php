<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Category                            = new Category();
        $Category->name_Category             = "Sách Giao Tiếp";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách thám hiểm";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách tâm đắc";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách nghĩ lớn";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách thương yêu";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách con người và động vật";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách tình cảm";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách văn học";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách về người nổi tiếng";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách lãng mạn";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách tưởng tượng";
        $Category->save();
        $Category                            = new Category();
        $Category->name_Category             = "sách tiểu thuyết lích sử";
        $Category->save();
    }
}
