<!-- Create Movie view extends from 'base'-->
<!-- Author: Yan Zhang                    -->
<!-- Created Date: Feb 16, 2020           -->
<!-- Modified Date: Feb 17, 2020          -->

@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Add New Movie</h3>
            <br>
            <div class="row">
                <!-- notification   -->
                <div class="col-sm-4">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            <ul>
                        </div>
                    @endif

                    @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{\Session::get('success')}}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <!-- resource name -->
                    <form method="post" action="{{url('movieInfo')}}">
                        {!! csrf_field() !!}
                        <!-- @method('PUT') -->
                        <div class="form-group">
                            <label for="title">Movie Title </label>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="releaseDate">Release Date </label>
                            <!-- set Max Date -->
                            <input type="date" name="releaseDate" class="form-control" max="9999-12-31">
                        </div>
                        <div class="form-group">
                            <label for="description">Description </label>
                            <input type="text" name="description" class="form-control" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="genreType">Genre Type </label>
                            <input type="text" name="genreType" class="form-control" placeholder="Genre Type">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
@stop

