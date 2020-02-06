<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Officer;
use App\Rank;
use App\Promotion;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
class  PromotionsController extends Controller
{
    public function  index(){
    
      if(Session::has('officer_id')){
        $promotions = Promotion::where('officer_id', Session::get('officer_id'))->paginate(4);    
        $ranks= Rank::all();

        $promotions = Promotion::where('officer_id', Session::get('officer_id'))->paginate(4);    
        return view('promotion.index')->withRanks($ranks)->withPromotions($promotions);
      }else{
          return redirect()->back();
       }
      }

 

 

 
    public function addPromotion(Request $request){
       $rules = array(
     'rank' =>  'required|min:5|max:30',
     'force_order_no' => 'required|min:3||max:15',
     'force_order_date' => 'required|date',
     'confirmed_date' => 'nullable|date', 
     'remarks' =>  'nullable|max:500',
       );
    $validator = Validator::make ( Input::all(), $rules);
     if ($validator->fails())
     return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
 
     else {
    
        $promotions = new Promotion;
        $promotions->officer_id = Session::get('officer_id');
        $promotions->rank = $request->rank ; 
        $promotions->force_order_no = $request->force_order_no ;
        $promotions->force_order_date =$request->force_order_date; 
        $promotions->confirmed_date = $request->confirmed_date; 
        $promotions->remarks =$request->remarks; 
        $promotions->user_id = auth()->user()->id;
        $promotions->modify_by = 0;
        $promotions->save();
       
        return response()->json($promotions);

   }
}
 





 

public function editPromotion(request $request){
  $rules = array(
    'rank' =>  'required|min:5|max:30',
    'force_order_no' => 'required|min:3||max:15',
    'force_order_date' => 'required|date',
    'confirmed_date' => 'nullable|date', 
    'remarks' =>  'nullable|min:10|max:500',
      );
    $validator = Validator::make ( Input::all(), $rules);
    if ($validator->fails())
    return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
    else {  
  $promotions= Promotion::find ($request->id);
  $promotions->rank = $request->rank ; 
  $promotions->force_order_no = $request->force_order_no;
  $promotions->force_order_date = $request->force_order_date ;     
  $promotions->confirmed_date = $request->confirmed_date ;
  $promotions->remarks = $request->remarks ;
  $promotions->modify_by = auth()->user()->id;
  $promotions->save();
 
  return response()->json($promotions);
}
}



public function deletePromotion(request $request){
 
  $promotions = Promotion::find ($request->id)->delete();
  return response()->json();
}




public function officerPromotions($id)
{
   $promotions= DB::table('promotions')->where('officer_id', $id)->get();     
   return response()->json($promotions);          
}


}


