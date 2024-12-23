<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("bookshelves")->insert([
            [
                "code"=> "RK0A",
                "name"=> "Manga",
            ],
            [
                "code"=> "RAk1B",
                "name"=> "Novel1",
            ],
            [
                "code"=> "TAG2C",
                "name"=> "kitab kuning",
            ],
            ]);
    }
}
