<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name'];

    public function homeFixtures()
    {
        return $this->belongsTo(Fixture::class, 'home_team_id', 'id');
    }

    public function awayFixtures()
    {
        return $this->belongsTo(Fixture::class, 'away_team_id', 'id');
    }

    public function allFixtures() {
        return $this->homeFixtures->merge($this->awayFixtures);
    }

}
