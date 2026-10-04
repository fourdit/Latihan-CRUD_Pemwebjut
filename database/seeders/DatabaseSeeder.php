<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $b1 = new \App\Models\Book();
        $b1->title = 'The Pragmatic Programmer';
        $b1->author = 'Andrew Hunt';
        $b1->year = 1999;
        $b1->save();

        $b2 = new \App\Models\Book();
        $b2->title = 'Clean Code';
        $b2->author = 'Robert C. Martin';
        $b2->year = 2008;
        $b2->save();
    }
}
