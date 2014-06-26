<?php
/**
 * Created by PhpStorm.
 * User: bgdn
 * Date: 23.06.14
 * Time: 23:37
 */

class Contact extends Eloquent {

    protected $fillable = ['inviter', 'invitee'];

    public function inviter () {
        return $this->belongsTo('User', 'inviter');
    }

    public function invitee() {
        return $this->belongsTo('User', 'invitee');
    }

}