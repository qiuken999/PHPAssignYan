<!-- Create Actor view extends from 'base'-->
<!-- Author: Yan Zhang                    -->
<!-- Created Date: Feb 16, 2020           -->
<!-- Modified Date: Feb 17, 2020          -->

@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Add New Actor</h3>
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
                    <form method="post" action="{{url('actorInfo')}}">
                        {!! csrf_field() !!}
                        <!-- @method('PUT') -->
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" name="name" class="form-control" placeholder="Actor Name">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
