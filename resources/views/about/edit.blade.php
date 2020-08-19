@extends('home')

@section('title', 'Dashboard - Sobre')

@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

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
                    <form action="{{ route('about.update', ['about' => $about->id]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal ">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="bio">Texto</label>
                            <textarea name="bio" id="bio" class="form-control" rows="5">{{ $about->bio }}</textarea>
                        </div>

                        <div class="row">
                            <img src="/storage/{{ $about->img }}" alt="Imagem Eduardo" style="width: 200px; height: 120px; margin-left: 15px;">
                        </div>

                        <div class="form-group">
                            <label for="img">Imagem</label>
                            <input type="file" name="img" id="img" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Currículo</label>
                            <input type="file" name="curriculo" class="form-control">
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