<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required|max:16',
            'nama' => 'required',
            'jenis' => 'required|in:PERSONAL,BISNIS',
        ]);

        Account::create($request->all());

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil Terdaftar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        $accounts = Account::all();

        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account, Request $request)
    {
        //
        $request->validate([
            'id' => 'required|max:16',
            'nama' => 'required',
            'jenis' => 'required|in:PERSONAL,BISNIS',
        ]);

        $account = Account::find($account->id);
        $account->update($request->all());

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil berhasil diperbarui');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        $request->validate([
            'id' => 'required|max:16',
            'nama' => 'required',
            'jenis' => 'required|in:PERSONAL,BISNIS',
        ]);

        // Update data di dalam database
        $account->update($request->all());

        return redirect()->route('accounts.index')->with('success', 'Data akun berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        $account->delete();

        return redirect()->route('accounts.index')->with('success', 'Data akun berhasil dihapus');
    }
}
