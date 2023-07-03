<?php

namespace Database\Seeders;

use App\Models\Main;
use Illuminate\Database\Seeder;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Main::create([
            'title' => "Title",
            'sub_title' => 'Sub-Title',
            'bg_img' => 'null',
            'resume' => "resume",
        ]);
    }
}
