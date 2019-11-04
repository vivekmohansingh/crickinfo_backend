<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Players_Summary;
use Illuminate\Http\Request;
/**
 * Player Controller class to handle all request coming from http router related to a player
 */

    class PlayerController extends Controller
    {
        private $playerModel;
        private $PlayerSummary;

        /**
             PlayerController class constructor
            * @param PlayerInterface $player Object of PlayerInterface. Bind with actual implementation at run time.
            * To check the actual implementation of the Interface see ServiceProvider class
            * @return object of controller
        */
        public function __construct(Players $obj,Players_Summary $objSummary)
        {
            $this->playerModel = $obj;
            $this->playerSummary = $objSummary;
        }

        /**
         *  getPlayer method to get details of one player or multiple players if argument playerid is null
         * @param string PlayerId Optional. Id of player for which we need to fetch detail. Pass null to get
         * all players
         * @return json response
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
         *  createPlayer method to Insert Player
         * @param Request $request object of http request
         * @return json response contain detail of newly inserted player
         */
        public function createPlayer(Request $request)
        {
          return $this->playerModel->createPlayer($request->all());
        }

        /**
         *  updatePlayer method to update any detail of player
         * @param Request $request object of http request
         * @param string $player_id id of player that needs to update
         * @return json response contain detail of updated player
         */
        public function updatePlayer(Request $request,$player_id)
        {
          return $this->playerModel->updatePlayer($player_id,$request->all());
        }


        /**
         *  deletePlayer method to delete player
         * @param string $player_id id of player that needs to be deleted
         * @return json response
         */
        public function deletePlayer($player_id)
        {
          return $this->playerModel->deletePlayer($player_id);
        }

        /**
         *  uploadPlayerImage method to upload image of a player
         * @param Request $request object of http request
         * @param string $player_id id of player that needs to be deleted
         * @return json response
         */
/*        public function uploadPlayerImage(Request $request,$player_id)
        {
            $objImage = $request->file('image');
            return $this->playerModel->uploadimage($objImage, $player_id);
        }*/

        /**
         *  getPlayerHistory method to get pistory of a player
         * @param string $id id of player
         * @return json response
         */
        public function getPlayerHistory($id)
        {

          $player_id = $id;
          $player_detail = json_decode($this->playerModel->getPlayer($player_id),true);
          
          //return $this->PlayerSummary->getSummary($player_id);
          $player_detail[0]['player_Summary'] = $this->playerSummary->getPlayerSummary($player_id);
          //dd($player_detail);
          return $player_detail;          
        }

    }

?>
