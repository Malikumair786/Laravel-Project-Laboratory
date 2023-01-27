<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function search(Request $request)
   {
      if ($request->ajax()) {

         $output = "";
         $doctor = DB::table('doctors')->where('name', 'LIKE', '%' . $request->search . "%")->get();
         if ($doctor) {
            foreach ($doctor as $doctors) {
               $output .= '<tr>' .
                  '<td>' . $doctors->name . '</td>' .
                  '<td>' . $doctors->phone . '</td>' .
                  '<td>' . $doctors->speciality . '</td>' .
                  '<td>' . $doctors->room . '</td>' .
                  '</tr>';
            }
            return Response($output);
         }
      }
   }
}
