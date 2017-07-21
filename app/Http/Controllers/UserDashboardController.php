<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// Custom class
use App\User;
use App\ShortFilmUser;
use App\MovieSubmission;
use App\PaymentConfirmation;
use Session;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('user.dashboard')->with('user', $user);
    }

    public function submission()
    {
        $user = Auth::user();
        return View('user.upload')->with('user', $user);
    }

    public function payment()
    {
        $user = Auth::user();
        $shortfilm = DB::table('short_film_users')->where('user_id', $user->id)->first() ;
        return View('user.payment', ['user' => $user, 'shortfilm' => $shortfilm]);
    }

    public function storeSubmission(Request $request)
    {
        $this->validate($request, [
            'movie_title' => 'required',
            'film_maker_name' => 'required',
            'production_year' => 'required|integer',
            'drive_link' => 'required'
        ]);

        $movie = new MovieSubmission;
        $movie->user_id = Auth::user()->id;
        $movie->movie_title = $request->movie_title;
        $movie->film_maker_name = $request->film_maker_name;
        $movie->production_year = $request->production_year;
        $movie->drive_link = $request->drive_link;
        $movie->save();

        Session::flash('message', 'Berhasil mensubmit!');
        return redirect('user/upload');
    }

    public function storePaymentConfirmation(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'photo' => 'required|image'
        ]);

        $pc = new PaymentConfirmation;
        $pc->user_id = Auth::user()->id;
        $pc->amount = $request->amount;
        $pc->is_confirmed = false;
        if($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $destinationPath = 'public/pc';
            $extension = $request->photo->extension();
            $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
            $request->photo->storeAs($destinationPath, $fileName);
            $pc->photo_path = $fileName;
        }
        $pc->save();

        Session::flash('message', 'Berhasil mensubmit!');
        return redirect('user/payment');
    }
}
