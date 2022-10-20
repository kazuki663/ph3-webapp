<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'language' => 'HTML',
            'color' => '#0042e5',
        ];

        $param = [
            'language' => 'CSS',
            'color' => '#0070b9',
        ];

        $param = [
            'language' => 'JavaScript',
            'color' => '#01bdda',
        ];

        $param = [
            'language' => 'PHP',
            'color' => '#02cdfa',
        ];

        $param = [
            'language' => 'Laravel',
            'color' => '#b29dee',
        ];

        $param = [
            'language' => 'SQL',
            'color' => '#6c43e5',
        ];

        $param = [
            'language' => 'SHELL',
            'color' => '#460ae8',
        ];

        $param = [
            'language' => '情報システム基礎知識（その他）',
            'color' => '#460ae8',
        ];

        DB::table('languages')->insert($param);
    }
}
