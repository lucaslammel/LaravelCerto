<h1>Lista de Mensagens</h1>



@if (\Session::has('success'))
{{\Session::get('success')}}


@endif



@foreach($mensagens as $m)
<h2><a href="/mensagens/{{$m->id}}">{{$m->titulo}}</a></h2>
@endforeach

@if(Auth::check())
<a href="/mensagens/create">Criar nova Mensagem</a>
@endif