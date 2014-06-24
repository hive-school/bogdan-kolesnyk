<?php
/**
 * Created by PhpStorm.
 * User: bgdn
 * Date: 23.06.14
 * Time: 23:37
 */

class message extends Eloquent {

    protected $table = 'messages';

    public function author() {
        return $this->belongsTo('User', 'from');
    }

    public function receiver() {
        return $this->belongsTo('User', 'to');
    }
} 