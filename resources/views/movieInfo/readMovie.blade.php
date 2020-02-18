<!-- Read Movie view extends from 'base'  -->
<!-- Author: Yan Zhang                    -->
<!-- Created Date: Feb 16, 2020           -->
<!-- Modified Date: Feb 17, 2020          -->

@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Movie Information List</h3>
            <!-- notification -->
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif

            <a href="{{route('movieInfo.create')}}" class="btn btn-primary">Add New Movie</a>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Title</th>
                                <th>Release Date</th>
                                <th>Description</th>
                                <th>Genre Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                                <tr>
                                    <td>{{$movie['title']}}</td>
                                    <td>{{$movie['releaseDate']}}</td>
                                    <td>{{$movie['description']}}</td>
                                    <td>{{$movie['genreType']}}</td>
                                    <td>
                                        <a href="{{action('MovieInfoController@edit', $movie['id'])}}" class="btn btn-warning">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <form method="post" class="delete_form" action="{{action('MovieInfoController@destroy', $movie['id'])}}">
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
    <!-- asking for making sure -->
    <script>
        $(document).ready(function(){
            $('.delete_form').on('submit', function(){
                if(confirm("Do you want to delete this movie information record?")){
                    return true;
                }else{
                    return false;   //no action would be done
                }
            })
        });
    </script>

@stop




