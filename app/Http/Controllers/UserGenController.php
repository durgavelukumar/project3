<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserGenController extends Controller {
	
	const NUMBER_OF_USERS = 5;
	
    public function __construct() {
        
    }
	

	private function retrieveUsersCount() {
      if (isset($_POST['nbrOfUsers'])) {
          if (is_numeric($_POST['nbrOfUsers'])) {
            return (int)$_POST['nbrOfUsers'];
          }
      }
      return self::NUMBER_OF_USERS ;
    }
	
	public function getHomePage() {
        return view('pages.landing');
    }
	
	public function getUserGenPage() {
        return view('pages.userGen');
    }
	
	public function postUserGenPage() {
		$nbrOfUsers = $this->retrieveUsersCount();
        return view('pages.userGenProfile', [ 'nbrOfUsers' => strval($nbrOfUsers)]);
    }
}
