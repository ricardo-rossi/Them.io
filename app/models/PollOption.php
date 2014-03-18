<?php

/**
 * An Eloquent Model: 'PollOption'
 *
 * @property integer $id
 * @property mixed $_id
 * @property integer $poll_id
 * @property string $label
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class PollOption extends \Eloquent {
    protected $fillable = [];
}