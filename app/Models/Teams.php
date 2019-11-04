<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model {
    protected $table = "team";
    protected $fillable = ['name', 'club','created_at', 'updated_at'];
    public function getTeam($team_id)
    {
        return self::where('id',$team_id)->with('getPlayers')->get();
    }

    public function getAllTeams()
    {
        return self::with('getPlayers')->get();
    }

    public function createTeam(array $attribute)
    {
        return self::create($attribute);
    }

    public function updateTeam($team_id,array $attribute)
    {
        $objDetail =  self::find($team_id);
        foreach($attribute as $key=>$val)
        {
          $objDetail->$key = $val;
        }
        $objDetail->save();
        return response()->json($objDetail);
    }

    public function deleteTeam($team_id)
    {
        $objDetail =  self::find($team_id);
        $objDetail->delete();
        return response()->json('Removed....');
    }

    public function getPlayers()
    {
        return $this->hasMany(Players::class, 'team_id');
    }
}
