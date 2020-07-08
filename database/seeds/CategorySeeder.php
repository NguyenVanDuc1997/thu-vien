<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new \App\Category();
        $category->name = 'Thu vien uoc mo';
        $category->library_id = 1;
        $category->save();

        $category = new \App\Category();
        $category->name = 'Thu vien uoc mo';
        $category->library_id = 2;
        $category->save();
    }
}
