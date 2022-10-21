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

        DB::table('languages')->insert($param);

        $param = [
            'language' => 'CSS',
            'color' => '#0070b9',
        ];

        DB::table('languages')->insert($param);

        $param = [
            'language' => 'JavaScript',
            'color' => '#01bdda',
        ];

        DB::table('languages')->insert($param);

        $param = [
            'language' => 'PHP',
            'color' => '#02cdfa',
        ];

        DB::table('languages')->insert($param);

        $param = [
            'language' => 'Laravel',
            'color' => '#b29dee',
        ];

        DB::table('languages')->insert($param);

        $param = [
            'language' => 'SQL',
            'color' => '#6c43e5',
        ];

        DB::table('languages')->insert($param);

        $param = [
            'language' => 'SHELL',
            'color' => '#460ae8',
        ];

        DB::table('languages')->insert($param);

        $param = [
            'language' => '情報システム基礎知識（その他）',
            'color' => '#460ae8',
        ];

        DB::table('languages')->insert($param);
    }
}
