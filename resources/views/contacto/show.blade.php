@extends('layouts.app', ['activePage' => 'contacto', 'titlePage' => __('Contacto')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Contacto</h4>
                </div>
                <div class="card-body">
                  <div class="col-12 text-right">
                      <a href="{{ route('contacto.edit', $contact->id) }}" class="btn btn-sm btn-primary">Editar</a>
                  </div>
                  <br>
                  <div class="form-group mx-3">
                      <label for="address">Dirección</label>
                      <input name="address" type="text" class="form-control" id="address" value="{{ $contact->address }}" disabled>
                  </div>
                  <br>
                  <div class="form-group mx-3">
                      <label for="phone1">Teléfono 1</label>
                      <input name="phone1" type="text" class="form-control" id="phone1" value="{{ $contact->phone1 }}" disabled>
                  </div>
                  <br>
                  <div class="form-group mx-3">
                      <label for="phone2" >Teléfono 2</label>
                      <input name="phone2" type="text" class="form-control" id="phone2" value="{{ $contact->phone2 }}" disabled>
                  </div>
                  <br>
                  <div class="form-group mx-3">
                      <label for="email">Correo Electrónico</label>
                      <input name="email" type="text" class="form-control" id="email" value="{{ $contact->email }}" disabled>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection