@extends('adminlte::page')

@section('title', 'List Soal Ajuan')

@section('content_header')
    <h1>List Soal</h1>
@stop

@section('content')
    <div class="text-left">
        <a href="{{ route('soal.create') }}" class="btn btn-success">
            Ajukan Soal
        </a>
    </div>
    <div>&nbsp;</div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Soal</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Soal</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($soal as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ substr($data->isi, 0,60) }}...</td>
                                        <td style="text-align:left;">
                                            <form action="{{ route('soal.destroy', $data->id) }}" method="POST">
                                                <a class="btn btn-info btn-sm" href="{{ route('soal.show',$data->id) }}">Show</a>
                                                <a class="btn btn-primary btn-sm" href="{{ route('soal.edit',$data->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            Lorem Ipsum Dolor
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {!! $soal->links() !!}

@endsection