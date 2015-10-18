<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Faker;


class DummyController extends Controller{

  public function getIndex() {
    //return "Show the Dummy form";
    return view('dummy.index');
  }

  public function postIndex(Request $request) {

  	$this->validate($request, [
        		'number' => 'required|numeric',
           	]);

  	$data = $request->all();

        	// Create users
        	$faker = Faker\Factory::create();

  	$users = array();
    $number = (\Input::get('number'));
    $email = (\Input::get('email'));
    $profile = (\Input::get('profile'));
  		for ($i=0; $i < $number; $i++) {
           		$name = $faker->name;
           		$users[$i]['name'] = $name;
           			if (isset($email)) {
              				$email = $faker->email;
              				$users[$i]['email'] = $email;
           			}
           			if (isset($profile)) {
              				$profile = $faker->sentence($nbWords = 10);
              				$users[$i]['profile'] = $profile;
        	   			}
        		}
  	//dd($users);
        return view('dummy.postIndex')->with(['users' => $users]);
    
      }

}
    //return "Show the Dummy form";
    //return view('dummy.postindex');
