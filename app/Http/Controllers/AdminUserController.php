<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Pagination\Paginator;

use App\User;
use App\ShortFilmUser;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller {

	public function index() {
		if(Auth::user()->role_id != 0) {
            return redirect('home'); 
        }
        $team = $this->data['pages'] = User::whereIn('role_id', [1, 3])->paginate(5);
        return View('admin.user')->with('user',$team);
	}

	public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $team = User::find($id);
        if(User::find($id)->role_id == 1) {
            return View('admin.view-user-film')->with('user', $team);
        } else if(User::find($id)->role_id == 3) {
            return View('admin.view-user-concert')->with('user', $team); 
        }
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        if(Auth::user()->role_id != 0) {
            return redirect('home'); 
        }
        User::destroy($id);

        Session::flash('message', 'Berhasil menghapus tim!');
        return redirect('admin/user');
    }
}
?>