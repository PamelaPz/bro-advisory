@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Clientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Imagen</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('img_clients.show', $clientimg->category_id) }}" class="btn btn-sm btn-primary">Regresar</a>
                    </div>
                    <form action="{{ route('img_clients.update', $clientimg->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle" >Imágen</label>
                            <div style="display:flex; flex-wrap:wrap;justify-content: center;align-items: center;">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$clientimg->img_cliente) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img">Seleccionar imágen:</label>
                                        <input type="file" id="img" name="img">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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