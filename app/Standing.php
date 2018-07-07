<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'standings';

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
    protected $fillable = array('team_api_id','team_name','match_play','win','draw','lose','points','created_at', 'updated_at');

    /**
     * The attributes that aren't mass assignable
     *
     * @var array
     */
    protected $guarded = array();

}
