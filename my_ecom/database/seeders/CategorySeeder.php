<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Electronics',
            'category_slug' => Str::slug('Electronics'),
            'created_at' => date('Y:m:d H:i:s'),
            'updated_at' => date('Y:m:d H:i:s'),
        ]);
    }
}
