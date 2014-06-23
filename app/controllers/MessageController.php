<?php
/**
 * Created by PhpStorm.
 * User: bgdn
 * Date: 6/19/14
 * Time: 1:44 PM
 */

class MessageController extends BaseController {

    public function showAll() {
        return View::make('message.showAll');
    }

    public function showReceived() {
        return View::make('message.showAll');
    }

    public function showSent() {
        return View::make('message.showAll');
    }

    public function show($id=null) {
        return View::make('message.show');
    }

    public function create() {
        return View::make('message.create');
    }
} 