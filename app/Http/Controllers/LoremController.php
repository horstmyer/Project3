<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator as number;

class LoremController extends Controller{

  public function getIndex() {
    //return "Show the lorem form";
    return view('lorem.index');
  }

  public function postIndex(Request $request) {
        $this->validate($request, [
          'number' => 'required|numeric',
        ]);
        $generator = new \Badcow\LoremIpsum\Generator();
        		// Generate paragraphs
        		$paragraphs = $generator->getParagraphs(\Input::get('number'));
        		//  dd($paragraphs);
            return view('lorem.postIndex')->with(['paragraphs' => $paragraphs]);


}

      //  $generator = new Badcow\LoremIpsum\Generator();
      //  $number = $generator->getNumber();
        //  echo implode('<p>', $number);
      //  return "Process the Data";
     }
