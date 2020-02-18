<!-- Update Actor view extends from 'base' -->
<!-- Author: Yan Zhang                     -->
<!-- Created Date: Feb 16, 2020            -->
<!-- Modified Date: Feb 17, 2020           -->

@extends('base')

@section('content')
    <h3>Edit Actor Information</h3>
    <div class="row">
        <div class="col-md-3">
            
            <br>
            <!-- notification -->
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors -> all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    <ul>
                </div>
            @endif

            <form method="post" action="{{action('ActorInfoController@update', $id)}}">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{$actor -> name}}" placeholder="Change actor name">
                </div>
                
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Edit">
                </div>
            </form>
        </div>
    </div>
@stop