<h1>Formulário de Edição da Mensagem código {{$mensagens->id}} </h1>
<hr>
<form action="/mensagens/{{$mensagens->id}}" method="post">
{{ csrf_field() }}
{{method_field('PUT') }}
Título:         <input type="text" name="titulo" value="{{$mensagens->titulo}}" > <br>
Texto:      <input type="text" name="texto" value="{{$mensagens->texto}}" > <br>
Autor:  <input type="text" name="autor" value="{{$mensagens->autor}}" > <br>
<input type="submit" value="Salvar">
</form>