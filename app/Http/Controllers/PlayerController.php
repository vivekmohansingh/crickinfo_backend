<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Players_Summary;
use Illuminate\Http\Request;
/**
 * Player Controller class to handle all request coming from http router related to player
 */

    class PlayerController extends Controller
    {
        private $playerModel;
        private $PlayerSummary;

        /**
            * @param Object obj of Players model object
            * @param Object objSummary Players_Summary model object.
            * @return void nothing
        */
        public function __construct(Players $obj,Players_Summary $objSummary)
        {
            $this->playerModel = $obj;
            $this->playerSummary = $objSummary;
        }

        /**
         *getPlayer method to get details of one player or multiple players based on playerid
         * @param int id Optional. Id of player for which we need to fetch detail. Pass null to get
         * all players
         * @return mixed ORM/response : player data or response object

         */
        public function getPlayer($id = null)
        {
            $player_id = $id;
            $result = '';
            if($player_id)
            {
              $result = $this->playerModel->getPlayer($player_id);

            }
            else
            {

              $result = $this->playerModel->getAllPlayers($player_id);

            }
            if($result->isEmpty())
            {
                return response()->json(array("Resource Not Found"),404);
            }
            return response()->json($result,200);

        }

        /**
         * getPlayerHistory method to get summary of a player
         * @param string $id id of player
         * @return array player_detail player details
         */
        public function getPlayerHistory($id)
        {

          $player_id = $id;
          $player_detail = json_decode($this->playerModel->getPlayer($player_id),true);
          //merge data in player summary
          $player_detail[0]['player_Summary'] = $this->playerSummary->getPlayerSummary($player_id);
          //dd($player_detail);
          return $player_detail;          
        }

    }

?>
