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
      * @param object Matches of Matches model.
      * @param object MatchValidationInterface(dependency inverison principle applied here) MatchValidation class.
      * To check the actual implementation of the Interface see ServiceProvider class
      *@return void nothing
  */
    public function __construct(Matches $obj,MatchValidationInterface $matchValidateObj)
    {
        $this->matchModel = $obj;
        $this->matchValidate = $matchValidateObj;
    }

  /**
    *Method is used to fetch team specific or all scheduled matches depend on id
      * @param int id : Optional Match ID
      * @return object ORM   
 
  */
    public function getMatchTeamWise($id = null) {
      $teamid = $id;
      return $this->matchModel->getMatchTeamWise($teamid,0); //Matches that are scheduled

    }
  /**    
      *Method is used to schedule matches between the teams   
      * @param object Request Complete request object
      * @return object response
      
  */
    public function createMatch(Request $request)
    {  
      //Various validations checked here like empty request,invalid teams
      //Match already scheduled for respective teams on requested dates 
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
        }else if($validationFlag['errorcode'] == 406){
        return response('',Response::HTTP_NOT_ACCEPTABLE);                  
        }else{
        return response('',Response::HTTP_NOT_FOUND);        
        }
       }
      }
      
    }

  /**
      *Method is used to fetch team specific or all scheduled matches depend on id
       *which are completed based on result 
      * @param int id : Optional Match ID
      * @return object ORM : match data
      
  */
    public function getFixtureTeamWise($id = null) {
      $teamid = $id;
       return $this->matchModel->getMatchTeamWise($teamid,1); //Matches that are scheduled
    }
}
