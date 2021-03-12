@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Clientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Imagen  </h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('clientes.edit', $category->category_id) }}" class="btn btn-sm btn-primary">Regresar</a>
                    </div>
                    
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle" >Imágenes</label>
                            <div style="display:flex; flex-wrap:wrap;justify-content: center;align-items: center;">
                                @foreach ($images as $img)
                                    @if ($category->category_id == $img->category_id)
                                        <div class="text-center m-2" data-provides="fileinput" style="width:auto">
                                            <img style="width: 150px;" src="{{ asset('storage/'.$img->img_cliente) }}">
                                            <div class="pt-3" style="display: flex; justify-content: center;">
                                                <a href="{{ route('img_clients.edit', $img->id) }}" type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <form action="{{ route('img_clients.destroy', $img->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-link btn-sm">
                                                    <i class="material-icons">close</i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <br>
                </div>
            </div>
        </div>
    </div>
@endsection