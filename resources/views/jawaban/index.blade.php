@extends('layout.master')

@section('title', 'Jawaban')

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

        <br>

        <div class="card col-6">
            <div class="card-header">

                <h2 class="card-title"><b>{{$pertanyaan[0]['title']}}</b>
                    <br>
                    <small>Date Created: {{ $jawaban->date_created }}</small>
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
                {{ $jawaban->isi_jawaban }}
                <br><br>
                <a class="btn btn-primary btn-sm" href="/jawaban" role="button">Lihat
                    Jawaban</a>
            </div>

            <!-- /.card-body -->
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection