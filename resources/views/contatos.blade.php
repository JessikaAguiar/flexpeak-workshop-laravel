<h1>Lista de Contatos</h1>

<a href="formulario">Cadastrar Contato</a>

<ul>
    @foreach ($contatos as $contato)
    <li>
        Nome: {{$contato->nome}} 
        <br>
        Telefone: {{$contato->telefone}}
    </li>
    @endforeach
</ul>




<table border="2">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Telefone</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($contatos as $contato)
        <tr>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->telefone }}</td>
        </tr>
        @endforeach
    </tbody>
</table>