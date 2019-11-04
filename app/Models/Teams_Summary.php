<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Teams_Summary extends Model {
    protected $table = "team_summary";

    public function getTeamSummary($team_id)
    {
        return self::where('id',$team_id)->get();
    }

}
