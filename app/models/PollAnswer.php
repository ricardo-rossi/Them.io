<?php

/**
 * An Eloquent Model: 'PollAnswer'
 *
 * @property integer $id
 * @property mixed $_id
 * @property integer $poll_id
 * @property integer $poll_option_id
 * @property boolean $answer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class PollAnswer extends \Eloquent {
    protected $fillable = [];
}