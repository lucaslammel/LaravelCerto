<h1>Formulário de Edição da Atividade código {{$atividades->id}} </h1>
<hr>
<form action="/atividades/{{$atividades->id}}" method="post">
{{ csrf_field() }}
{{method_field('PUT') }}
Título:         <input type="text" name="title" value="{{$atividades->title}}" > <br>
Descrição:      <input type="text" name="description" value="{{$atividades->description}}" > <br>
Agendado para:  <input type="datetime-local" name="scheduledto" value="{{$atividades->scheduledto}}" > <br>
<input type="submit" value="Salvar">
</form>