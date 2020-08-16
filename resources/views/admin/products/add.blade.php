@extends('admin.master')

@section('title', 'Agregar Producto')

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/products') }}"><i class="fas fa-users-friends"></i>Productos</a>
</li>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/products/add') }}"><i class="fas fa-plus"></i>Agregar Vestido</a>
</li>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header-cotent">
                <h3 class="title"><i class="fas fa-plus"></i>Agregar Vestido</h3>
            </div>

            <div class="inside">
                {!! Form::open(['url' => '/admin/products/add']) !!}
                    <div class="row">
                        <div class="col-md-6">
                                <label for="name">Nombre del Vestido</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group">
                                            
                                        </span>
                                    </div>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                    </div>
            <!--Colores-->
                    <div class="row">
                        <div class="cold-md-4">
                            <label for="name">Color 1</label>
                                <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <input name="color" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 2</label>
                                <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <input name="color" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 3</label>
                                    <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <input name="color" type="color" value="#000000" />
                                </div>
                                <div class="cold-md-4">
                            <label for="name">Color 4</label>
                            <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <input name="color" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 5</label>
                                <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <input name="color" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 6</label>
                                    <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <input name="color" type="color" value="#000000" />
                                </div>
                        <div class="cold-md-4">
                            <label for="name">Color 7</label>
                            <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <input name="color" type="color" value="#000000" />
                            
                        </div>
                        <div class="cold-md-4">
                                <label for="name">Color 8</label>
                                <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <input name="color" type="color" value="#000000" />
                            </div>
                               
                        </div>
                            <div class="row">
                                <div class="cold-md-4">
                                    <label for="name">Color 9</label>
                                    <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <input name="color-11" type="color" value="#000000" />
                                </div>
                                <div class="cold-md-4">
                            <label for="name">Color 10</label>
                            <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <input name="color-10" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 11</label>
                                <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <input name="color-11" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 12</label>
                                    <label for="name"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <input name="color-12" type="color" value="#000000" />
                                </div>
                         </div>
                         </div>
             <!--Medidas-->
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="control-busto">Control de busto</label>
                                    {!!  Form::checkbox('busto', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="contorno-cintura">Contorno de cintura</label>
                                    {!!  Form::checkbox('cont-cintura', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="contorno-cadera">Contorno de cadera</label>
                                    {!!  Form::checkbox('cont-cadera', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="largo-cintura">Largo desde cintura</label>
                                    {!!  Form::checkbox('largo-cintura', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="largo-mangas">Largo mangas</label>
                                    {!!  Form::checkbox('mangas', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="contorno-brazo">Contorno de Brazo</label>
                                    {!!  Form::checkbox('brazo', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="largo-tajo">Largo de tajo</label>
                                {!!  Form::checkbox('brazo', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="contorno-brazo">Tipo de bretel</label>
                                {!!  Form::checkbox('brazo', 'value') !!}
                            </div>
                        </div>
                        
             
             <!--Imagen-->
                        <div class="row">
                            <div class="cold-md-3">
                                <label for="name">Imagen Destacada</label>
                                <div class="custom-file">
                                    {!! Form::file('img', ['class' => 'custom-file-input', 'id' => 'customFile' ]) !!}
                                    <label class="custom-file-label" for="customFile">Seleccionar imagen</label>
                                </div>
                            </div>
                        </div>

            
            <!--Precio-->
            <div class="row">
                <div class="col-md-3">
                    <label for="price">Precio</label>
                    {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                </div>
            </div>

            <div class="row mtop16">
                <div class="cold-md-12">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                </div>
            </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div> 
@endsection