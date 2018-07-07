<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamAttributes extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'team_attributes';

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
    protected $fillable = array('team_fifa_api_id','team_api_id','date','buildUpPlaySpeed', 'buildUpPlaySpeedClass', 'buildUpPlayDribbling','buildUpPlayDribblingClass','buildUpPlayPassing','buildUpPlayPassingClass','buildUpPlayPositioningClass',
        'chanceCreationPassing','chanceCreationPassingClass','chanceCreationCrossing','chanceCreationCrossingClass','chanceCreationShooting','chanceCreationShootingClass','chanceCreationPositioningClass','defencePressure','defencePressureClass','defenceAggression',
        'defenceAggressionClass','defenceTeamWidth','defenceTeamWidthClass','defenceDefenderLineClass','created_at', 'updated_at');

//    public function team()
//    {
//        return $this->belongsTo('App\Team')->withTimestamps();
//    }

    /**
     * The attributes that aren't mass assignable
     *
     * @var array
     */
    protected $guarded = array();
}
