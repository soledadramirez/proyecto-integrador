<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Book;
use App\User;
use App\Follow;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuarioLog=Auth::user();
      $myBooks=Book::where("user_id","=","$usuarioLog->id")->get();
      $vac=compact("myBooks");
      return view("/profile",$vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showNormalProfile($id)
    {
      $usuarioLog=Auth::user();

      $user = User::find($id);
      $follow=Follow::where("target_id","=",$user->id)->get();
      $following=Follow::where("id","=","$id")->get();
      $userBooks = Book::where('user_id', '=', $id)->get();
      $vacLibros=compact("userBooks");
      $vacUser = compact('user', 'follow','following');
      $vacFollow = compact('follow');
      return view("/normalProfile", $vacLibros, $vacUser);
    }


    public function showOwnProfile()
    {
      $usuarioLog=Auth::user();

      $user = User::find($usuarioLog->id);
      $follow=Follow::where("target_id","=",$usuarioLog["id"] )->get();
      $following=Follow::where("user_id","=",$usuarioLog["id"] )->get();
      $userBooks = Book::where('user_id', '=', $usuarioLog["id"])->get();
      $usuarioLog=Auth::user();
      $myBooks=Book::where("user_id","=","$usuarioLog->id")->get();


      $vacLibros=compact("userBooks");
      $vacUser = compact('user', 'follow','following','myBooks');

      return view("/profile", $vacLibros, $vacUser);
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
