<?php
namespace App\infra\infrainterface;

interface FileHandlerInterface {

  public  function upload($objfile);

  public function delete();

  public function validation($extension);

  public function setuploadtype();

  public function rename();

}

?>
