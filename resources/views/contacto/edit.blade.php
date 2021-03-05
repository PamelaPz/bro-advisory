@extends('layouts.app', ['activePage' => 'contacto', 'titlePage' => __('Contacto')])

@section('content')
<div class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header card-header-primary">
              <h4 class="card-title">Editar Contacto</h4>
          </div>
          <div class="card-body">
              <form action="{{ route('contacto.edit', 1) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  {{--@method('put')--}}
                  <br>
                  <div class="form-group mx-3">
                      <label for="title">Dirección</label>
                      <input name="title" type="text" class="form-control" id="title" value="{{ $contact->address }}" required>
                  </div>
                  <br>
                  <div class="form-group mx-3">
                      <label for="title">Teléfono 1</label>
                      <input name="title" type="text" class="form-control" id="title" value="{{ $contact->phone1 }}">
                  </div>
                  <br>
                  <div class="form-group mx-3">
                      <label for="subtitle" >Teléfono 2</label>
                      <input name="title" type="text" class="form-control" id="title" value="{{ $contact->phone2 }}">
                  </div>
                  <br>
                  <div class="form-group mx-3">
                      <label for="subtitle">Correo Electrónico</label>
                      <input name="title" type="text" class="form-control" id="title" value="{{ $contact->email }}">
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