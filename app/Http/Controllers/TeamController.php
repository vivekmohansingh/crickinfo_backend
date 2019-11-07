<?php
    /**
     * This class id mainly responsible for Team controller to handle all team API requests
     *
     * 
     */
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
     * @param object team Teams model object
     * @param object player Players model object
     * @return void nothing
     */
    public function __construct(Teams $team,Players $player)
    {
        $this->teamModel = $team;   // object of Teams model
        $this->playerModel = $player; // object of Players model
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

    /**
    * Method is used to fetch team's data
     * @param int id Team ID
     * @return object ORM : team data
     
     */ 
    public function getTeam($id = null)
    {
      $team_id = $id;
      if($team_id)
      {
        return $this->teamModel->getTeam($team_id); // return specific team info with players of that team
      }
      else {
        return $this->teamModel->getAllTeams($team_id); // return all teams info with players of that team
      }

    }
}
