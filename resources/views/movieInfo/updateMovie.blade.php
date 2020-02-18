<!-- Update Movie view extends from 'base' -->
<!-- Author: Yan Zhang                     -->
<!-- Created Date: Feb 16, 2020            -->
<!-- Modified Date: Feb 17, 2020           -->

@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Movie Information</h3>
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
            
            <form method="post" action="{{action('MovieInfoController@update', $id)}}">
                {!! csrf_field() !!}
                <!-- PATCH -->
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="{{$movie -> title}}" placeholder="Change Title">
                </div>
                <!-- set Max Date -->
                <div class="form-group">
                    <input type="date" name="releaseDate" class="form-control" value="{{$movie -> releaseDate}}" placeholder="Change Release Date" max="9999-12-31">
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control" value="{{$movie -> description}}" placeholder="Change Description">
                </div>
                <div class="form-group">
                    <input type="text" name="genreType" class="form-control" value="{{$movie -> genreType}}" placeholder="Change Genre Type">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Edit">
                </div>
            </form>
        </div>
    </div>
@stop

