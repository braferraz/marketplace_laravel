@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>
    <form action="{{route('admin.stores.store')}}" method="post">
    @csrf
        <div class="form-group">
            <label>Nome Loja</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" >
        
            @error('name')
            <div class="invalid-feedback">
                <p>O campo nome é requerido.</p>
            </div>
                
            @enderror
        
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description"  class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" >
        
            @error('description')
                <div class="invalid-feedback">
                    <p>Verifique o campo descrição.</p>
                </div>
            @enderror
        
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone"  class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" >
        
            @error('description')
                <div class="invalid-feedback">
                    <p>Preencha o campo telefone.</p>
                </div>
            @enderror
        
        </div>
        <div class="form-group">
            <label>Celular/WhatsApp</label>
            <input type="text" name="mobile_phone"  class="form-control @error('mobile_phone') is-invalid @enderror" value="{{old('mobile_phone')}}" >
           
            @error('description')
                <div class="invalid-feedback">
                    <p>Preencha este campo.</p>
                </div>
            @enderror

        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug"  class="form-control  @error('slug') is-invalid @enderror" value="{{old('slug')}}">

            @error('slug')
                <div class="invalid-feedback">
                    {<p>Preencha este campo.</p>}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
        </div>
    </form>
@endsection