@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Clientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Cliente # {{ $client->id }}</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('clientes.index') }}" class="btn btn-sm btn-primary">Regresar</a>
                    </div>
                    <form action="{{ route('clientes.update', $client->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <br>
                        <div class="row mx-1">
                          <div class="form-group col-3">
                              <label for="h4" style="left: 15px;">Título</label>
                              <input name="h4" type="text" class="form-control" id="h4" value="{{ $client->h4 }}" required>
                          </div>
                          <div class="form-group col-4">
                              <label for="span" style="left: 15px;">texto en amarillo</label>
                              <input name="span" type="text" class="form-control" id="span" value="{{ $client->span }}">
                          </div>
                          <div class="form-group col-5">
                              <label for="h4_2" style="left: 15px;"></label>
                              <input name="h4_2" type="text" class="form-control" id="h4_2" value="{{ $client->h4_2 }}">
                          </div>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle" >Imágenes</label>
                            <div style="display:flex; flex-wrap:wrap;justify-content: center;align-items: center;">
                                @foreach ($clientimgs as $img)
                                    @if ($client->category_id == $img->category_id)
                                        <div class="text-center m-2" data-provides="fileinput" style="width:auto">
                                            <img style="width: 100px;" src="{{ asset('storage/'.$img->img_cliente) }}">
                                        </div>
                                    @endif
                                @endforeach
                                <div class="pt-3" style="display: flex; justify-content: center;">
                                    <a href="{{ route('img_clients.show', $client->category_id ) }}" type="button" class="btn btn-sm btn-primary">
                                        Editar Imagenes
                                    </a>
                                    <!-- <form action="{{ route('img_clients.destroy', $img->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                        </button>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                        <br>
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