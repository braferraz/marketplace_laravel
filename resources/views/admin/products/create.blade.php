@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <form action="{{route('admin.products.store')}}" method="post">
    @csrf
        <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

            @error('name')
                <div class="invalid-feedback">
                    <p>Verifique o campo nome.</p>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description"  class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
        
            @error('description')
                <div class="invalid-feedback">
                    <p>Verifique o campo descrição.</p>
                </div>
            @enderror
        
        </div>
        <div class="form-group">
            <label>Conteúdo</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" value="{{old('body')}}"></textarea>
        
            @error('body')
                <div class="invalid-feedback">
                    <p>Verifique o campo descrição.</p>
                </div>
            @enderror
        
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price"  class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
        
            @error('price')
                <div class="invalid-feedback">
                    <p>Verifique o campo preço.</p>
                </div>
            @enderror
        
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug"  class="form-control @error('slug') is-invalid @enderror" value="{{old('slug')}}">
        
            @error('slug')
                <div class="invalid-feedback">
                    <p>Verifique o campo slug.</p>
                </div>
            @enderror
        
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
        </div>
    </form>
@endsection