<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
        ['book_id' => '1231', 'created_at' => '2022-01-06 13:21:03', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Madilog', 'book_file' => 'Madilog.pdf', 'book_cover' => 'Madilog.jpg', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => '' ],
        ['book_id' => '1234', 'created_at' => '2022-01-06 13:21:03', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Dilan', 'book_file' => 'Dilan.pdf', 'book_cover' => 'Dilan_cover.jpg', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => '' ],
        ['book_id' => '123123', 'created_at' => '2022-01-20 18:18:39', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Why Nations Fail', 'book_file' => 'Why Nations Fail Daron Acemoglu.pdf', 'book_cover' => 'Why Nations Fail Daron Acemoglu_cover.jpg', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ],
        ['book_id' => '123124', 'created_at' => '2022-02-02 23:55:41', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Dilan 1991', 'book_file' => 'DILAN-2-pidi-baiq.pdf', 'book_cover' => 'DILAN-2-pidi-baiq.JPG', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ],
        ['book_id' => '123125', 'created_at' => '2022-02-03 01:54:28', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'A JOURNEY TO THE CENTER OF THE EARTH', 'book_file' => 'A Journey to the Centre of the Earth.pdf', 'book_cover' => 'A Journey to the Center of the Earth_cover.JPG', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ],
        ['book_id' => '123126', 'created_at' => '2022-02-03 01:55:25', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'ALEXANDER THE GREAT', 'book_file' => 'Alexander the Great.pdf', 'book_cover' => 'Alexander The Great_cover.JPG', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ],
        ['book_id' => '123127', 'created_at' => '2022-02-03 01:56:16', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Beethoven', 'book_file' => 'Beethoven.pdf', 'book_cover' => 'Beethoven_cover.JPG', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ],
        ['book_id' => '123128', 'created_at' => '2022-02-03 01:56:57', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Cleopatra', 'book_file' => 'Cleopatra_cover.pdf', 'book_cover' => 'Cleopatra.pdf', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ],
        ['book_id' => '123129', 'created_at' => '2022-02-03 01:58:08', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Crime and Punishment', 'book_file' => 'Crime and Punishment.pdf', 'book_cover' => 'Crime & Punishment_cover.JPG', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ],
        ['book_id' => '123130', 'created_at' => '2022-02-03 01:58:56', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Gulliver’s Travels', 'book_file' => 'Gulliver\'s Travels.pdf', 'book_cover' => 'Gulliver\'s Travels_cover.JPG', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ],
        ['book_id' => '123131', 'created_at' => '2022-02-03 01:59:45', 'updated_at' => '2022-02-03 01:53:06', 'book_name' => 'Joan of Arc', 'book_file' => 'Joan of Arc.pdf', 'book_cover' => 'Joan of Arc_cover.JPG', 'genre' => 'Political', 'author' => 'Pidi Baiq', 'published' => '2012-03-20', 'total_page' => '546','book_desc' => 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.' ]
    ]);
    }
}