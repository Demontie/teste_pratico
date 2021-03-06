@extends('layout.site')
@section('conteudo')

<form method="POST" id="form_aluno" action="{{url('alunos')}}">
    @method('PUT')
    {{ csrf_field() }}
    <input type="hidden" name="id_aluno" id="id_aluno" value="{{$curso->id}}">
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="nome_aluno">Nome completo </label>
            <input type="text" name="nome_aluno" id="nome_aluno" class="form-control" required placeholder="Nome completo" autofocus value="{{$aluno->nome_aluno}}">
        </div>
        <div class="form-group col-sm-6">
            <label for="numero_maricula">Número da matricula</label>
            <input type="number" name="numero_maricula" id="numero_maricula" class="form-control" required placeholder="Número da matricula" value="{{$aluno->numero_maricula}}">

        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="semestre">Número da matricula</label>
            <input type="number" name="semestre" id="semestre" class="form-control" required placeholder="Semestre" value="{{$aluno->semestre}}">
        </div>

        <div class="form-group col-sm-6">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="matriculado">Matriculado</option>
                <option value="trancado">Trancado</option>
                <option value="jubilado">Jubilado</option>
            </select>
        </div>

        <div class="form-group col-sm-6">
            <label for="curso">Curso</label>
            <select name="curso" id="curso" class="form-control">
                @forelse($cursos as $curso)
                    <option value="{{$curso->id}}">{{$curso->nome_curso}}</option>
                @empty
                    <option value="">Cadastre um curso!</option>
                @endforelse
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection
