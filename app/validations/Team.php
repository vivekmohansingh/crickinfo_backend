<?php

namespace App\validations;

use App\Models\Teams;
use App\interfacerepo\TeamInterface;

class Team implements TeamInterface{

private $teamObj;

public function __construct(Teams $teamObj){
$this->teamObj = $teamObj;
}

public function getbyid($team_id){
return $this->teamObj->getTeam($team_id);
}	
}