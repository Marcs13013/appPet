@extends('layout')
@section('content')



<div>
    <div class="col-md-8" style="position:absolute; top:22%; left:16%">
        <h1 style="position:relative; left:21.8%">Esta é a página para gerenciar os pets</h1>
            
        <form method="POST" action="{{ route('lista-pet') }}">
            @csrf
            <div style="justify-content:center; text-align:center; align-items:center; margin:20px; position:relative; right:2%">
                <label for="inputPet" class="form-label fw-bolder" style="width:200px;font-size: 22px">Digite o Pet</label>
                <input type="text" class="form-control" id="inputPet" style="width:380px; position:relative; left:34%" name="pet" required>
                <button type="submit" style="position: relative; margin-top:10px" class="btn btn-primary">Pesquisar</button>
            </div>
        </form>
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Pet</th>
                    <th scope="col">Idade</th>
                    <th scope="col">especie</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Responsavel</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registrosPet as $registrosPets)
                <tr>
                    
                    <th scope="row">{{$registrosPets->idPet}}</th>
                    <td>{{$registrosPets->nomePet}}</td>
                    <td>{{$registrosPets->idadePet}}</td>
                    <td>{{$registrosPets->especie}}</td>
                    <td>{{$registrosPets->raca}}</td>
                    <td>{{$registrosPets->nomeDono}}</td>
                    
                    <td>
                        <a href="{{route('show-altera-pet',$registrosPets->idPet)}}">
                            <button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
                                </svg>
                            </button>
                        </a>
                        
                    </td>
                    <td>
                        <form method="Post" action="{{route('apaga-pet',$registrosPets->idPet)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>

@endsection