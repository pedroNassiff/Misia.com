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
                <form id="form-article" role="form" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
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
                                <label for="color1"></label>
                                    {!! Form::text('color1_a', null, ['class' => 'form-control']) !!}
                            <input name="color1" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 2</label>
                                <label for="color"></label>
                                    {!! Form::text('color2_a', null, ['class' => 'form-control']) !!}
                                <input name="color2" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 3</label>
                                    <label for="color3"></label>
                                    {!! Form::text('color3_a', null, ['class' => 'form-control']) !!}
                                    <input name="color3" type="color" value="#000000" />
                                </div>
                                <div class="cold-md-4">
                            <label for="name">Color 4</label>
                            <label for="color4"></label>
                                    {!! Form::text('color4_a', null, ['class' => 'form-control']) !!}
                            <input name="color4" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 5</label>
                                <label for="color5"></label>
                                    {!! Form::text('color5_a', null, ['class' => 'form-control']) !!}
                                <input name="color5" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 6</label>
                                    <label for="color6"></label>
                                    {!! Form::text('color6_a', null, ['class' => 'form-control']) !!}
                                    <input name="color6" type="color" value="#000000" />
                                </div>
                        <div class="cold-md-4">
                            <label for="name">Color 7</label>
                            <label for="color7"></label>
                                    {!! Form::text('color7_a', null, ['class' => 'form-control']) !!}
                            <input name="color7" type="color" value="#000000" />
                            
                        </div>
                        <div class="cold-md-4">
                                <label for="name">Color 8</label>
                                <label for="color8"></label>
                                    {!! Form::text('color8_a', null, ['class' => 'form-control']) !!}
                                <input name="color8" type="color" value="#000000" />
                            </div>
                               
                        </div>
                            <div class="row">
                                <div class="cold-md-4">
                                    <label for="name">Color 9</label>
                                    <label for="color9"></label>
                                    {!! Form::text('color9_a', null, ['class' => 'form-control']) !!}
                                    <input name="color9" type="color" value="#000000" />
                                </div>
                                <div class="cold-md-4">
                            <label for="name">Color 10</label>
                            <label for="color10"></label>
                                    {!! Form::text('color10_a', null, ['class' => 'form-control']) !!}
                            <input name="color10" type="color" value="#000000" />
                        </div>
                            <div class="cold-md-4">
                                <label for="name">Color 11</label>
                                <label for="color11"></label>
                                    {!! Form::text('color11_a', null, ['class' => 'form-control']) !!}
                                <input name="color11" type="color" value="#000000" />
                            </div>
                                <div class="cold-md-4">
                                    <label for="name">Color 12</label>
                                    <label for="color12"></label>
                                    {!! Form::text('color12_a', null, ['class' => 'form-control']) !!}
                                    <input name="color12" type="color" value="#000000" />
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
                                    {!!  Form::checkbox('larg_mang', 'value') !!}
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
                                    <input id="image" type="file" accept=".png, .jpg, .jpeg" name="image" required>
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

                </form>
            </div>
        </div>
    </div> 
@endsection