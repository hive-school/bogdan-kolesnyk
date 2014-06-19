<?php
/**
 * Created by PhpStorm.
 * User: bgdn
 * Date: 6/19/14
 * Time: 1:44 PM
 */

class MessageController extends BaseController {

    public function messageList() {
        return View::make('message.list');
    }
} 