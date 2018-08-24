<?php
class ControllerCheckoutReturnCookie extends Controller {
	public function index() {
        $cookie['route']  = @$_COOKIE["route"];
        $cookie['name']  = @$_COOKIE["name"];
        $cookie['address']  = @$_COOKIE["address"];

        return $cookie;
	}	
}