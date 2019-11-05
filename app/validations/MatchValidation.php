<?php
namespace App\validations;

use App\Models\Matches;
use App\validations\Team;
use App\interfacerepo\TeamInterface;
use App\interfacerepo\MatchValidationInterface;
use Illuminate\Support\Facades\DB;



class MatchValidation implements MatchValidationInterface
{

private $matchModelObj;
private $teamObj;
public function __construct(Matches $obj,TeamInterface $teamobj){
 $this->matchModelObj = $obj;
 $this->teamObj = $teamobj;
}

public  function isEmpty(array $attributes){
 foreach($attributes as $value){
 	if(!isset($value)){
 		return true;
 	}
 }

 return false;
}

public function validateInputs(array $attributes){
$teamId1 = (int)$attributes['team1_id'];
$teamId2 = (int)$attributes['team2_id'];
$scheduleTime = (string)$attributes['schedule_time'];

 if(empty($teamId1) || empty($teamId2) || empty($scheduleTime)){
 	return array('out' => false,'errorcode' => 400);
 }

 if($teamId1 == $teamId2){
  	return array('out' => false,'errorcode' => 406);	
 }
  	$out1 = $this->teamObj->getbyid($teamId1);

 	if(!count($out1)){
 		return array('out' => false,'errorcode' => 404);
 	}

 	$out2 = $this->teamObj->getbyid($teamId2);

 	 if(!count($out2)){
 		return array('out' => false,'errorcode' => 404);
 	}
 return array('out' => true,'errorcode' => 0);
}

public function checkIfMatchAlreadyExists(array $attributes){
  $out = $this->matchModelObj->checkAlreadyMatchOnSameDate($attributes); 
  return $out;
}

}