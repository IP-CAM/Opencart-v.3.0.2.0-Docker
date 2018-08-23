<?php
class ControllerCheckoutConvenienceStore extends Controller {
	public function index() {
        setcookie( "route", $this->request->get['shop_route'], time()+3600);
        setcookie( "name", $this->request->get['shop_name'], time()+3600);
        setcookie( "address", $this->request->get['shop_address'], time()+3600);

        echo "<script>window.close();</script>";
	}	
}