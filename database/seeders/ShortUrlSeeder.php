<?php

namespace Database\Seeders;

use App\Models\ShortUrl;
use App\Models\ShortUrlVisit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShortUrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShortUrl::factory(100)
            ->create()
            ->each(function(ShortUrl $shortUrl) {
                $shortUrl->visits()
                    ->createMany(ShortUrlVisit::factory(rand(2, 20))->make()->toArray());
            });
    }
}
