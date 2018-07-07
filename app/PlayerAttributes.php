<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerAttributes extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'player_attributes';

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
    protected $fillable = array('player_fifa_api_id','player_api_id','date', 'overall_rating', 'potential','preferred_foot','attacking_work_rate','defensive_work_rate','crossing',
        'finishing','heading_accuracy','short_passing','volleys','dribbling','curve','free_kick_accuracy','long_passing','ball_control','acceleration',
        'sprint_speed','agility','reactions','balance','shot_power','jumping','stamina','strength','long_shots','aggression','interceptions',
        'positioning','vision','penalties','marking','standing_tackle','sliding_tackle','gk_diving','gk_handling','gk_kicking','gk_positioning','gk_reflexes','created_at', 'updated_at');


    /**
     * The attributes that aren't mass assignable
     *
     * @var array
     */
    protected $guarded = array();

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_api_id');
    }
}
