<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $registeredUsers = DB::select("SELECT * FROM `registers`");
        return view('registers.index', compact('registeredUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('registers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        register::create($this->validateForm($request));

        return Redirect::to('http://newyoursurprise/public/register');
    }

    /**
     * Display the specified resource.
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateForm(Request $request): array
    {
        return $request->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'likes' => 'required|min:1|max:10',
            'views' => 'required|min:1|max:10',
            'reposts' => 'required|min:1|max:10'
        ]);
    }
}
