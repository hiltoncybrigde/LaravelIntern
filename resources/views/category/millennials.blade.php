@extends('layouts.app')
@section('content')

<H3>For Millennials</H3>
  <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td <a href="#" data-toggle="modal" data-target="#myModal{{$post->id}}">{{$post->title}}</td>
                  
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
                <td><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection