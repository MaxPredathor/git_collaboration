<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = file_get_contents(__DIR__ . '/books_db.json');
        $books = json_decode($books, true);
        foreach ($books as $book) {
            $newbook = new Book();
            $newbook->title = $book['title'];
            $newbook->isbn = $book['isbn'];
            $newbook->pages = $book['pages'];
            $newbook->image = $book['image'];
            $newbook->short_description = $book['short_description'];
            $newbook->long_description = $book['long_description'];
            $newbook->status = $book['status'];
            $newbook->authors = $book['authors'];
            $newbook->category = $book['category'];
            $newbook->save();
        }

    }
}
