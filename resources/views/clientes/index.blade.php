@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Clientes')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Listas de Clientes</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th style="width:50%">
                      Título sección
                  </th>
                  <th style="width:auto">
                    Imágenes
                  </th>
                  <th style="width:10%">
                    
                  </th>
                </thead>
                <tbody>
                  @foreach ($clients as $client)
                    <tr>
                      <td>
                        <div style="display:flex; align-items: center;">
                          <a href="{{ route('clientes.edit', $client->id ) }}">
                            {{$client->h4}} {{$client->span}} {{$client->h4_2}}
                          </a>
                        </div>
                      </td>
                      <td style="display: flex; flex-wrap: wrap;justify-content: space-between; align-items: center;">
                        @foreach ($clientimgs as $img)
                          @if ($client->category_id == $img->category_id)
                            <img style="width: 80px;" src="{{ asset('storage/'.$img->img_cliente) }}">
                          @endif
                        @endforeach
                      </td>
                      <td class="text-center">
                          <a href="{{ route('clientes.edit', $client->id ) }}" type="button" rel="tooltip" title="Editar sección" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </a>
                        <form action="{{ route('clientes.destroy', $client->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                            <button type="submit" rel="tooltip" title="Eliminar sección" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection