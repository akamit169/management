<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        if($user->role=='0'){
        return view('home');
        }else{
            return view('adminhome');
        }
    }
    
    public function userList()
    {
        $lsitAtten = \DB::table('users')
            ->join('users_attendance', 'users.id', '=', 'users_attendance.user_id')
                ->where('users.role', '=', 0)
            ->get();
        return view('userList')->with('data', $lsitAtten);
       
    }
}