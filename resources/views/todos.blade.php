@extends('layout.layout')  

<div class="content">
        
    <title>Todos</title><br>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new todo">
            </form>
        </div>
    </div>
    @section('content')
        @foreach($todos as $todo) 

            {{$todo->todo}}<br><hr>
            
        @endforeach
    @endsection
            
</div>

                
           