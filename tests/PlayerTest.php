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
        $this->get('api/player/');
        $this->seeStatusCode(200);
        $this->seeJsonStructure($structure);
        //$this->assertEquals(200, $response->status());
    }

    /**
     *Test for get single players
     *
     * @return void
     */
    public function testGetSinglePlayer()
    {
        $structure = array (["id","team_id","f_name","l_name","imageuri","jersey_number","country","created_at","updated_at"]);
        $this->get('api/player/1');
        $this->seeStatusCode(200);
        $this->seeJsonStructure($structure);
        //$this->assertEquals(200, $response->status());
    }

    /**
     *Test for getting non existing player
     *
     * @return void
     */
    public function testGetWrongPlayer()
    {
        $this->get('api/player/11111');
        $this->seeStatusCode(404);
        //$this->assertEquals(200, $response->status());
    }

    /**
     *Unauthorised Post Request
     *
     * @return void
     */
    public function testCreatePlayer_unauthorised()
    {

        $param = array("f_name"=>"test","l_name"=>"player","jersey_number"=>"11","country"=>"India");
        $header = array('Content-Type'=>'application/json');
        $this->post('api/player/', $param, $header);
        $this->seeStatusCode(401);
        //$this->assertEquals(200, $response->status());
    }

    /**
     *Authorised Post Request
     *
     * @return void
     */
    public function testCreatePlayer_authorised()
    {
        $token = $this->getToken();
        $param = array("f_name"=>"test","l_name"=>"player","jersey_number"=>"11","country"=>"India");
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->data = json_decode($this->post('api/player/', $param, $header)->response->getContent());
        \DB::rollBack();
        $this->seeStatusCode(200);

    }

    /**
     *Authorised Post Request With Wrong Key
     *
     * @return void
     */
    public function testCreatePlayer_authorised_wrongkey()
    {
        $token = $this->getToken();
        $param = array("f_name"=>"test","l_name1"=>"player","jersey_number"=>"11","country"=>"India");
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->data = json_decode($this->post('api/player/', $param, $header)->response->getContent());
        \DB::rollBack();
        $this->seeStatusCode(200);

    }

    /**
     *Authorised Create Request with special character
     *
     * @return void
     */
    public function testCreatePlayer_specialcharachter()
    {
        $token = $this->getToken();
        $param = array("f_name"=>"test","l_name"=>"player's","jersey_number"=>"11","country"=>"India");
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->post('api/player/', $param, $header);
        \DB::rollBack();
        $this->seeStatusCode(200);

    }

    /**
     *Authorised Create Request with very lengthy name
     *
     * @return void
     */
    public function testCreatePlayer_longname()
    {
        $token = $this->getToken();
        $f_name = 'test222222222222222222222222222222222eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeewwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeesdsdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss';
        $param = array("f_name"=>$f_name,"l_name"=>"players","jersey_number"=>"11","country"=>"India");
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->post('api/player/', $param, $header);
        \DB::rollBack();
        $this->seeStatusCode(200);

    }

    /**
     *Authorised Update Request
     *
     * @return void
     */
    public function testUpdatePlayer_authorised()
    {
        $token = $this->getToken();
        $param = array("f_name"=>"test");
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->put('api/player/1', $param, $header);
        \DB::rollBack();
        $this->seeStatusCode(200);

    }

    /**
     *UnAuthorised Update Request
     *
     * @return void
     */
    public function testUpdatePlayer_unauthorised()
    {
        $token = 1;
        $param = array("f_name"=>"test");
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->put('api/player/1', $param, $header);
        \DB::rollBack();
        $this->seeStatusCode(401);

    }

    /**
     *Authorised Update Request with wrong key
     *
     * @return void
     */
    public function testUpdatePlayer_authorised_wrongkey()
    {
        $token = $this->getToken();
        $param = array("f_name1"=>"test");
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->put('api/player/1', $param, $header);
        \DB::rollBack();
        $this->seeStatusCode(400);

    }

    /**
     *Authorised Delete Request
     *
     * @return void
     */
    public function testDeletePlayer_authorised()
    {
        $token = $this->getToken();
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->delete('api/player/1', array(), $header);
        \DB::rollBack();
        $this->seeStatusCode(200);

    }

    /**
     *Authorised Delete Request that doesn't exist
     *
     * @return void
     */
    public function testDeletePlayer_notexist()
    {
        $token = $this->getToken();
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->delete('api/player/11111', array(), $header);
        \DB::rollBack();
        $this->seeStatusCode(400);

    }

    /**UnAuthorised Delete Request
     *
     * @return void
     */
    public function testDeletePlayer_unauthorised()
    {
        $token = 1;
        $header = array('HTTP_Content-Type'=>'application/json','HTTP_Authorization'=>$token);
        \DB::beginTransaction();
        $this->delete('api/player/1', array(), $header);
        \DB::rollBack();
        $this->seeStatusCode(401);

    }
    private function getToken()
    {
        $param = array("grant_type"=>"client_credentials","scope"=>"*",
            "client_id"=>"5","client_secret"=>"KTaXtMwq9h5Wn3MutHq7zGpuQ8vVcKlqNn7bec56");
        $header = array('HTTP_Content-Type'=>'application/json');
        $data = json_decode($this->post('api/passport/oauth/token',$param, $header)->response->getContent());
        //dd($data);
        return 'Bearer '.$data->access_token;
    }
}
