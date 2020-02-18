<!-- Contact view extends from 'base'  -->
<!-- Author: Yan Zhang                 -->
<!-- Created Date: Feb 16, 2020        -->
<!-- Modified Date: Feb 17, 2020       -->

@extends('base')

@section('content')
    <br>
    <div class="row">
        <!-- Bootstrap - Cards 1    About-->
        <div class="col-sm-4">
            <div class="card border-primary mb-3" style="width: 24rem; height:14rem;">
                <div class="card-header">Movie Inventory</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">About</h5>
                    <p class="card-text">Author: Yan Zhang</p>
                    <p class="card-text">Completed Date: Feb 17, 2020</p>
                </div>
            </div>
        </div>

        <div class="col-sm-1"></div>

        <!-- Bootstrap - Cards 2    Contact-->
        <div class="col-sm-4">
            <div class="card border-primary mb-3" style="width: 24rem; height:14rem;">
                <div class="card-header">Contact Information</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Yan Zhang</h5>
                    <p class="card-text">Email Address: Yan.Zhang2@ontario.ca</p>
                    <a href="https://github.com/qiuken999/PHPAssignYan.git" class="btn btn-primary">GitHub</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3"></div>
    </div>
    
@stop