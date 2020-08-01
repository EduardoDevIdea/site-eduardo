@extends('home')

@section('title', 'Dashboard')


@if(session('erroStore'))
    <script>
        window.alert("{{ session('erroStore') }}");
    </script>
@endif


@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Logomarca</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
    <!-- Form Logomarca -->
    <!-- ============================================================== -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class=" card card-body">
                    <form action="{{ route('logomarca.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Arquivo Logomarca</label>
                            <input type="file" name="logo" class="form-control" required>
                        </div>
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <!-- ============================================================== -->
    <!-- Form Logomarca -->
    <!-- ============================================================== -->

@endsection