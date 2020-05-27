@extends('layouts.app')
@extends('post.create')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">

    </div>
    <div class="col-5 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{$user->name}}</h1>


        </div>



        @guest
        <div class="">

        </div>
        @else
        <div class="">

        </div>
        @endguest

        @auth
        @if(Auth::user()->id ==$user->id)
        <div class="">
          <a href="/profile/{{$user->id}}/edit">edit </a>
        </div>
        @endif
        @else
        <div class="">

        </div>
        @endauth


        <div class="d-flex">
        <div class="font-weight-bold">{{$user->title}}</div>
        <hr>
        <div>{{$user->des}}</div>
        <hr>
        <div><a href="#">{{$user->url}}</a></div>
        <hr>
        @guest
        <div class="">

        </div>
        @else
        <div class="">

        </div>
        @endguest

        @auth
        @if(Auth::user()->id ==$user->id)
        <div class="pt-5">
          <button href="/p/create" type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#modalLoginForm"> New Post </button>
        </div>
        @endif
        @else
        <div class="">

        </div>
        @endauth
      </div>
  </div>
</div>
@foreach ($user->posts as $post)
        
        @endforeach

<table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user->posts as $post)
            <tr>
                <td><a href="#" data-toggle="modal" data-target="#myModal{{$post->id}}">{{$post->title}}</td>

        <div id="myModal{{$post->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="contains">



              <div class="col-4">
                  <a href="/p/{{$post->id}}" data-toggle="modal" data-target="#myModal{{$post->id}}">{{$post->title}}
           
        </a>
              </div>
              <div class="col-8">
                  <h3><strong>{{$post-> user-> name}}</strong></h3>
                  <h3><strong>{{$post-> title}}</strong></h3>
                  <p>{{$post-> des}}</p>
                  <p>category :{{$post-> category}}</p>
              </div>
            </div>
          </div>

        </div>
      </div>
                <td>{{$post->des}}</td>
                <td>{{$post->category}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>








@endsection