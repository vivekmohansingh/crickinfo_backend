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
       DB::table('team')->insert([
            'name' => "Mumbai Indians",
            'logo' => "mumbai.jpeg",
            'club'=>"Mumbai",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
       DB::table('team')->insert([
            'name' => "Royal Challengers Banglore",
            'logo' => "rcb.jpeg",
            'club'=>"Banglore",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
       DB::table('team')->insert([
            'name' => "Kolkata Knight Riders",
            'logo' => "kkr.jpeg",
            'club'=>"Kolkata",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
       DB::table('team')->insert([
            'name' => "Delhi Capitals",
            'logo' => "dc.jpeg",
            'club'=>"Delhi",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);

      DB::table('player')->insert([
            'team_id' => 1,
            'f_name' => "Mahendra Singh",
            'l_name' => "Dhoni",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"10",
            'country'=>"India",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 1,
            'f_name' => "Imran",
            'l_name' => "Tahir",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"15",
            'country'=>"South Africa",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 2,
            'f_name' => "Rohit",
            'l_name' => "Sharma",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"18",
            'country'=>"India",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 3,
            'f_name' => "AB",
            'l_name' => "Devilliers",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"20",
            'country'=>"South Africa",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 2,
            'f_name' => "Lasith",
            'l_name' => "Malinga",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"29",
            'country'=>"Sri Lanka",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 3,
            'f_name' => "Virat",
            'l_name' => "Kohli",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"34",
            'country'=>"India",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 4,
            'f_name' => "Dinesh",
            'l_name' => "Kartik",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"26",
            'country'=>"India",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 4,
            'f_name' => "Andre",
            'l_name' => "Russel",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"23",
            'country'=>"West Indies",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 5,
            'f_name' => "Shikher",
            'l_name' => "Dhwan",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"18",
            'country'=>"India",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('player')->insert([
            'team_id' => 5,
            'f_name' => "Prithavi",
            'l_name' => "Shaw",
            'imageuri' => "player.jpeg",
            'jersey_number'=>"18",
            'country'=>"India",
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
      DB::table('match')->insert([
            'team1_id' => 1,
            'team2_id' => 2,
            'schedule_time' => "2019-09-17 00:00:00",
            'result' => 0,
            'team1_point' => 0,
            'team2_point'=>0,
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
     DB::table('match')->insert([
            'team1_id' => 3,
            'team2_id' => 1,
            'schedule_time' => "2019-09-25 00:00:00",
            'result' => 3,
            'team1_point' => 11,
            'team2_point'=>3,
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
     DB::table('match')->insert([
            'team1_id' => 1,
            'team2_id' => 2,
            'schedule_time' => "2019-11-03 22:21:24",
            'result' => 1,
            'team1_point' => 12,
            'team2_point'=>0,
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);

    DB::table('player_summary')->insert([
            'player_id' => 2,
            'match_id' => 1,
            'team_id' => 1,
            'runs' => 56,
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
   DB::table('player_summary')->insert([
            'player_id' => 2,
            'match_id' => 1,
            'team_id' => 1,
            'runs' => 156,
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
   DB::table('player_summary')->insert([
            'player_id' => 2,
            'match_id' => 1,
            'team_id' => 1,
            'runs' => 23,
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
   DB::table('player_summary')->insert([
            'player_id' => 2,
            'match_id' => 1,
            'team_id' => 1,
            'runs' => 182,
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);
  DB::table('player_summary')->insert([
            'player_id' => 2,
            'match_id' => 1,
            'team_id' => 1,
            'runs' => 59,
            'created_at'=>new DATETIME,
            'updated_at'=>new DATETIME
        ]);



    }
}
