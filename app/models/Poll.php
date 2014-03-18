<?php

/**
 * An Eloquent Model: 'Poll'
 *
 * @property integer $id
 * @property mixed $_id
 * @property string $slug
 * @property string $title
 * @property string $subtitle
 * @property \Carbon\Carbon $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\PollOption[] $options
 */
class Poll extends \Eloquent {
    protected $fillable = [];

	public function options()
    {
        return $this->hasMany('PollOption');
    }    
}