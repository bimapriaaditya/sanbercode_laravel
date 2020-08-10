@extends('adminlte::page')

@section('content')
    <div class="text-left">
        <a href="{{ route('soal.index') }}" class="btn btn-primary">Kembali</a>
        <div>&nbsp;</div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Buat Soal</h3>
                        </div>
                        <div class="card-body">
    
                            <form action="{{ route('soal.store') }}" method="POST">
    
                                @csrf
    
                                <div class="form-group">
                                    <strong>Judul Pertanyaan :</strong>
                                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                                </div>

                                <div class="form-group">
                                    <strong class="align-self-center">Isi :</strong>
                                    <textarea name="isi" cols="100" rows="5" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <strong>Pembuat :</strong>
                                    <input type="text" name="profil_id" class="form-control" placeholder="id_pembuat">
                                </div>
                                
                                <input type="submit" value="submit" class="btn btn-success">
                            </form>
    
                        </div>
                        <div class="footer"></div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection