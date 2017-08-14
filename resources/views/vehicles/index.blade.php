@extends('layouts.app')

@section('content')
 <!--page title and breadcrumb start -->
<div class="row">
    <div class="col-md-8">
        <h1 class="page-title">Vehicles
            <small></small>
        </h1>
    </div>
    <div class="col-md-4">
        <ul class="breadcrumb pull-right">
            <li>Home</li>
            <li><a href="#" class="active">Vehicles</a></li>
        </ul>
    </div>
</div>
<!--page title and breadcrumb end -->

<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <header class="panel-heading">
                All Vehicles
                <span class="tools pull-right">
                    <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                    <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                    <a class="close-box fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                Manage your vehicles here.
            </div>
        </div>
    </div>
</div>
@endsection
