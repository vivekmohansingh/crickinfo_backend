<?php
namespace App\infra\implementation;
use App\infra\implementation\FileHandler;
//use App\repo\PlayerSummary;


class ImageFileHandler extends FileHandler
{
    private $arrFileType;

    public function __construct()
    {
      parent::__construct('img,jpeg,jpg,png');
    }

}

?>
