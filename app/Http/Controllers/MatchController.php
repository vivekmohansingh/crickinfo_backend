<?php

namespace App\Http\Controllers;
use App\Models\Matches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class MatchController extends Controller
{
  private $matchModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Matches $obj)
    {
        $this->matchModel = $obj;
    }

    public function getMatch($id = null) {
      $match_id = $id;
      if($match_id)
      {
        return $this->matchModel->getMatch($match_id);
      }
      else {
        return $this->matchModel->getAllMatches($match_id);
      }
    }

    /**
   * Get Match of Each Team
   *
   *
   */
    public function getMatchTeamWise($id = null) {
      $teamid = $id;
      return $this->matchModel->getMatchTeamWise($teamid,0); //Matches that are scheduled

    }

    public function createMatch(Request $request)
    {
      //print_r($request);die;
      return $this->matchModel->createMatch($request->all());
    }

    public function updateMatch(Request $request,$team_id)
    {
      return $this->matchModel->updatePlayer($team_id,$request->all());
    }

    public function deleteMatch($team_id)
    {
      return $this->matchModel->deletePlayer($team_id);
    }
    /**
   * Get Fixture of Each Team
   *
   *
   */
    public function getFixtureTeamWise($id = null) {
      $teamid = $id;
       return $this->matchModel->getMatchTeamWise($teamid,1); //Matches that are scheduled
    }

 /*   public function setTeamPlayer($teamid, $playerid) {

    }*/

    // public function



    //
}
