@extends('Layouts/Layout')
  <title>Jobber</title>

@section('content')
<div style="height: 1000px">
    <div class="divs">
        <div class="assign-1-shape-1">
            <a href="{{route('bricolage.create')}}">Bricolage</a>
        </div>
        <div class="assign-1-shape-2">Domicile</div>
        <div class="assign-1-shape-3">Eduction</div>
        <div class="assign-1-shape-4">Nourriture</div>
    </div>

</div>
@endsection

