@extends('layout')
@section('content')



    <div class="container mt-5">
        <h2>Cadastro de Pet</h2>
        <form method="post" action="{{route('cadastra-pet')}}">
            @csrf
            <div class="form-group">
                <label for="nomePet">Nome do Pet</label>
                <input type="text" class="form-control" id="nomePet" name="nomePet"  placeholder="Digite o nome do Pet" required>
            </div>

            <div class="form-group">
                <label for="idadePet">Idade do Pet</label>
                <input type="number" class="form-control" id="idadePet" name="idadePet"  placeholder="Digite a Idade do Pet" required>
            </div>
            
            <div class="form-group">
                <label for="especie">Especie</label>
                <input type="text" class="form-control" id="especie" name="especie"  placeholder="Digite a especie do pet ex:cachorro" required>
            </div>

            <div class="form-group">
                <label for="raca">Raça</label>
                <input type="text" class="form-control" id="raca" name="raca" placeholder="Digite a raça do pet ex:poodle" required>
            </div>

            <div class="form-group">
                <label for="nomeDono">Nome do Responsavel</label>
                <input type="text" class="form-control" id="nomeDono" name="nomeDono"  placeholder="Digite o nome do Respnsavel Pelo Pet" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar Pet</button>
        </form>
    </div>


@endsection