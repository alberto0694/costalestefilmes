@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                  <div class="container">
                    <form class="form-horizontal" method="POST" action="{{ route('material.create') }}" enctype='multipart/form-data'>
                      @csrf
                      <div class="form-group">
                        <div class="col-sm-10">
                          <input required type="text" class="form-control" id="titulo" placeholder="Informe o titulo" name="titulo">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-10">
                          <input required type="text" class="form-control" id="link" placeholder="Informe o link do video (Vímeo)" name="link">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-10">
                          <label>Informe a imagem do material</label>
                          <input required type="file" class="form-control" id="imagem" placeholder="Informe o imagem" name="imagem">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-10">
                          <textarea required id="texto" name="texto" class="form-control" placeholder="Informe a descrição do material" rows="6">
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Cadastar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
