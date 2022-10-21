<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'N予備校',
            'color' => '#0070b9',
        ];

        DB::table('contents')->insert($param);

        $param = [
            'content' => 'ドットインストール',
            'color' => '#0042e5',
        ];

        DB::table('contents')->insert($param);

        $param = [
            'content' => 'POSSE課題',
            'color' => '#01bddb',
        ];

        DB::table('contents')->insert($param);
    }
}
