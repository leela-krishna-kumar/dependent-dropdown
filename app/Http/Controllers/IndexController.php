<?php

namespace App\Http\Controllers;

use App\Models\Countrycity;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function dependent_dropdown(){

        $country_list = Countrycity::all();

       return view('dd', compact('country_list'));

    }


    public function cc_dynamic(Request $request)
    {

        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $data = Countrycity::where($select, $value)->orderBy('cities', 'asc')->get();

        $output = '<option value="">Select from ' . ucwords($dependent) . '</option>';

        /* Schema
         {
            "country" : ABC,
            "cities": ['123', '456']
            } */


        foreach ($data as $row) {
            foreach ($row['cities'] as $cities) {
                $output .= '<option value="' . $cities . '">' . $cities . '</option>';
            }
        }

        echo $output;
    }
}
