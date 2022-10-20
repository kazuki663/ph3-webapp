<?php

use Illuminate\Database\Seeder;
use App\StudyTime;

class StudyTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StudyTime::class, 100)->create();
    }
}
