<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Giải vô địch EURO',
            'slug' => 'vo-dich-euro',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at sem purus. Nam ac leo magna. Pellentesque at ipsum id enim rutrum luctus eget in mi. Morbi at libero a tortor gravida laoreet',
            'content' => 'Nulla pellentesque eros et consequat gravida. Praesent leo nisi, commodo in mattis sagittis, varius sit amet est. Donec dignissim ultricies tortor id pulvinar. In eget auctor augue. Duis hendrerit, ligula vel sagittis dignissim, enim orci congue massa, mattis posuere elit nibh non metus.',
            'categories_id' => '1,4',
            'sub_categories_id' => '2,3,5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('news')->insert([
            'title' => 'Phim ảnh tuần này',
            'slug' => 'phim-anh-tuan-nay',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at sem purus. Nam ac leo magna. Pellentesque at ipsum id enim rutrum luctus eget in mi. Morbi at libero a tortor gravida laoreet',
            'content' => 'Nulla pellentesque eros et consequat gravida. Praesent leo nisi, commodo in mattis sagittis, varius sit amet est. Donec dignissim ultricies tortor id pulvinar. In eget auctor augue. Duis hendrerit, ligula vel sagittis dignissim, enim orci congue massa, mattis posuere elit nibh non metus.',
            'categories_id' => '1,4',
            'sub_categories_id' => '2,3,5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
