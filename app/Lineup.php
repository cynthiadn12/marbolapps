<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'lineup';

    /**
     * Indicates primary key of the table
     *
     * @var bool
     */
    public $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped
     *
     * default value is 'true'
     *
     * If set 'true' then created_at and updated_at columns
     * will be automatically managed by Eloquent
     *
     * If created_at and updated_at columns are not in your table
     * then set the value to 'false'
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = array('schedule_id', 'home_player_1','position_home_player1', 'home_player_2','position_home_player2','home_player_3','position_home_player3','home_player_4','position_home_player4','home_player_5','position_home_player5','home_player_6','position_home_player6','home_player_7','position_home_player7','home_player_8','position_home_player8','home_player_9','position_home_player9','home_player_10','position_home_player10','home_player_11','position_home_player11',
        'away_player_1','position_away_player1', 'away_player_2','position_away_player2','away_player_3','position_away_player3','away_player_4','position_away_player4','away_player_5','position_away_player5','away_player_6','position_away_player6','away_player_7','position_away_player7','away_player_8','position_away_player8','away_player_9','position_away_player9','away_player_10','position_away_player10','away_player_11','position_away_player11','created_at', 'updated_at');

    /**
     * The attributes that aren't mass assignable
     *
     * @var array
     */
    protected $guarded = array();

}
