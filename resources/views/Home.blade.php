{{-- Informando o layout o principal" --}}
@extends('layouts.principal')

{{-- nesse espaço será substituído pelo conteúdo existente dentro da seção title --}}
@section('title', 'Página inicial')

{{-- onde eu quero inserir o código do layout --}}
@section('menu')
    <center>
        <br><br>
        <h1> Olá Seja Bem vindo ao Site</h1>
        <img src="{{ asset('imagens/if.jpeg') }}" alt="Fala ai Prof" width="300" height="300">


        <br><br>
        {{-- <ol>
            @foreach ($Menu as $Menu1)
                <li> {{ $Menu1 }} </li>
            @endforeach

        </ol> --}}


        <table width="467" border="1px">
            <thead>

                <tr>
                    <th style="background-color:#00b0d9">Nome</th>
                    <th style="background-color:#00b0d9">Idade</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($array as $item)
                    <tr>

                        <td align="center">{{ $item['nome'] }}</td>
                        <td align="center">{{ $item['idade'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
        <h1> {{ $texto }} </h1>
        <br><br>

    </center>
@endsection
