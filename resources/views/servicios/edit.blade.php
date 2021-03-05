@extends('layouts.app', ['activePage' => 'teso_inv', 'titlePage' => __('About')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Acerca de</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('servicios.edit', $services->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{--@method('put')--}}
                        <br>
                        <div class="row mx-1">
                          <div class="form-group col-6">
                              <label for="title" style="left: 15px;">Título</label>
                              <input name="title" type="text" class="form-control" id="title" value="{{ $services->h4 }}" required>
                          </div>
                          <div class="form-group col-6">
                              <label for="title" style="left: 15px;">Título en amarillo</label>
                              <input name="title" type="text" class="form-control" id="title" value="{{ $services->span }}">
                          </div>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle" >Servicio 1</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" required>{{ $services->service1 }}</textarea>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle">Servicio 2</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" required>{{ $services->service2 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="subtitle">Servicio 3</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" required>{{ $services->service3 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="subtitle">Servicio 4</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" required>{{ $services->service4 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="subtitle">Servicio 5</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" required>{{ $services->service5 }}</textarea>
                        </div>
                        <br>
                        {{--<div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ asset('storage/'.$services->services) }}" style="width: 60%">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <span class="fileinput-new">Seleccionar imágen</span>
                                    <span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="services" />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>--}}
                        <br>
                        <div class="form-group mr-auto ml-auto">
                            <button type="submit" class="btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection