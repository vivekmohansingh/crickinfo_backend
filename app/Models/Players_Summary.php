<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Players_Summary extends Model {
    protected $table = "player_summary";
    private $player_id;
    public function getPlayerSummary($player_id)
    {
        $this->player_id = $player_id;
        
        $total_match =  $this->gettotalMatch();
        $total_run =  $this->gettotalRun();
        $total_fifty =  $this->gettotalFifty();
        $total_hundrad =  $this->gettotalHundrad();
        $highest_score =  $this->getHighestScore();
        return array('total_match'=>$total_match,'total_run'=>$total_run,'total_six'=>0,'total_fifty'=>$total_fifty,'total_hundrad'=>$total_hundrad,'hscore'=>$highest_score
      );
        
    }

    private function gettotalMatch()
    {
      return self::where('player_id',$this->player_id)->groupBy('player_id')->count('match_id');
    }

    private function gettotalRun()
    {
      return self::where('player_id',$this->player_id)->groupBy('player_id')->sum('runs');
    }

    private function gettotalFifty()
    {
        return self::where('player_id',$this->player_id)->where('runs','>',49)->where('runs','<',100)->get()->count();

    }
    private function gettotalHundrad()
    {
        return self::where('player_id',$this->player_id)->where('runs','>',99)->get()->count();
    }
    private function getHighestScore()
    {
        return self::where('player_id',$this->player_id)->groupBy('player_id')->max('runs');
    }

}
