<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model {
    protected $table = "match";

    public function getMatch($match_id)
    {
      return self::Select('match.id','team1.name as team1_name','team1.logo as team1_logo',
                            'team2.name as team2_name','team2.logo as team2_logo', 'schedule_time',
                            'result','match.team1_point','match.team2_point'
        )->join('team as team1','match.team1_id','=','team1.id')->
        join('team as team2','match.team2_id','=','team2.id')->where('match.id',$match_id)->get();
    }

    public function getMatchTeamWise($team_id,$only_Advance=null)
    {
      if(!$only_Advance)
      {
        return self::Select('match.id','team1.name as team1_name','team1.logo as team1_logo',
                              'team2.name as team2_name','team2.logo as team2_logo', 'schedule_time',
                              'result','match.team1_point','match.team2_point'
          )->join('team as team1','match.team1_id','=','team1.id')->
          join('team as team2','match.team2_id','=','team2.id')
          ->where('match.team1_id',$team_id)->orWhere('match.team2_id',$team_id)->get();
      }
      else {
        return self::Select('match.id','team1.name as team1_name','team1.logo as team1_logo',
                              'team2.name as team2_name','team2.logo as team2_logo', 'schedule_time',
                              'result','match.team1_point','match.team2_point'
          )->join('team as team1','match.team1_id','=','team1.id')->
          join('team as team2','match.team2_id','=','team2.id')
          ->where('result', 0)->Where(function ($query) use ($team_id)
          {
            $query->where('match.team1_id',$team_id)->orWhere('match.team2_id',$team_id);
          })->get();
      }
    }

    public function getAllMatches()
    {
        return self::Select('match.id','team1.name as team1_name','team1.logo as team1_logo',
                            'team2.name as team2_name','team2.logo as team2_logo', 'schedule_time',
                            'result','match.team1_point','match.team2_point'
        )->join('team as team1','match.team1_id','=','team1.id')->
        join('team as team2','match.team2_id','=','team2.id')->get();
    }

    public function getTeam()
    {
        return $this->belongsTo(Teams::class,'team_id');
    }
    public function createMatch($attributes)
    {
      self::insert(array(
            'team1_id' => $attributes['team1_id'],
            'team2_id' => $attributes['team2_id'],
            'schedule_time' => $attributes['schedule_time'],
        ));
    }
}
