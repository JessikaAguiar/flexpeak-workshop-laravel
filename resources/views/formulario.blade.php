<h1>Formulario de contato</h1>

<form action="contatos" method="post">
    @csrf

    {{-- para atualizar: @method('PUT') --}}
    
    <input type="text" name="nome">
    <input type="text" name="telefone">
    <input type="submit" value="Enviar">
</form>