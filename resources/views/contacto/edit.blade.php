@extends('layouts.app', ['activePage' => 'contacto', 'titlePage' => __('Contacto')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Contacto</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('contacto.update', 1) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <br>
                        <div class="form-group mx-3">
                            <label for="address">Dirección</label>
                            <input name="address" type="text" class="form-control" id="address" value="{{ $contact->address }}" required>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="phone1">Teléfono 1</label>
                            <input name="phone1" type="text" class="form-control" id="phone1" value="{{ $contact->phone1 }}">
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="phone2" >Teléfono 2</label>
                            <input name="phone2" type="text" class="form-control" id="phone2" value="{{ $contact->phone2 }}">
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="email">Correo Electrónico</label>
                            <input name="email" type="text" class="form-control" id="email" value="{{ $contact->email }}">
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