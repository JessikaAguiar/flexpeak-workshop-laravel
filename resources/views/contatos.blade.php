<h1>Lista de Contatos</h1>

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