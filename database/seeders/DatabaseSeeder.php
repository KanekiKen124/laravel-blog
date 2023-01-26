<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory(100)->create();
        // \APP\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,

        ]);
    }
}
