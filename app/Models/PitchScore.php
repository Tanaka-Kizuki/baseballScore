<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PitchScore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'pitching',
        'starter',
        'intermediate',
        'win',
        'lose',
        'complete_game'
        'shoutout',
        'save',
        'hold',
        'pitching_innings',
        'batters',
        'pitches',
        'hits',
        'homeruns',
        'strikeout',
        'fly',
        'grounder',
        'walks',
        'HB',
        'wild_pitch',
        'conceded_points',
        'earned_run'
    ];
}
