<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Client;
use Illuminate\Support\Facades\Storage;

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

        $allow=1;
        if( $request->has('download')) {
            $clients = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'type' => User::DEFAULT_TYPE,
                'download' =>$allow,
            ]);
        }
        else
        {
            $clients = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'type' => User::DEFAULT_TYPE,
            ]);
        }


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

       // $input = $request->all();



        $allow=1;
        if( $request->has('download')) {
            $input=([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'type' => User::DEFAULT_TYPE,
                'download' =>$allow,

            ]);
        }
        else
        {
            $input=([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'type' => User::DEFAULT_TYPE,

            ]);
        }

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
            $image->move('images/client_photos/'.$clients->id, $imagename);

            $photo = Photo::create(['photo_path'=>$imagename,'client_id'=>$client_id]);

        }

        return redirect('/admin/clients');


    }
    public function upload($id)
    {
        $clients = User::findOrFail($id);
//        $photo = Photo::findOrFail($clients->id);
        $photos=Photo::where('client_id', $id)->get();
        $folders  = glob(public_path('images/client_photos/'.$id.'/*'));
//        $folders = Storage::directories(public_path('images/client_photos/'.$id));
//        $folders = Storage::allDirectories(public_path('images/client_photos/'.$id));

        return view('admin.clients.upload',compact('clients','photos','folders'));

    }
    public function getFiles()
    {
        if(isset($_GET['operation'])) {

            $except[] = base_path().'/vendor';
            $except[] = base_path().'/tests';
            $except[] = base_path().'/storage/framework';
            $except[] = base_path().'/.env';

            $fs = new \FileManager(base_path(), $except);
            try {
                $rslt = null;
                switch($_GET['operation']) {
                    case 'get_node':
                        $node = isset($_GET['id']) && $_GET['id'] !== '#' ? $_GET['id'] : '/';
                        $rslt = $fs->lst($node, (isset($_GET['id']) && $_GET['id'] === '#'));
                        break;
                    case "get_content":
                        $node = isset($_GET['id']) && $_GET['id'] !== '#' ? $_GET['id'] : '/';
                        $rslt = $fs->data($node);
                        break;
                    case 'create_node':
                        $node = isset($_GET['id']) && $_GET['id'] !== '#' ? $_GET['id'] : '/';
                        $rslt = $fs->create($node, isset($_GET['text']) ? $_GET['text'] : '', (!isset($_GET['type']) || $_GET['type'] !== 'file'));
                        break;
                    case 'rename_node':
                        $node = isset($_GET['id']) && $_GET['id'] !== '#' ? $_GET['id'] : '/';
                        $rslt = $fs->rename($node, isset($_GET['text']) ? $_GET['text'] : '');
                        break;
                    case 'delete_node':
                        $node = isset($_GET['id']) && $_GET['id'] !== '#' ? $_GET['id'] : '/';
                        $rslt = $fs->remove($node);
                        break;
                    case 'move_node':
                        $node = isset($_GET['id']) && $_GET['id'] !== '#' ? $_GET['id'] : '/';
                        $parn = isset($_GET['parent']) && $_GET['parent'] !== '#' ? $_GET['parent'] : '/';
                        $rslt = $fs->move($node, $parn);
                        break;
                    case 'copy_node':
                        $node = isset($_GET['id']) && $_GET['id'] !== '#' ? $_GET['id'] : '/';
                        $parn = isset($_GET['parent']) && $_GET['parent'] !== '#' ? $_GET['parent'] : '/';
                        $rslt = $fs->copy($node, $parn);
                        break;
                    default:
                        throw new Exception('Unsupported operation: ' . $_GET['operation']);
                        break;
                }
                return response()->json($rslt);
            }
            catch (Exception $e) {
                return response()->json($e->getMessage(), 500);
            }
            return response()->json(null);
        }
    }










}
