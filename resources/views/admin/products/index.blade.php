@extends('admin.master')

@section('title', 'Productos')

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/products') }}"><i class="fas fa-users-friends"></i>Productos</a>
</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header-cotent">
                <h3 class="title"><i class="fas fa-users-friends"></i>Productos</h3>
            </div>

            <div class="inside">
                <div class="btns">
                    <a href="{{ url('/admin/products/add') }}" class="btn h-condensed btn-generic"><i class="fas fa-plus"></i>Agregar Vestido</a>
                </div>
                <div class="table">

                </div>
            </div>
        </div>
    </div> 
@endsection