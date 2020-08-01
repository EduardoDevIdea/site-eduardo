@extends('home')

@section('title', 'Dashboard')

@if(session('store'))
    <script>
        window.alert("{{ session('store') }}");
    </script>
@endif

@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

@if(session('ErroUpdate'))
    <script>
        window.alert("{{ session('ErroUpdate') }}");
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

                    <div class="row my-3" style="background-color: black;">
                        <div class="col-lg-6  col-md-6 col-sm-12">
                            <img src="storage/{{ $logomarca->path }}" alt="" style="width: 400px; height: 150px;">
                        </div>
                    </div>

                    <form action="{{ route('logomarca.update', ['logomarca' => $logomarca->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Editar Logomarca</label>
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