<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'schedule';

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
    protected $fillable = array('league_id','referee_id','date','month','year','hour','minute','second','home_team_api_id','home_team_name','away_team_api_id','away_team_name','stadium','status_final_time','prediction_result','created_at', 'updated_at');

    /**
     * The attributes that aren't mass assignable
     *
     * @var array
     */
    protected $guarded = array();

    public function homeTeams()
    {
        return $this->belongsToMany('HomeSchedule', 'team', 'home_tim_id', 'id');
    }

}
