<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LoremController extends Controller {
	
	const NUMBER_OF_PARAGRAPHS = 5;
	
    public function __construct() {
        
    }
	

	private function retrieveParaCount() {
      if (isset($_POST['nbrOfParagraphs'])) {
          if (is_numeric($_POST['nbrOfParagraphs'])) {
            return (int)$_POST['nbrOfParagraphs'];
          }
      }
      return self::NUMBER_OF_PARAGRAPHS ;
    }
	
	public function getHomePage() {
        return view('pages.landing');
    }
	
	public function getLoremPage() {
        return view('pages.lorem');
    }
	
	public function postLoremPage() {
		$nbrOfParagraphs = $this->retrieveParaCount();
        return view('pages.loremPara', [ 'nbrOfParagraphs' => strval($nbrOfParagraphs)]);
    }
}
