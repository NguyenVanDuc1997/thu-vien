<?php

use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $library = new \App\Library();
        $library->name = 'Thu vien uoc mo';
        $library->address = 'Ha noi';
        $library->phone = '0123456789' ;
        $library->image = 'image.jpg';
        $library->save();

        $library = new \App\Library();
        $library->name = 'Thu vien Ca mau';
        $library->address = 'Bac Giang';
        $library->phone = '0123456785' ;
        $library->image = 'image.jpg';
        $library->save();

        $library = new \App\Library();
        $library->name = 'Thu vien Bac giang';
        $library->address = 'Ca mau';
        $library->phone = '123456799' ;
        $library->image = 'image.jpg';
        $library->save();
    }
}
