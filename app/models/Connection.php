<?php
/**
 * Created by PhpStorm.
 * User: bgdn
 * Date: 23.06.14
 * Time: 23:37
 */

class Connection extends Eloquent {

    public function inviter () {
        return $this->belongsTo('User', 'inviter');
    }

    public function invitee() {
        return $this->belongsTo('User', 'invitee');
    }

}