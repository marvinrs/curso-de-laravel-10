<h1>Detalhes da dúvida {{ $support->id}}</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>

<form action="{{ route('supports.destroy', $support->id)}}" method="post">
    @csrf;
    @method("DELETE");
    <input type="submit" value="Deletar">
</form>
