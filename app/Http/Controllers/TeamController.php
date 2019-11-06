<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Models\Players;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class TeamController extends Controller
{
  private $teamModel;
  private $playerModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Teams $team,Players $player)
    {
        $this->teamModel = $team;
        $this->playerModel = $player;
    }
    /**
     * @OA\Get(
     *     path="/sample/{category}/things",
     *     operationId="/sample/category/things",
     *     tags={"yourtag"},
     *     @OA\Parameter(
     *         name="category",
     *         in="path",
     *         description="The category parameter in path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="criteria",
     *         in="query",
     *         description="Some optional other parameter",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Returns some sample category things",
     *         @OA\JsonContent()
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *     ),
     * )
     */
    public function getTeam($id = null)
    {
      $team_id = $id;
      if($team_id)
      {
        return $this->teamModel->getTeam($team_id);
      }
      else {
        return $this->teamModel->getAllTeams($team_id);
      }

    }

    public function createTeam(Request $request)
    {
      return $this->teamModel->createTeam($request->all());
    }

    public function updateTeam(Request $request,$team_id)
    {
      return $this->teamModel->updateTeam($team_id,$request->all());
    }

    public function addTeamPlayer(Request $request)
    {
        $team_id = $request->get('team_id');
        $player_id = $request->get('player_id');
        return $this->playerModel->updatePlayer($player_id,array('team_id'=>$team_id));
    }

    public function deleteTeam($team_id)
    {
      return $this->teamModel->deleteTeam($team_id);
    }
}
