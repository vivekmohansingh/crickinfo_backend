<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Players extends Model {
    protected $table = "player";
    protected $fillable = ['f_name', 'l_name', 'jersey_number', 'country', 'created_at', 'updated_at'];
    public function getPlayer($player_id)
    {
        return self::where('id',$player_id)->with('getTeam')->get();
    }

    public function getAllPlayers()
    {
        return self::with('getTeam')->get();
    }

    public function createPlayer(array $attribute)
    {
        return self::create($attribute);
    }

    public function updatePlayer($player_id,array $attribute)
    {
        $objDetail =  self::find($player_id);
        foreach($attribute as $key=>$val)
        {
          $objDetail->$key = $val;
        }
        $objDetail->save();
        return response()->json($objDetail);
    }

    public function deletePlayer($player_id)
    {
        $objDetail =  self::find($player_id);
        $objDetail->delete();
        return response()->json('Removed....');
    }

    public function getTeam()
    {
        return $this->belongsTo(Teams::class,'team_id');
    }
}
