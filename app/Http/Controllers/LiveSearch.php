<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;
use Illuminate\Http\Request;
use App\Officer;
use App\User;
use App\Rank;
use DB;

use App\Exceptions\customException;
use Yajra\DataTables\Facades\DataTables;
use function GuzzleHttp\Psr7\parse_query;

class LiveSearch extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'isAdmin']);
    }


    function index()
    {
     return view('live_search.live_search');
    }



    function ajaxCall(Request $request)
    {
    //$officers =Officer::query();
    $officers = Db::table('officers')->select(['officers.id','officers.reg_no','officers.last_name','ranks.rank',  'officers.first_name',
    'officers.middle_name', 'officers.title','officers.suffix','officers.sex','officers.status','officers.original_rank',
    'officers.division','officers.station','officers.section' ,'officers.remarks','officers.image',
    'officers.enlist_date','officers.nis'])->join('ranks','ranks.id','=','officers.rank_id');

    return DataTables::of($officers)->toJson();
      }





    function searchBar(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');

         $ranks =  Rank::all();






      if($query != '')
      {
       $officers = DB::table('officers')
         ->where('id', 'like', '%'.$query.'%')
         ->orWhere('last_name', 'like', '%'.$query.'%')
         ->orWhere('first_name', 'like', '%'.$query.'%')
         ->orWhere('division', 'like', '%'.$query.'%')
         ->orWhere('station', 'like', '%'.$query.'%')
         ->orWhere('reg_no', 'like', '%'.$query.'%')
         ->orderBy('trn', 'desc')
         ->get();

      }
      else
      {
       $officers = DB::table('officers')
         ->orderBy('last_name', 'desc')
         ->get();
      }
      $total_row = $officers->count();



      if($total_row > 0)
      {
        foreach($officers as $Officer)
       {

        $output .= '
        <tr>
          <td><a href="/officers/'.$Officer->id.'"  >'.$Officer->reg_no.' ' .$Officer->last_name.' '.$Officer->first_name.' '.$Officer->middle_name.'</a></td>
       </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $officers = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($officers);
     }
    }
  }


