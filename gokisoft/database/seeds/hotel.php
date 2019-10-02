<?php

use Illuminate\Database\Seeder;

class hotel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel')->insert([
            'maP' => 1,
            'loaiP' => 'thuong',
            'tang' => 2,
            'gia' => 12,
            'tenKS' =>'hoa sen',
            'diachi' =>'Ha Noi'
        ]);

    }
}
