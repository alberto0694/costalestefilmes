@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
              <a href="{{ route('admin.novo') }}">
                <button type="button" class="btn btn-success">Novo Material</button>
              </a>
            </div><br>
            <div class="card">
                <div class="card-header">Conteúdos</div>

                <div class="card-body">
                    <ul class="list-group">
                      @foreach($materiais as $material)
                        <li class="list-group-item">{{$material->titulo}}
                          <div class="btn-group" role="group" aria-label="..." style="float: right;">
                            <a href="{{ route('admin.editar', $material->id) }}">
                              <button type="button" class="btn btn-success">Editar</button>
                            </a>&nbsp;&nbsp;
                            <button type="button" id="delecao-material-{{ $material->id }}" class="btn btn-danger">Deletar</button>
                          </div>
                        </li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dialog-confirm">
  <p>
    <span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Deseja realmente deletar este registro?
  </p>
</div>
@endsection
@section('js-content')
<script>
    $(function() {
        $("#dialog-confirm").dialog({
          autoOpen: false
        });

        @foreach($materiais as $material)
          $("#delecao-material-{{$material->id}}").click(function(){
            $("#dialog-confirm").dialog({
              resizable: false,
              height: "auto",
              width: 400,
              autoOpen: true,
              title: 'Deletar material',
              buttons: {
                "Sim": function(){
                  $.ajax({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "POST",
                    url: "{{ route('material.delete', $material->id) }}",
                    success:function(){
                      location.reload();
                    }
                  })
                },
                "Não": function() {
                    $(this).dialog( "close" );
                }
              }
            });
          });
        @endforeach
    });
</script>
@endsection
