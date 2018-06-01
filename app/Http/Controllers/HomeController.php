<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\Registration;
use Illuminate\Http\Request;
use App\Mail\RegistrationEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // auth()->logout();
        // Auth::loginUsingId(1);

        // $user = new User;
        // $dadosUser = $user->create([
        //     'name' => 'Fulano Ciclano',
        //     'email' => 'contato@devclassnovo.com.br',
        //     'password' => Hash::make('123')
        // ]);

        // Mail::to('contato@devclass.com.br')->send(new RegistrationEmail($dadosUser));
        // Mail::to('contato@devclass.com.br')->send(new Registration);

        // Mail::to('contato@devclass.com.br')->send(new RegistrationEmail);


        $user = new User;
        $dadosUser = $user->create([
            'name' => 'Sandra',
            'email' => 'sandra3@email.com.br',
            'password' => Hash::make(123)
        ]);


        // Mail::to('contato@devclass.com.br')->send(new Registration($dadosUser));

        event(new Registration($dadosUser)); //envia user para o evento

        // return view('home');
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
}
