<?php
class ControllerCheckoutReturnCookie extends Controller {
	public function index() {
        $cookie['route']  = @$_COOKIE["route"];
        $cookie['name']  = @$_COOKIE["name"];
        $cookie['address']  = @$_COOKIE["address"];
	
        print_r( json_encode($cookie));
	}	
}
