<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model {

    protected $table = 'statistics';
    public $timestamps = false;
    protected $fillable = ['urt_usr_id', 'user_id', 'total_games', 'win', 'lose', 'tie', 'last_game_result'];
    protected $guarded = ['id'];
    protected $hidden = [''];

    // belongs to
    
    // has many

    // date mutators

}