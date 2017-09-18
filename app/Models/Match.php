<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;

class Match extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['home_team', 'away_team', 'home_team_goals', 'away_team_goals'];

    public function awayTeam()
    {
        return $this->belongsTo('App\Models\Team', 'away_team_id');
    }

    public function homeTeam()
    {
        return $this->belongsTo('App\Models\Team', 'home_team_id');
    }

    public function scopeTimeFrame($query, $timeFrame = null, $date = null)
    {
        if ($date && $timeFrame) {
            $query->where('date', '>=', Carbon::createFromFormat('Y-m-d', $date))
                ->where('date', '<=', Carbon::createFromFormat('Y-m-d', $date)->addDays($timeFrame));
        }

        return $query;
    }

    /**
     * Get the match date
     * (uses eloquent mutations to reformat the date)
     *
     * @param  string  $value
     * @return string
     */
    public function getDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d-m-y H:i');
    }
}
