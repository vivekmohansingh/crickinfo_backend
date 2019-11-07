<?php
/**
 * Class is used to handle team level validations
 */
namespace App\validations;

use App\Models\Teams;
use App\interfacerepo\TeamInterface;

class Team implements TeamInterface{

private $teamObj;
  /**
      * @param object teamObj Teams model object
      * To check the actual implementation of the Interface see ServiceProvider class
      *@return void nothing
  */
public function __construct(Teams $teamObj){
$this->teamObj = $teamObj;
}
  /**
  	*Method is used to fetch team wise data
      * @param int team_id Team ID
      *@return object ORM : team data
  */
public function getbyid($team_id){
return $this->teamObj->getTeam($team_id);
}	
}