<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function topup_get() {
        $users = User::where('role', 'student')->get();
        return view('bank.topup', compact('users'));
    }

    public function topup_post(Request $request) {
        Wallet::create([
            'debit' => null,
            'credit' => $request->credit,
            'user_id' => $request->user_id,
            'status' => 'success',
        ]);
        return redirect('/transactions');
    }

    public function pending_get() {
        $pendings = Wallet::where('debit', null)->where('status', 'pending')->get();
        return view('bank.pending', compact('pendings'));
    }

    public function pending_post($id) {
        $pending = Wallet::find($id);
        if(!$pending) return redirect()->back();
        $pending->update(['status' => 'success']);
        return redirect('/transactions');
    }

    public function transactions() {
        $wallets = Wallet::get();
        return view('bank.transactions', compact('wallets'));
    }

    public function withdraw_get() {
        $transactions = Wallet::get();
        $users = User::where('role', 'student')->get();
        return view('bank.withdraw', compact('users'));
    }

    public function withdraw_post(Request $request) {
        Wallet::create([
            'debit' => $request->debit,
            'credit' => null,
            'user_id' => $request->user_id,
            'status' => 'success'
        ]);
        return redirect('/transactions');
    }
}
