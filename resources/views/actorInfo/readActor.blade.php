<!-- Read Actor view extends from 'base'  -->
<!-- Author: Yan Zhang                    -->
<!-- Created Date: Feb 16, 2020           -->
<!-- Modified Date: Feb 17, 2020          -->

@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Actor Information List</h3>
            <!-- notification -->
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif

            <a href="{{route('actorInfo.create')}}" class="btn btn-primary">Add New Actor</a>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Actor Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actors as $actor)
                                <tr>
                                    <td>{{$actor['name']}}</td>
                                    <td>
                                        <a href="{{action('ActorInfoController@edit', $actor['id'])}}" class="btn btn-warning">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <form method="post" class="delete_form" action="{{action('ActorInfoController@destroy', $actor['id'])}}">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.delete_form').on('submit', function(){
                if(confirm("Do you want to delete this actor information record?")){
                    return true;
                }else{
                    return false;   //no action would be done
                }
            })
        });
    </script>

@stop
