<?php
 
class UsersController extends BaseController {

    public function getRegister() {
    // load the view 
        return View::make('users.register');
	}

	public function getLogin() {
    // load the view 
        return View::make('users.login');
	}




}
?>