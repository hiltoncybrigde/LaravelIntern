@extends('layouts.app')
@extends('posts.create')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
        //contain vào

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
        <div class="font-weight-bold">{{$user->title ?? 'N/A'}}</div>
        <div>{{$user->des ??'N/A'}}</div>
        <div><a href="#">{{$user->url ?? 'N/A'}}</a></div>
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
        <div class="row col-4 pd-4 pr-5 pt-5">
<a href="#" data-toggle="modal" data-target="#myModal{{$post->id}}">{{$post->title}}
           
        </a>

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
              </div>
            </div>
          </div>

        </div>
      </div>
         </div>
        @endforeach










@endsection