<?php

class Poll extends \Eloquent {
    protected $fillable = [];

	public function options()
    {
        return $this->hasMany('PollOption');
    }    
}