<?php

namespace App\Http\Controllers;

use App\interfacerepo\MatchValidationInterface;
use App\validations\MatchValidation;
use App\Models\Matches;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MatchController extends Controller
{
  private $matchModel;
  private $matchValidate;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Matches $obj,MatchValidation $matchValidateObj)
    {
        $this->matchModel = $obj;
        $this->matchValidate = $matchValidateObj;
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
      $emptyFlag = $this->matchValidate->isEmpty($request->all());

      if($emptyFlag){
        return response('',Response::HTTP_BAD_REQUEST);
      }else{
       $validationFlag =  $this->matchValidate->validateInputs($request->all());

       if($validationFlag['out']){
          $out = $this->matchValidate->checkIfMatchAlreadyExists($request->all());

           if($out){
               return response('',Response::HTTP_CONFLICT);        
           }else{
               return $this->matchModel->createMatch($request->all());      
           }
       }else{
        if($validationFlag['errorcode'] == 400){
        return response('',Response::HTTP_BAD_REQUEST);                  
        }else{
        return response('',Response::HTTP_NOT_FOUND);        
        }
       }
      }
      
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
