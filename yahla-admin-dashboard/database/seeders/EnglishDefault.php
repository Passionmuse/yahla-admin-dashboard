<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Language;
use Carbon\Carbon;

class EnglishDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $language_exist = Language::where('title', 'English')->first();

        if ($language_exist != '') return;

        DB::table('languages')->insert([
            'title' => 'English',
            'icon' => 'US',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
