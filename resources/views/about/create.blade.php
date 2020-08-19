@extends('home')

@section('title', 'Dashboard')

@section('content')

 <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Sobre</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            <li class="breadcrumb-item active" aria-current="page">Sobre</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Form About -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- CARD -->
                <div class="card card-body">

                    <!-- FORM -->
                    <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal ">
                        @csrf

                        <div class="form-group">
                            <label for="bio">Texto</label>
                            <textarea name="bio" id="bio" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Imagem</label>
                            <input type="file" name="img" id="img" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Currículo</label>
                            <input type="file" name="curriculo" class="form-control" required>
                        </div>

                        <input type="submit" value="salvar" class="btn btn-primary">
                    </form>
                    <!-- END OF FORM -->

                </div>
                <!-- END OF CARD -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End About -->
    <!-- ============================================================== -->

@endsection