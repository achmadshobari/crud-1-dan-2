@extends('layout.master')

@section('title', 'Pertanyaan')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <h3 class="card-title"><a class="btn btn-primary" href="{{ url('/pertanyaan/create') }}" role="button">New
                Pertanyaan</a></h3>
        <br>
        <br>
        @foreach($pertanyaan as $key => $p)
        <div class="card col-6">
            <div class="card-header">

                <h2 class="card-title"><b>{{ $p->judul }}</b>
                    <br>
                    <small>Date Created: {{ $p->date_created }}</small>
                </h2>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                {{ $p->isi_pertanyaan }}
                <br><br>
                <a class="btn btn-primary btn-sm" href="/pertanyaan/{{$p->id}}" role="button">Detail Pertanyaan</a> |
                <a class="btn btn-warning btn-sm" href="/pertanyaan/{{$p->id}}/edit" role="button">Edit</a> |
                <form action="/pertanyaan/{{$p->id}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
                <!-- <a class="btn btn-primary btn-sm" href="/jawaban/{{$p->id}}" role="button">Lihat Jawaban</a> -->
            </div>

            <!-- /.card-body -->
        </div>
        @endforeach

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection