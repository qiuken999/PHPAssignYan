<!-- Read Movie view extends from 'base'  -->
<!-- Author: Yan Zhang                    -->
<!-- Created Date: Feb 16, 2020           -->
<!-- Modified Date: Feb 17, 2020          -->

<!-- Photo by Bruno Massao from Pexels (Copyright Free)-->

@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6" align="left">
                <img src="public/image/homePic.jpg" class="img-fluid" alt="Responsive image" >
            </div>
            <!-- Guide -->
            <div class="col-6">
                <h2>Home Page Guide</h2>
                <br>
                <h3>Assignment #1</h3>
                <br>
                <h4>Movie Inventory application</h4>
                <ul>
                    <li>PHP based application</li>
                    <li>Using <strong>MAMP</strong> stack, 
                        <strong>Laravel</strong> framework and Bootstrap</li>
                    <li>Movie Information and Actor Information are stored in the database</li>
                    <li>With full functioning <strong>CRUD</strong></li>
                </ul>
                <br>
                <h5>Navigation Bar</h5>
                <p>Home Page - Movie Inventory:&nbsp;&nbsp;  http://localhost/SDAssignYZ/home</p>
                <p>Movie Information:&nbsp;&nbsp;  http://localhost/SDAssignYZ/movieInfo</p>
                <p>Actor Information:&nbsp;&nbsp;  http://localhost/SDAssignYZ/actorInfo</p>
                <p>Contact:&nbsp;&nbsp;  http://localhost/SDAssignYZ/contact</p>
            </div>
        </div>
    </div>

    
@stop