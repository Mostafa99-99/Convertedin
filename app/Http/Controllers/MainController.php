<?php

namespace App\Http\Controllers;
use App\Models\admins;
use App\Models\users;
use App\Models\new_task;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function new_task(Request $request)
    {
        $admin_id = $request->input('admin_id');
        $tittle = $request->input('tittle');
        $description = $request->input('description');
        $user_id = $request->input('user_id');

        DB::table('new_task')->insert([
            'admin_id' => $admin_id,
            'user_id' => $user_id,
            'tittle' => $tittle,
            'description' => $description,
        ]);

        return redirect()->route('display_data');
    }


    public function display_data()
    {
        $tasks = DB::table("new_task")
            ->join('admins', 'new_task.admin_id', '=', 'admins.id')
            ->join('users', 'new_task.user_id', '=', 'users.id')
            ->select('new_task.*', 'users.name as user_name', 'admins.name as admin_name')
            ->get();

        return view('second_page')->with('tasks',$tasks);
    }


    public function statistics()
    {
        $top_users = DB::table('new_task')
            ->join('users', 'new_task.user_id', '=', 'users.id')
            ->select('new_task.user_id', 'users.name as user_name', DB::raw('COUNT(*) as count'))
            ->groupBy('user_id', 'user_name')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

        return view('statistics')->with('top_users',$top_users);
    }
}
