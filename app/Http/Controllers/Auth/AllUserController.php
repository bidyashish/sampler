<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AllUserController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $users = User::all();

        return view('dashboard', compact('users'));
    }

    public function store(Request $request)
    {
        $balance = User::find($request->receiverid);
        $balance->balance += $request->amount;
        $balance->save();

        $balance = User::find($request->senderid);
        $balance->balance -= $request->amount;
        $balance->save();

        return redirect(RouteServiceProvider::HOME);
    }
}
