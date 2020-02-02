<?php
// A class to help work with Sessions
// In our case, primarily to manage logging users in and out

// Keep in mind when working with sessions that it is generally 
// inadvisable to store DB-related objects in sessions

class Session {
	
	private $logged_in=false;
  public $user_id;
  public $username;
	
	function __construct() {
		session_start();
		$this->check_login();
    if($this->logged_in) {
      // actions to take right away if user is logged in
      //header('location: index.php');
    } else {
      // actions to take right away if user is not logged in
      //header('location: login.php');
    }
	}
	
  public function is_logged_in() {
    return $this->logged_in;
  }

	public function login($user) {
    // database should find user based on username/password

    // Save $user->id in the $_SESSION["user_id"] variable

    if($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['username'] = $user->username;
      $this->logged_in = true;
    }
  }
  
  public function logout() {
    if (isset($_SESSION['user_id'])) {
      unset($this->user_id);
      unset($_SESSION['user_id']);
      $this->logged_in = false;
    }
  }

	private function check_login() {
    if(isset($_SESSION['user_id'])) {
      $this->user_id = $_SESSION['user_id'];
      $this->logged_in = true;
    } else {
      unset($this->user_id);
      $this->logged_in = false;
    }
  }
  
}

$session = new Session();

?>