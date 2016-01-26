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
    public function ref_user_id()
    {
            return $this->belongsTo('App\User', 'user_id');
    }

    // has many

    // date mutators

}