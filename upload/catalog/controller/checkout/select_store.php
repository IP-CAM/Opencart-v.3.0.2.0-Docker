<?php
class ControllerCheckoutSelectStore extends Controller {
	public function index() {
        setcookie( "route", $_REQUEST['shop_route'], time()+3600);
        setcookie( "name", $_REQUEST['shop_name'], time()+3600);
        setcookie( "address", $_REQUEST['shop_address'], time()+3600);

        echo "<script>window.close();</script>";
	}	
}
