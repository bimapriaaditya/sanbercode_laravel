@extends('adminlte::page')

@section('content')

<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('soal') }}"> Back</a>
</div>

<section>
    <form action="{{ route('soal.update',$soal->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Pertanyaan :</strong>
                    <input type="text" value="{{ $soal->judul }}" name="judul" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="align-self-center">Isi :</strong>
                    <textarea name="isi" type="text" cols="100" rows="5" class="form-control">
                        {{ old('isi', $soal->isi) }}
                    </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pembuat :</strong>
                    <input type="text" name="profil_id" value="{{ $soal->profil_id }}" class="form-control" placeholder="id_pembuat">
                </div>
            </div>
            <input type="submit" value="submit" class="btn btn-success">
        </div>
   
    </form>
</section>
    
@endsection