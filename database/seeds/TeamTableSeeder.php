<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert([
            'name' => "Chennai Super Kings",
            'logo' => "csk.jpeg",
            'club'=>"Chennai",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);




    }
}
