<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CountryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $links[1] = 'active';
        $isFiltering= false;
        
        if ($request->filter){
            $countries = DB::table('countries')->where('continent', $request->filter)->paginate(15);            
            $countries->setPath("countries?filter=$request->filter");
            $isFiltering = true;
        }else{
            $countries = Country::paginate(15);
        }        

        return view('country.index', ['countries' => $countries, 'links' => $links, 'isFiltering' => $isFiltering]);
    }

    public function show($id)
    {
        $links[1] = 'active';
        try
        {
            $country = Country::findOrFail($id);
        } catch (ModelNotFoundException $ex)
        {
            return view('errors.404');
        }
        return view('country.show', ['country' => $country, 'links' => $links]);
    }

}
