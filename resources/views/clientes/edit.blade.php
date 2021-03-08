@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Editar Clientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Cliente # {{ $client->id }}</h4>
                </div>
                <div class="card-body">
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
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$client->client1) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img1">Seleccionar imágen:</label>
                                        <input type="file" id="img1" name="img1">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$client->client2) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img2">Seleccionar imágen:</label>
                                        <input type="file" id="img2" name="img2">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$client->client3) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img3">Seleccionar imágen:</label>
                                        <input type="file" id="img3" name="img3">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$client->client4) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img4">Seleccionar imágen:</label>
                                        <input type="file" id="img4" name="img4">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$client->client5) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img5">Seleccionar imágen:</label>
                                        <input type="file" id="img5" name="img5">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$client->client6) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img6">Seleccionar imágen:</label>
                                        <input type="file" id="img6" name="img6">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$client->client7) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img7">Seleccionar imágen:</label>
                                        <input type="file" id="img7" name="img7">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                        <img src="{{ asset('storage/'.$client->client8) }}" style="width: 70%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img8">Seleccionar imágen:</label>
                                        <input type="file" id="img8" name="img8">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
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