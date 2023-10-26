<?php

namespace Database\Seeders;

use App\Models\BookShop;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookshops = [
            'Prague' => [
                'Knihy Dobrovský',
                'Kosmas',
                'Neoluxor'
            ],
            'London' => [
                'Blackwell\'s',
                'Daunt Books',
                'Foyles',
                'John Smith & Son',
                'W H Smith',
                'Waterstones',
                'The Works'
            ],
            'New York' => [
                'Amazon Books',
                'Anderson\'s Bookshops',
                'Barnes & Noble',
                'Bookmans',
                'Books-A-Million',
                'Books, Inc.',
                'Deseret Book, also operates Seagull Book',
                'Follett\'s',
                'Half Price Books',
                'Hudson News',
                'Joseph-Beth Booksellers',
                'Kinokuniya',
                'Mardel Christian Stores',
                'Powell\'s Books',
                'Schuler Books & Music',
                'Tattered Cover'
            ]
        ];
        foreach ($bookshops as $cityKey => $city) {
            foreach ($city as $shop) {
                $bookshop = new BookShop();
                $bookshop->city = $cityKey;
                $bookshop->name = $shop;
                $bookshop->save();
            }
        }


    }
}
