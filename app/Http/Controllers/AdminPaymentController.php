<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Pagination\Paginator;

use App\User;
use App\PaymentConfirmation;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role_id != 0) {
            return redirect('home');
        }
        // $payment = PaymentConfirmation::latest()->get()->paginate(10);
        // $payment = $this->data['payments'] = PaymentConfirmation::latest()->get()->paginate(10);
        // $pay = DB::table('payment_confirmations')->paginate(10);
        // return View('admin.payment')->with('a', $pay);
        $payment_query = DB::table('payment_confirmations')->paginate(10);
        return view('admin.payment.index', ['payment' => $payment_query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirm($id)
    {
        if(Auth::user()->role_id != 0) {
            return redirect('home');
        }
        $user = User::find(PaymentConfirmation::find($id)->user_id);
        if($user->role_id == 4) {
            $user->team->hash = crypt($user->name . $user->created_at, 'vocomfest2017');
        }
        if($user->role_id != 4) {
            $user->team->verified = 2;
        }
        $user->team->progress = 2;
        $user->team->save();

        Session::flash('message', 'Berhasil memverifikasi pembayaran!');
        return redirect('adminvocomfest17/payment');
    }
}
