<?php
/**************************
*postSignup code, postLogin code borrowed from FooBooks 
*example as most is similar.  Made with minor adjustments.
***************************/
class UserController extends BaseController {

    public function __construct() {
    
        parent::__construct();

    $this->beforeFilter('guest', 
        array(
                'only' => array('getLogin', 'getSignup')
        ));
    }

  
    public function getSignup() {

                  return View::make('signup');
      
    }


    public function postSignup() {


       
        $rules = array(
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()) {
            return Redirect::to('/signup')
                ->with('flash_message', 'Sign up failed; please fix the errors listed below.')
                ->withInput()
                ->withErrors($validator);
        }

        #new user code..
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
       
        return Redirect::to('/')->with('flash_message', 'Welcome to Bite Me Bouquet!');
    }

    public function getLogin() {

        return View::make('login');
    }

    public function postLogin() {

        $credentials = Input::only('email', 'password');

        if(Auth::attempt($credentials, $remember = true)) {
            return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
        } else {
            return Redirect::to('/login')
                ->with('flash_message', 'Log in failed; please try again.')
                ->withInput();
        }
    }

    public function getLogout() {
        #logout and return homepage view
        Auth::logout();

        return Redirect::to('/');
    }

}