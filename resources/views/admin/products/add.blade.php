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
                                    {!! Form::text('name', null, ['class' => 'form-control', 'name' => 'name']) !!}
                                </div>
                            </div>
                    </div>
            <!--Colores-->
                    <div class="row">
                        <div class="cold-md-4">
                            <label for="name">Color 1</label>
                                <label for="color1"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <input name="color1_a" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 2</label>
                                <label for="color"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <input name="color2_a" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 3</label>
                                    <label for="color3"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <input name="color3_a" type="color" value="#000000" />
                                </div>
                                <div class="cold-md-4">
                            <label for="name">Color 4</label>
                            <label for="color4"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <input name="color4_a" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 5</label>
                                <label for="color5"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <input name="color5_a" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 6</label>
                                    <label for="color6"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <input name="color6_a" type="color" value="#000000" />
                                </div>
                        <div class="cold-md-4">
                            <label for="name">Color 7</label>
                            <label for="color7"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <input name="color7_a" type="color" value="#000000" />
                            
                        </div>
                        <div class="cold-md-4">
                                <label for="name">Color 8</label>
                                <label for="color8"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <input name="color8_a" type="color" value="#000000" />
                            </div>
                               
                        </div>
                            <div class="row">
                                <div class="cold-md-4">
                                    <label for="name">Color 9</label>
                                    <label for="color9"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <input name="color9_a" type="color" value="#000000" />
                                </div>
                                <div class="cold-md-4">
                            <label for="name">Color 10</label>
                            <label for="color10"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <input name="color10_a" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 11</label>
                                <label for="color11"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <input name="color11_a" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 12</label>
                                    <label for="color12"></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <input name="color12_a" type="color" value="#000000" />
                                </div>
                         </div>
                         </div>
             <!--Medidas-->
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="cont_bust">Control de busto</label>
                                    {!!  Form::checkbox('cont_bust', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="cont_cint">Contorno de cintura</label>
                                    {!!  Form::checkbox('cont_cint', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="cont_cadera">Contorno de cadera</label>
                                    {!!  Form::checkbox('cont_cadera', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="lar_cint">Largo desde cintura</label>
                                    {!!  Form::checkbox('lar_cint', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="larg_mang">Largo mangas</label>
                                    {!!  Form::checkbox('lar_mang', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="cont_bra">Contorno de Brazo</label>
                                    {!!  Form::checkbox('cont_braz', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="larg_taj">Largo de tajo</label>
                                {!!  Form::checkbox('larg_taj', 'value') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="cold-md-6">
                                <label for="tip_bret">Tipo de bretel</label>
                                {!!  Form::checkbox('tip_bret', 'value') !!}
                            </div>
                        </div>
                        
             
             <!--Imagen-->
                        <div class="row">
                            <div class="cold-md-3">
                                <label for="name">Imagen Destacada</label>
                                <div class="custom-file">
                                    {!! Form::file('img', ['class' => 'custom-file-input', 'id' => 'customFile', 'name' => 'img']) !!}
                                    <label class="custom-file-label" for="customFile">Seleccionar imagen</label>
                                </div>
                            </div>
                        </div>

            
            <!--Precio-->
            <div class="row">
                <div class="col-md-3">
                    <label for="price">Precio</label>
                    {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any', 'name' => 'price']) !!}
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