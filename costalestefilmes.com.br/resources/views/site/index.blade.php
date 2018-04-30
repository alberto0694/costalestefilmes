@extends('layouts.site')

@section('content')
<div id="main">
  <div class="inner">
    <div class="columns">
      @foreach($materiais as $material)
        <div class="image fit">
          <a href="{{ route('site.detail', $material->id) }}" target="_blank">
            <img src="{{ Storage::url($material->imagem) }}" alt="" />
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
