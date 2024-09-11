@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')


{{-- Essa é a pagina home --}}

{{-- {{@isset($nome) ? 'existe' : 'não existe' @endisset}} --}}

{{-- @if ($nome == 'joao')
  true
@else
   else
@endif
    
@endsection --}}

@for($i = 0; $i <= 10; $i++)
 valor atual é {{$i}} <br>

 @endfor

 
