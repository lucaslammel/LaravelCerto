<h1>Formulário de Cadastro de Atividades</h1>
<hr>
<form action="/atividades" method="post">
{{ csrf_field() }}
Título:         <input type="text" name="title"> <br>
Descrição:      <input type="text" name="description"> <br>
Agendado para:  <input type="datetime-local" name="scheduledto"> <br>
<input type="submit" value="Salvar">
</form>

@if ($errors->any())

@foreach ($errors->all() as $error)
{{$error}} @endforeach
@endif


@if (\Session::has('success'))
{{\Session::get('success')}}


@endif