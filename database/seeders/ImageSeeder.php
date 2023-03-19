<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'location_id' => '1',
                'image' => 'https://bloganchoi.com/wp-content/uploads/2022/07/du-lich-quang-tri-14.jpg',
            ],
            [
                'location_id' => '1',
                'image' => 'https://phongnhatourist.com/wp-content/uploads/2020/04/dia-dao-vinh-moc-5-1400x774.jpg',
            ],
            [
                'location_id' => '1',
                'image' => 'https://danviet.mediacdn.vn/upload/4-2015/images/2015-10-15/1444895799-dia-dao-vinh-moc3.jpg',
            ],
            [
                'location_id' => '1',
                'image' => 'https://danviet.mediacdn.vn/upload/4-2015/images/2015-10-15/1444895799-dia-dao-vinh-moc5.jpg',
            ],
            [
                'location_id' => '1',
                'image' => 'https://vnanet.vn/Data/Articles/2019/08/07/4009424/vna_potal_di_tich_quoc_gia_dac_biet_dia_dao_vinh_moc_va_he_thong_lang_ham_vinh_linh_105628490_stand.jpg',
            ],



        ]);
    }
}
