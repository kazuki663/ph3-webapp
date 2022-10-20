<?php

use App\StudyLanguage;
use Illuminate\Database\Seeder;

class StudyLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StudyLanguage::class, 100)->create();
    }
}
