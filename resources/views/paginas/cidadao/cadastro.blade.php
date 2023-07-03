@extends('_template._main')

@section('title', 'Cadastro Cidadão')

@section('body')
    <!-- Header -->
    @include('_components._header_pages')
    <!-- Header End -->

    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->

    <!-- Sidebar -->
    @include('_components._sidebar')
    <!-- Sidebar End -->

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Cidadão - SUS</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1>Cadastro de Cidadão - SUS</h1>
    <form action="salvar_cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Salvar</button>
    </form>
    </body>
    </html>

    <!-- Page Content End-->

    <!-- Menubar -->
    @include('_components._menu_bar')
    <!-- Menubar -->

    <!-- PWA Offcanvas -->
    {{-- @include('_components.instalar_pwa') --}}
    <!-- PWA Offcanvas End -->
    </div>
@stop
