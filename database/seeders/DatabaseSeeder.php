<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
        public $categories = [
            'Donna',
            'Uomo',
            'Bambini',
            'Casa',
            'Elettronica',
            'Sport',
            'Profumi',
            'Animali',
            'Musica',
            'Cosmetici'
        ];

    public function run(): void
    {
        foreach($this->categories as $category){
            Category::create(['name' => $category]);
        }
    }
}
