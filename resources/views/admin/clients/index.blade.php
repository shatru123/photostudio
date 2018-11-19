
@extends('admin.layouts.layouts')

@section('content')

    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Clients</h2>
                <div class="page-content__header-description"></div>
            </div>
            <div class="page-content__header-meta">
                <a href="{{route('clients.create')}}" class="btn btn-info icon-left">
                    Add New Client <span class="btn-icon mdi mdi-plus-circle"></span>
                </a>
            </div>
        </div>

         <table class="table">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Created</th>
                      <th>Updated</th>
                      <th>Upload</th>
                      {{--<th>Upload Photos</th>--}}
                   </tr>
                 </thead>
                 <tbody>

                 @if($clients)

                   @foreach($clients as $client)
                    <tr>
                       <td>{{$client->id}}</td>
                       <td><a href="{{route('clients.edit', $client->id)}}">{{$client->name}}</a></td>
                       <td>{{$client->email}}</td>
                       <td>{{$client->created_at->diffForHumans()}}</td>
                       <td>{{$client->updated_at->diffForHumans()}}</td>
                        <td><a href="{{url('admin/clients/'.$client->id.'/upload')}}">Upload</a></td>
                        {{--<td><form action="{{url('image/upload/store/'.$client->id)}}" class="dropzone" id="my-awesome-dropzone-{{$client->id}}">--}}
                           {{--@csrf--}}
                            {{--</form>--}}
                        {{--</td>--}}
                    </tr>

                     @endforeach
                   @endif
                </tbody>
              </table>


    </div>



@endsection