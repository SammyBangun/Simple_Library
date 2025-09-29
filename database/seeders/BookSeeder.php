<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Clean Code', 'author' => 'Robert C. Martin', 'year' => 2008],
            ['title' => 'The Pragmatic Programmer', 'author' => 'Andrew Hunt', 'year' => 1999],
            ['title' => 'Refactoring', 'author' => 'Martin Fowler', 'year' => 1999],
            ['title' => 'Design Patterns', 'author' => 'Erich Gamma', 'year' => 1994],
            ['title' => 'You Don’t Know JS', 'author' => 'Kyle Simpson', 'year' => 2015],
            ['title' => 'Clean Architecture', 'author' => 'Robert C. Martin', 'year' => 2009],
            ['title' => 'The Clean Coder', 'author' => 'Robert C. Martin', 'year' => 2008],
            ['title' => 'The Coder', 'author' => 'James Webb', 'year' => 2008],
        ]);
    }
}
