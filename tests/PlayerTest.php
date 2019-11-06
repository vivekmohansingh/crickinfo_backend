<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\User;
class PlayerTest extends TestCase
{
    private $data;
    /**
     *Test for get all players
     *
     * @return void
     */
    public function testGetAllPlayer()
    {
        $structure = array ('*'=>array("id","team_id","f_name","l_name","imageuri","jersey_number","country","created_at","updated_at"));
        $this->get('api/player/', ['access_token' => env('ACCESS_TOKEN')]);
        $this->seeStatusCode(200);
        $this->seeJsonStructure($structure);
    }

    /**
     *Test for get single players
     *
     * @return void
     */
    public function testGetSinglePlayer()
    {
        $structure = array (["id","team_id","f_name","l_name","imageuri","jersey_number","country","created_at","updated_at"]);
        $this->get('api/player/1', ['access_token' => env('ACCESS_TOKEN')]);
        $this->seeStatusCode(200);
        $this->seeJsonStructure($structure);
        
    }

    /**
     *Test for getting non existing player
     *
     * @return void
     */
    public function testGetWrongPlayer()
    {
        $this->get('api/player/11111', ['access_token' => env('ACCESS_TOKEN')]);
        $this->seeStatusCode(404);
        
    }

    /**
     *Unauthorised Post Request
     *
     * @return void
     */
    public function testCreatePlayer_unauthorised()
    {

        $param = array("f_name"=>"unittest","l_name"=>"lplayer","jersey_number"=>"21","country"=>"India");
        $header = array('Content-Type'=>'application/json');
        $this->post('api/player/', $param, $header);
        $this->seeStatusCode(401);
    }
}
