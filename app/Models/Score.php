<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'game_id',
        'user_id',
        'bat',
        'hit',
        'single_hit',
        'double_hit',
        'triple_hit',
        'homerun',
        'fourball',
        'deadball',
        'score',
        'rbi',
        'sacrifice_hit',
        'sacrifice_fly',
        'adavance_base',
        'stolen_Base',
        'death_stolen',
        'strike_out',
        'faux_pas',
        'double_play',
        'assisting',
        'stabbing_death'
    ];
}
