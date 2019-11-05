<?php
namespace App\interfacerepo;

interface MatchValidationInterface 
{

  public  function isEmpty(array $attributes);

  public function validateInputs(array $attributes);

  public function checkIfMatchAlreadyExists(array $attributes);

}