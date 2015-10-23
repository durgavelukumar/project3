<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserGenController extends Controller {
	
	const NUMBER_OF_USERS = 5;
	
    public function __construct() {
        # Put anything here that should happen before any of the other actions
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
		$nbrOfParagraphs = $this->retrieveParaCount();
        return view('pages.userGenProfile', [ 'nbrOfUsers' => strval($nbrOfUsers)]);
    }
    /**
    * Responds to requests to GET /books
    
    public function getIndex() {
        return 'List all the books';
		<form method='POST' action='/books/practice'>
		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
		<input type='text' name='title'>
		<input type='submit' value='Submit'>
		</form>
    }
    /**
     * Responds to requests to GET /books/show/{title}
    
    public function getShow($title = null) {
    //    return 'Show book: '.$title;
        return view('books.show')->with('title', $title);
	 //   return 'Show all the books';
    }
    /**
     * Responds to requests to GET /books/create
     
    public function getCreate() {
        return view('books.create');
    }
    /**
     * Responds to requests to POST /books/create
     
    public function postCreate(Request $request) {
        $this->validate(
            $request,
            ['title' => 'required|min:5',
            ]
        );
        // Code here to enter book into the database
        // Confirm book was entered:
        return 'Process adding new book: '.$request->input('title');
    }
	*/
}
// $example = new Request();
//
// $results = postCreate($example);
//
// if($results == true) {
//     echo "Test passed!"
// }
// else {
//     echo "Test failed";
// }