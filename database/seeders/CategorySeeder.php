<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::create([
            "name"=>[
                'uz'=>'Biz haqimizda',
                'en'=>'About us'
            ],
        ]);

        $category->subcategories()->create([
            'name'=>[
                'uz'=>'yangilik',
                'en'=>'Daily_news'
            ],
            'slug'=>'news',     
        ]);


        $category = Category::create([
            "name"=>[
                'uz'=>'Axborot xizmati',
                'en'=>'Information services'
            ],
        ]);

        $category->subcategories()->create([
            'name'=>[
                'uz'=>'reports',
                'en'=>'reposrt'
            ],
            'slug'=>'reports'
        ]);

        $category = Category::create([
            "name"=>[
                'uz'=>'Xizmatlar',
                'en'=>'services'
            ],
        ]);

        // $category->subcategories()->create([
        //     'name'=>[
        //         'uz'=>'dfg',
        //         'en'=>'dfg'
        //     ],
        //     'slug'=>'asd1'
        // ]);

        $category = Category::create([
            "name"=>[
                'uz'=>'Antikorrupsiya',
                'en'=>'AntiKorruption'
            ],
        ]);

        // $category->subcategories()->create([
        //     'name'=>[
        //         'uz'=>'dfg',
        //         'en'=>'dfg'
        //     ],
        //     'slug'=>'asd2'
        // ]);

        $category = Category::create([
            "name"=>[
                'uz'=>"Bog'lanish",
                'en'=>'Contact'
            ],
        ]);

        // $category->subcategories()->create([
        //     'name'=>[
        //         'uz'=>'dfg',
        //         'en'=>'dfg'
        //     ],
        //     'slug'=>'asd3'
        // ]);
    }
}
