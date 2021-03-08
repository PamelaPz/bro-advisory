@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Clientes')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Editar Clientes</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th style="width:4%">
                    ID
                  </th>
                  <th style="width:40%">
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
                        {{$client->id}}
                      </td>
                      <td>
                          {{$client->h4}} {{$client->span}} {{$client->h4_2}}
                      </td>
                      <td style="display: flex; flex-wrap: wrap;justify-content: space-between; align-items: center;">
                        <img style="width: 80px;" src="{{ asset('storage/'.$client->client1) }}">
                        <img style="width: 80px;" src="{{ asset('storage/'.$client->client2) }}">
                        <img style="width: 80px;" src="{{ asset('storage/'.$client->client3) }}">
                        <img style="width: 80px;" src="{{ asset('storage/'.$client->client4) }}">
                        <img style="width: 80px;" src="{{ asset('storage/'.$client->client5) }}">
                        <img style="width: 80px;" src="{{ asset('storage/'.$client->client6) }}">
                        <img style="width: 80px;" src="{{ asset('storage/'.$client->client7) }}">
                        <img style="width: 80px;" src="{{ asset('storage/'.$client->client8) }}">
                      </td>
                      <td class="text-center">
                        <a href="{{ route('clientes.edit', $client->id ) }}" type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </a>
                        <form action="{{ route('clientes.destroy', $client->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                            <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
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
      {{--<div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Table on Plain Background</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td>
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td>
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td>
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td>
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td>
                      $78,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>--}}
    </div>
  </div>
</div>
@endsection