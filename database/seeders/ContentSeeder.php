<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $content = Content::create([
            'title'=>'Bugungi Yangilik',
            'text'=>"asdasdkjahsdjkahsjkdhaksjdhajksdhajkshdajksdhaks",
            'subcategory_id'=>1
        ]);
    }
}
