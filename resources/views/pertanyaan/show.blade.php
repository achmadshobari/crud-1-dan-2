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
        <div class="card col-6">
            <div class="card-header">
                <h2 class="card-title"><b>{{ $pertanyaan->judul }}</b>
                    <br>
                    <small>Date Created: {{ $pertanyaan->date_created }}</small>
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
                {{ $pertanyaan->isi_pertanyaan }}
                <br><br>
                <a class="btn btn-primary btn-sm" href="/jawaban/{{$pertanyaan->id}}" role="button">Lihat
                    Jawaban</a>
            </div>

            <!-- /.card-body -->
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection