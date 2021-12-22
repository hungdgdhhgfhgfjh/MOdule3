<?php

namespace Tests\Unit;

use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Repositories\CategoryRepository;
use Faker\Factory as Faker;

class CategoryTest extends TestCase
{
    protected $category;
    
    public function setUp() : void
    {
        parent::setUp();
        $this->faker = Faker::create();
        // chuẩn bị dữ liệu test
        $this->category = [
            'name_category' => $this->faker->name,
        ];
        // khởi tạo lớp CategoryRepository
        $this->categoryRepository = new CategoryRepository();
    }

     /**
     * A basic unit test store
     *
     * @return void
     */
    public function testStore()
    {
        // Gọi hàm tạo
        $category = $this->categoryRepository->storeCategory($this->category);
        // Kiểm tra xem kết quả trả về có là thể hiện của lớp Category hay không
        $this->assertInstanceOf(Category::class,$category);
        // Kiểm tra data trả về
        $this->assertEquals($this->category['name_category'], $category->name_category);
        // Kiểm tra dữ liệu có tồn tại trong cơ sở dữ liệu hay không
        $this->assertDatabaseHas('categories', $this->category);
    }
}