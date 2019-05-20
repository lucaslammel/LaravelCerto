<h1>Excluir registro</h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<p class="h3 text-center">Você realmente deseja excluir o registro: {{$atividade->title}}?</p>
				<br>
				<p class="text-center"><button type="submit" class="btn btn-danger btn-lg">Deletar</button></p>
			</form>

</form>