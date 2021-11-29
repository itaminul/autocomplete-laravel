<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class AutoCompleteController extends Controller
{
    public function search(Request $request)
    {
          $search = $request->get('brand');      
          $data = DB::table('set_products_new')
          ->where('brand_name', 'LIKE', '%'. $search. '%')
          ->get();
          return response()->json($data);
            
    } 
}
