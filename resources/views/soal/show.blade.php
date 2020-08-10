@extends('adminlte::page')

@section('content')

    <div class="text-left">
        <form action="{{ route('soal.destroy',$soal->id) }}" method="post">
            <a href="{{ route('soal.index') }}" class="btn btn-info">Kembali</a>
            <a href="{{ route('soal.edit', $soal->id) }}" class="btn btn-warning">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    <hr>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">{{ $soal->judul }} </h3>
                        </div>
                        <div class="card-title">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Judul</th>
                                    <td>{{ $soal->judul }}</td>
                                </tr>
                                <tr>
                                    <th>Isi</th>
                                    <td>{{ $soal->isi }}</td>
                                </tr>
                                <tr>
                                    <th>Isi</th>
                                    <td>{{ $soal->profil_id }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection