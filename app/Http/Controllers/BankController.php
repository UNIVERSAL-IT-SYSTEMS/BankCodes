<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;
use App\Bank;

class BankController extends Controller
{

    public function index($id)
    {
        $links[1] = 'active';
        $country = Country::findOrFail($id);
        $banks = DB::table('banks')->where('country_id', $id)->paginate(15);
        return view('bank.index', ['banks' => $banks, 'links' => $links, 'country' => $country]);
    }

    public function show($alpha2, $id)
    {
        $links[1] = 'active';
        try
        {
            $bank = Bank::findOrFail($id);
            $country = Country::findOrFail($alpha2);
        } catch (ModelNotFoundException $ex)
        {
            return view('errors.404');
        }
        return view('bank.show', ['bank' => $bank, 'country' => $country, 'links' => $links]);
    }
    
}
