<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function search()
    {
        return view('diagnose.index');
    }

    public function AutoSearch(Request $request)
    {
        // $data = Medicine::select('Name')
        //     ->where('Name', 'LIKE', "%{$request->keyword}%")
        //     ->get();
        // dd($data);
        if ($request->get('data')) {
            $data = $request->get('data');
            $data = Medicine::select('Name', 'type', 'grouptype', 'market', 'begin', 'treatment', 'national')
                ->where('Name', 'LIKE', "%{$data}%")
                ->get();
            // $output = '<ul class="dropdown-menu" style="display:block; position:relative;">';
            // foreach ($data as $row) {
            //     $output .= '
            //     <li><a href="data/' . $row->id . '" class="ml-2" style="color:black; font-weight: bold">' . $row->Name . '</a></li>';
            // }
            // $output .= '</ul>';
            return $data->toJson();
        }
    }
}
