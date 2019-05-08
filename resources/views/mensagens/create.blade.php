<h1>Formulário de Cadastro de Mensagens</h1>
<hr>
<form action="/mensagens" method="post">
{{ csrf_field() }}
Título:         <input type="text" name="titulo"> <br>
Texto:      <input type="text" name="texto"> <br>
Autor:  <input type="text" name="autor"> <br>
<input type="submit" value="Salvar">
</form>

@if ($errors->any())

@foreach ($errors->all() as $error)
{{$error}} @endforeach
@endif


@if (\Session::has('success'))
{{\Session::get('success')}}


@endif