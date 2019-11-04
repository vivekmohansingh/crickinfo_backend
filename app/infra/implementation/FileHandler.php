<?php
namespace App\infra\implementation;
use App\infra\infrainterface\FileHandlerInterface;
//use App\repo\PlayerSummary;

class FileHandler implements FileHandlerInterface
{
    private $arrFileType;

    public function __construct($file_type)
    {
      $this->arrFileType = explode(',',$file_type);
    }

    public  function upload($objfile)
    {
        if(!$this->validation($objfile->extension()))
            return false;
        $picName = $objfile->getClientOriginalName();
        $destinationPath = '/var/www/html/ustech/public/img'; //Need to put this is in config file
        $objfile->move($destinationPath, $picName);
        return $picName ;

    }

    public function delete()
    {
      return true;
    }

    public function validation($extension)
    {

       return in_array($extension, $this->arrFileType);

    }

    public function setuploadtype()
    {
      return true;
    }

    public function rename()
    {
      return true;
    }


}

?>
