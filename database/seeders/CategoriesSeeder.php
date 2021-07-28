<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Thể thao',
            'slug' => 'the-thao',
            'parent_id' => null,
            'position' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Bóng đá',
            'slug' => 'bong-da',
            'parent_id' => 1,
            'position' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'quần vợt',
            'slug' => 'quan-vot',
            'parent_id' => 1,
            'position' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Điện ảnh',
            'slug' => 'dien-anh',
            'parent_id' => null,
            'position' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Phim chiếu rạp',
            'slug' => 'phim-chieu-rap',
            'parent_id' => 4,
            'position' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Phim truyền hình',
            'slug' => 'phim-truyen-hinh',
            'parent_id' => 4,
            'position' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
