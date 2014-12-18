<?php
/**************************
*postSignup code, postLogin code borrowed from FooBooks 
*example as most is similar.  Made with minor adjustments.
***************************/
class UserController extends BaseController {

    public function __construct() {
    
        parent::__construct();

    $this->beforeFilter('guest', 
        array('only' => array('getLogin', 'getSignup')));
    }

  
    public function getSignup() {
        return View::make('signup');
    }


    public function postSignup() {


        # Step 1) Define the rules
        $rules = array(
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        );
        # Step 2)
        $validator = Validator::make(Input::all(), $rules);
        # Step 3
        if($validator->fails()) {
            return Redirect::to('/signup')
                ->with('flash_message', 'Sign up failed; please fix the errors listed below.')
                ->withInput()
                ->withErrors($validator);
        }
        $user = new User;
        $user->name = Input::get('name');
        $user->email    = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        try {
            $user->save();
        }
        catch (Exception $e) {
            return Redirect::to('/signup')
                ->with('flash_message', 'Sign up failed; please try again.')
                ->withInput();
        }
        # Log in
        Auth::login($user);
        //$user->sendWelcomeEmail();
        return Redirect::to('/')->with('flash_message', 'Welcome to Bite Me Bouquet, '.$user.'!');
    }

    public function getLogin() {

        return View::make('login');
    }

    public function postLogin() {

    }

    public function getLogout() {
        //return View::make('logout');
    }

}