<?php

use Illuminate\Database\Seeder;
use App\StudyContent;

class StudyContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StudyContent::class, 100)->create();
    }
}
