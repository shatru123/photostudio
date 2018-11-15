<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Response;
use Chumper;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
        return view('client.client_dashboard');
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

    public function all_photos()
    {
        $user_id= Auth::user()->id;
        $photos=Photo::where('client_id', $user_id)->get();

        return view('client.photos',compact('photos'));
    }

    public function download_all()
    {


        $files = glob(public_path('images/client_photos/'.Auth::user()->id.'/*'));

        \Zipper::make(public_path('downloads/'.Auth::user()->id.'photos.zip'))->add($files)->close();

        return  response()->download(public_path('downloads/'.Auth::user()->id.'photos.zip'));

    }

    public function download_sel()
    {

        $images = Input::get('img');

        foreach ($images as $img)
        {
            $files = glob(public_path('images/client_photos/'.Auth::user()->id.'/'.$img));

        }

        \Zipper::make(public_path('downloads/'.Auth::user()->id.'photos_sel.zip'))->add($files)->close();

       // unlink(public_path('photos.zip'));

        return  response()->download(public_path('downloads/'.Auth::user()->id.'photos_sel.zip'));

    }

}
