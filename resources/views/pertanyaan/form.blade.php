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
                <h3 class="card-title">New Pertanyaan</h3>

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
                <form action="/pertanyaan" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Judul">
                    </div>
                    <div class="form-group">
                        <label for="isi_pertanyaan">Isi Pertanyaan</label>
                        <input type="text" class="form-control" id="isi_pertanyaan" name="isi_pertanyaan"
                            placeholder="Isi Pertanyaan">
                    </div>
                    <div class="form-group">
                        <label for="date_created">Date Created</label>
                        <input type="date" class="form-control" id="date_created" name="date_created">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection