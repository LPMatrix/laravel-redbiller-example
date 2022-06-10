<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redbiller;

class HomeController extends Controller
{
	public function suggestBank(Request $request){
		$data = Redbiller::suggestBanks($request->account_no);
		return $data;
	}
}