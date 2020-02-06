<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;
use App\Events\UserRegistered;

use App\Events\UserRole;

use App\User;
use Auth;
use App\Rank;
use App\Notifications\newCorpseNotification; 
use  Notification;
//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['clearance', 'isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all users and pass it to the view
        $users = User::paginate(10);
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Get all roles and pass it to the view
        $roles = Role::get();
        $ranks=Rank::all();
        $stations = Station::all();
        return view('users.create')->withRoles($roles)->withStations($stations)->withRanks($ranks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate name, email and password fields
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'firstName' => 'required|min:3|max:15',
            'lastName' => 'nullable|min:3|max:15',
            'lastName' => 'required|min:3|max:15',
            'rank_id' => 'required',
            'regNo' => 'sometimes|min:2|max:5',
            'station_id' => 'required',

        ]);

         $user= new User();


        //$user = User::create( $request->only(
            // 'email',
            // 'password',
            // 'firstName',
            // 'middleName',
            // 'lastName',
            // 'rank_id',
            // 'regNo',
            // 'station_id',
            // 'division_id',
            // 'status',
            // 'user_id',
            // 'modified_by'
       // )); //Retrieving only the email and password data


       $user->email=$request->input('email');
       $user->password=  bcrypt( $request->input('password'));
       $user->firstName = $request->input('firstName');
       $user->middleName=$request->input('middleName');
       $user->lastName=$request->input('lastName');
       $user->rank_id=$request->input('rank_id');
       $user->regNo=$request->input('regNo');
       $user->station_id=$request->input('station_id');

       $div_id = Station::findOrFail($user->station_id);
       $user->division_id = $div_id->division_id;
       $user->status='Active';
       $user->user_id= auth()->user()->id;
       $user->modified_by= 0;//auth()->user()->id;
       try{
       $user->save();
       } catch (\Throwable $th) {
        return redirect()->with('error','We could not  save info!' );
        }
        $roles = $request['roles']; //Retrieving the roles field
        //Checking if a role was selected
        if (isset($roles)) {
            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r); //Assigning role to user
            }
        }


///////////////////////////////////////////////////////////////////////////

        try {
            $data = array(
                "id" => $user->id,
                "type" => 'NewUser',
                "name" =>  $user->firstName .' '. $user->lastName,
                'station' => $user->station->station,
                "division" => $user->station->division->division
            );

            $sendTo = User::whereHas('roles', function ($query) {
                $query->where('name', '=', 'superAdmin');
            })->get();

              if (\Notification::send($sendTo, new newCorpseNotification($data))) {}
            } catch (\Throwable $th) {
                return ['error'=>'user info successfully saved however, something occurred while sending Notification!'];
            }
///////////////////////////////////////////////////////////////////////////////////////////////////////









        try{
            event(new UserRegistered($user));
        } catch (\Throwable $th) {
            return redirect()->with('error',' Your Info Saved. However we could not establish connection dispatch email sevice!' );
        }

        //Redirect to the users.index view and display message
        return redirect()->route('users.index')
             ->with(
                 'flash_message',
                 'User successfully added.'
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id); //Get user with specified id
        $roles = Role::get(); //Get all roles
        $ranks=Rank::all();
        $stations = Station::all();
        return view('users.edit')->withRoles($roles)->withStations($stations)->withRanks($ranks)->withUser($user);


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
        $user = User::findOrFail($id); //Get role specified by id

        //Validate name, email and password fields
        $this->validate($request, [
            'firstName' => 'required|min:3|max:15',
            'lastName' => 'required|min:3|max:15',
            'lastName' => 'nullable|min:3|max:15',
            'rank_id' => 'required',
            'regNo' => 'sometimes|min:2|max:5',
            'station_id' => 'required',

            //  'password'=>'required|min:6|confirmed'
        ]);

        // $input = $request->only(['email',
        // 'firstName',
        // 'middleName',
        // 'lastName',
        // 'rank_id',
        // 'regNo',
        // 'station_id',
        // 'division_id',
        // 'status',
        // 'user_id',
        // 'modified_by']); //Retreive the name, email and password fields


        $user->email=$request->input('email');
        //  $user->password=$request->input('password');
        $user->firstName = $request->input('firstName');
        $user->middleName=$request->input('middleName');
        $user->lastName=$request->input('lastName');
        $user->rank_id=$request->input('rank_id');
        $user->regNo=$request->input('regNo');
        $user->station_id=$request->input('station_id');
        $div_id = Station::findOrFail($user->station_id);
        $user->division_id = $div_id->division_id;
       // $user->status='Active';
        $user->modified_by= auth()->user()->id;


        $roles = $request['roles']; //Retreive all roles
        try{
        $user->save();

    } catch (\Throwable $th) {
        return redirect()->with('error','We could not  update info!' );
    }

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        } else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }

        try {


        event(new UserRole($user));

    } catch (\Throwable $th) {
        return redirect()->with('error',' Your Info Updated. However we could not establish connection dispatch email sevice!' );
    }
        return redirect()->route('users.index')
            ->with(
                'flash_message',
                'User successfully edited.'
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        //Find a user with a given id and delete
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with(
                'flash_message',
                'User successfully deleted.'
            );
    }
}
