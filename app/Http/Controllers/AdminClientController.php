<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Client;

class AdminClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $id=0;
        $clients = User::all();
        return view('admin.clients.index',compact('clients'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->all();

        $clients=User::create($input);


        $client_id=$clients->id;
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);

          //  $photo = Photo::create(['photo_path'=>$name,'client_id'=>$client_id]);

        }
         return redirect('/admin/clients');

    }


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
        $client = User::findOrFail($id);

        $photo = User::findOrFail($client->id);
        return view('admin.clients.edit',compact('client','photo'));
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

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->all();
        // Photo::whereId($id)->first()->update($input);
        User::whereId($id)->first()->update($input);

        return redirect('/admin/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = User::findOrFail($id);
        $photo = Photo::findOrFail($clients->id);
        unlink('images' . $photo->photo_path);
        $clients->delete();

        return redirect('/admin/clients');
    }

    public function upload_images(Request $request,$id)
    {
        $clients = User::findOrFail($id);
        $client_id=$clients->id;
        if($image = $request->file('file'))
        {
            $imagename = $image->getClientOriginalName();
            $image->move('images', $imagename);

            $photo = Photo::create(['photo_path'=>$imagename,'client_id'=>$client_id]);

        }

        return redirect('/admin/clients');


    }




//    public function update(Request $request, $id)
//     {
//         //
//
//         $input = $request->all();
//
//         if($file = $request->file('photo_id')){
//
//
//             $name = time() . $file->getClientOriginalName();
//
//
//             $file->move('images', $name);
//
//             $photo = Photo::create(['file'=>$name]);
//
//
//             $input['photo_id'] = $photo->id;
//      }
//
//
//       Auth::user()->posts()->whereId($id)->first()->update($input);
//
//
//         return redirect('/admin/posts');
//
//     }













}
