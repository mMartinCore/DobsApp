<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Officer;
use App\Rank;
use App\User;
use App\Leave;
use App\Division;
use DB;
use Yajra\DataTables\Facades\DataTables;
use App\Exceptions\customException;
use App\Status;

class OfficersController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']);
    }

    /**
     *
     *
     *
     *

        $officers = Db::table('officers')->select(['officers.id','officers.reg_no','officers.last_name',  'officers.first_name','officers.middle_name','officers.title','officers.suffix','officers.sex','officers.status','officers.original_rank',
      'officers.division','officers.station','officers.section' ,'officers.remarks','officers.image','officers.enlist_date','officers.nis'])->join('ranks','ranks.id','=','officers.rank_id')->get() ;
     print_r($officers);

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $ranks = Rank::all();
        $divisions=Division::get();

        $officers = Officer::all();
        //return  officer::where('title', ' officer Two')->get();
        // $Officer = DB::select('SELECT * FROM officers');
        //$ officers =  officer::orderBy('title','desc')->take(1)->get();
        //$ officers =  officer::orderBy('title','desc')->get();
        // $Officer= officers::orderBy('created_at','desc')->paginate(10);
        // return view('officers.index') ;


        return view('officers.index')->withOfficers($officers)->withRanks($ranks);
    }


    public function index()
    {
        $ranks = Rank::all();
        $divisions = Division::all();

            //  return view('officers.index')->withRanks($ranks);
                /// EXTREMELY GOOD JOINT
            /*   $officers = Db::table('officers')->select(['officers.id','officers.reg_no','officers.last_name','ranks.rank',  'officers.first_name',
                'officers.middle_name', 'officers.title','officers.suffix','officers.sex','officers.status','officers.original_rank',
                'officers.division','officers.station','officers.section' ,'officers.remarks','officers.image',
                'officers.enlist_date','officers.nis'])->join('ranks','ranks.id','=','officers.rank_id')->get() ;
                return DataTables::of($officers)->toJson();*/

        return view('officers.index')->withRanks($ranks)->withDivisions($divisions);
    }


    function ajaxCall(Request $request)
    {
    $officers =Officer::query();
    return DataTables::of($officers)->make(true);
    }




function memberCall(){
    $officers = Db::table('officers')->select(['officers.id','officers.reg_no', 'officers.rank_id','officers.last_name','ranks.rank',  'officers.first_name',
    'officers.middle_name', 'officers.title','officers.suffix','officers.sex','officers.status_id','statuses.status','officers.original_rank',
    'officers.division','officers.station','officers.section' ,'officers.remarks','officers.image',
    'officers.enlist_date','officers.nis'])->join('ranks','ranks.id','=','officers.rank_id')->join('statuses','statuses.id','=','officers.status_id');
    return DataTables::queryBuilder($officers)->toJson();
    //return DataTables::of($officers)->make(true);
}







function load_All_Officers($CompNo, $regNo, $rank, $lName, $fName, $div){


    Session::put('CompNo',$CompNo);
    Session::put('regNo', $regNo);
    Session::put('rank', $rank);
    Session::put('lName',$lName);
    Session::put('fName', $fName);
    Session::put('div', $div);
//dd($CompNo. $regNo. $rank. $lName. $fName. $div);
    return view('officers.load_All_Officers');
}

function load_All_OfficersTable(){
    $CompNo= Session::get('CompNo');
    $regNo=Session::get('regNo');
    $rank= Session::get('rank');
    $lName=  Session::get('lName');
    $fName= Session::get('fName');
    $div=Session::get('div');

if ($CompNo ==0 && $regNo==0 &&  $rank==0 &&  $lName==0 &&  $fName== 0 &&  $div ==0 ) {
    $officers = Db::table('officers')->select(['officers.id','officers.reg_no', 'officers.rank_id','officers.last_name','ranks.rank',  'officers.first_name',
    'officers.middle_name','divisions.division', 'officers.title','officers.suffix','officers.sex','officers.status_id','statuses.status','officers.original_rank',
     'officers.station','officers.section' ,'officers.remarks','officers.image',
    'officers.enlist_date','officers.nis'])->join('divisions','divisions.id','=','officers.division')
    ->join('ranks','ranks.id','=','officers.rank_id')->join('statuses','statuses.id','=','officers.status_id');
    return DataTables::queryBuilder($officers)->toJson();
}

if ($CompNo != 0 && $regNo!= 0 &&  $rank!=  0 &&  $lName!=  0 &&  $fName!=0 &&  $div !=  0) {
    $officers = Db::table('officers')->select(['officers.id','officers.reg_no', 'officers.rank_id','officers.last_name','ranks.rank',  'officers.first_name',
                'officers.middle_name','divisions.division', 'officers.title','officers.suffix','officers.sex','officers.status_id','statuses.status','officers.original_rank',
                'officers.station','officers.section' ,'officers.remarks','officers.image','officers.enlist_date','officers.nis'])
                ->join('ranks','ranks.id','=','officers.rank_id')
                ->join('statuses','statuses.id','=','officers.status_id')
                ->join('divisions','divisions.id','=','officers.division')
                ->where( 'officers.id',$CompNo)
                ->where( 'officers.reg_no',$regNo)
                ->where( 'ranks.id', $rank)
                ->where( 'officers.last_name', $lName)
                ->where( 'officers.first_name', $fName)
                ->where( 'divisions.id', $div);
    return DataTables::queryBuilder($officers)->toJson();
}

if ($CompNo != 0 && $regNo == 0 &&  $rank ==  0 &&  $lName == 0 &&  $fName==0 &&  $div ==  0) {
      $officers = Db::table('officers')->select(['officers.id','officers.reg_no', 'officers.rank_id','officers.last_name','ranks.rank',  'officers.first_name',
                'officers.middle_name','divisions.division', 'officers.title','officers.suffix','officers.sex','officers.status_id','statuses.status','officers.original_rank',
                'officers.station','officers.section' ,'officers.remarks','officers.image','officers.enlist_date','officers.nis'])
                ->join('ranks','ranks.id','=','officers.rank_id')
                ->join('statuses','statuses.id','=','officers.status_id')
                ->join('divisions','divisions.id','=','officers.division')
                ->where( 'officers.id',$CompNo);
    return DataTables::queryBuilder($officers)->toJson();
}


}








    /**;
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ranks= Rank::all();
        $divisions= Division::all();
        return view('officers.create')->withRanks($ranks)->withDivisions($divisions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $this->validate($request, [
            'id' => 'required|unique:officers,id',
            'trn' => 'required|sometimes|max:12|unique:officers,trn',
             'sex' => 'required',
             'original_rank' => 'required',
             'rank_id' => 'required',
            'image' => 'image|nullable|max:1999',
            'enlist_date' => 'required|date',
            'last_name' =>'required|min:4|max:25',
            'middle_name' =>'max:30',
            'first_name' =>'required|min:4|max:25',
            'dob' => 'required|date',

            'nis' => 'sometimes|max:12|unique:officers,nis',
            'nationality' => 'required|max:50',
            'cob' => 'required|max:50',
            //'status_id' => 'max:15',
            'suffix' => 'max:15',
            'title' => 'string|max:15',
            'division_id' => 'required',
            'station' => 'max:100',
            'section' => 'max:100',
            'remarks' => 'nullable',
        ]);
        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noImage.jpg';
        }
        // Create  officer
        $officer = new  Officer;
        $officer->id = $request->input('id');
        $officer->reg_no = $request->input('reg_no');
        $officer->trn = $request->input('trn');
        $officer->nis = $request->input('nis');
        $officer->dob = $request->input('dob');
        $officer->nationality = $request->input('nationality');
        $officer->cob = $request->input('cob');
        $officer->enlist_date = $request->input('enlist_date');
        $officer->rank_id = $request->input('rank_id');
        $officer->last_name = $request->input('last_name');
        $officer->middle_name = $request->input('middle_name');
        $officer->first_name = $request->input('first_name');
        $officer->title = $request->input('title');
        $officer->suffix = $request->input('suffix');
        $officer->sex = $request->input('sex');
        $officer->status_id = 1;//$request->input('status_id');
        $officer->original_rank = $request->input('original_rank');
        $officer->division = $request->input('division_id');
        $officer->station = $request->input('station');
        $officer->section = $request->input('section');
        $officer->remarks = $request->input('remarks');
        $officer->user_id = auth()->user()->id;
        $officer->modifyBy = auth()->user()->id;
        $officer->image = $fileNameToStore;
        $officer->save();
        return redirect('/officers')->with('success', ' Member was created successfully ');
        }catch(Exception $e){
            throw new customException($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
              $officer = Officer::find($id);
              $ranks= Rank::all();
              $divisions =Division::get();
              $status=Status::all();
           //   $request->session()->put('officer_id',$officer->id);
        return view('officers.profile')->withOfficer($officer)->withRanks($ranks)->withStatus($status)->withDivisions($divisions);
    }

















    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    $status= Status::all();
        $ranks= Rank::all();
        $officer = Officer ::find($id);
        $divisions= Division::all();
         return view('officers.edit')->withOfficer($officer)->withRanks($ranks)->withStatus($status)->withDivisions($divisions);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'trn' => 'required|sometimes|max:12|unique:officers,trn,'.$id,
            'sex' => 'required',
            'original_rank' => 'required',
            'rank_id' => 'required',
           'image' => 'image|nullable|max:1999',
           'enlist_date' => 'required|date',
           'last_name' =>'required|min:4|max:25',
           'middle_name' =>'max:30',
           'first_name' =>'required|min:4|max:25',
           'dob' => 'required|date',

           'nis' => 'sometimes|max:12|unique:officers,nis,'.$id,
           'nationality' => 'required|max:50',
           'cob' => 'required|max:50',
           'status_id' => 'required',
           'suffix' => 'max:15',
           'title' => 'sometimes|string|max:15',
           'division_id' => 'required',
           'station' => 'string|max:100',
           'section' => 'string|max:100',
           'remarks' => 'max:1500',
        ]);
        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }else {
            $fileNameToStore='NoImage.jpg';
        }
        // Create  officer
        $officer = Officer ::find($id);

        $officer->reg_no = $request->input('reg_no');
        $officer->trn = $request->input('trn');
        $officer->nis = $request->input('nis');
        $officer->dob = $request->input('dob');
        $officer->nationality = $request->input('nationality');
        $officer->cob = $request->input('cob');
        $officer->enlist_date = $request->input('enlist_date');
        $officer->rank_id = $request->input('rank_id');
        $officer->last_name = $request->input('last_name');
        $officer->middle_name = $request->input('middle_name');
        $officer->first_name = $request->input('first_name');
        $officer->title = $request->input('title');
        $officer->suffix = $request->input('suffix');
        $officer->sex = $request->input('sex');
        $officer->status_id = $request->input('status_id');
        $officer->original_rank = $request->input('original_rank');
        $officer->division  = $request->input('division_id');
        $officer->station = $request->input('station');
        $officer->section = $request->input('section');
        $officer->remarks = $request->input('remarks');
        $officer->modifyBy = auth()->user()->id;
        if($request->hasFile('image')){
            $officer->image = $fileNameToStore;
        }
        $officer->save();
        return redirect('/officers')->with('success', 'Member was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $officer = Officer::find($id);
        $officer->posting()->detach();
        $officer->skill()->detach();
        $officer->spouse()->detach();
        $officer->delete($id);
        Session::flash('success', 'Member was deleted successfully');
        return redirect()->route('officers.index');
    }
}
