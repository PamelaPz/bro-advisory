@extends('layouts.app', ['activePage' => 'about', 'titlePage' => __('Acerca de')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Acerca de</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('about.edit', 1) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{--@method('put')--}}
                        <br>
                        <div class="row mx-1">
                          <div class="form-group col-6">
                              <label for="title" style="left: 15px;">Título</label>
                              <input name="title" type="text" class="form-control" id="title" value="{{ $about->h4 }}" required>
                          </div>
                          <div class="form-group col-6">
                              <label for="title" style="left: 15px;">Título en amarillo</label>
                              <input name="title" type="text" class="form-control" id="title" value="{{ $about->span }}">
                          </div>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle" >Párrafo 1</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="3" required>{{ $about->p1 }}</textarea>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle">Párrafo 2</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="3" required>{{ $about->p2 }}</textarea>
                        </div>
                        <br>
                        {{--<div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ asset('storage/'.$about->about) }}" style="width: 60%">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <span class="fileinput-new">Seleccionar imágen</span>
                                    <span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="about" />
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