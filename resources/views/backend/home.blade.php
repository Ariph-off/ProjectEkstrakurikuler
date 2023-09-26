@extends('backend/panel')

@section('content')
<!-- Main content -->
<br>
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon btn btn-outline-secondary elevation-1"><a href="{{route ('ekstra.index') }}"><i class="fas fa-ranking-star"></i></a></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Ekstra</span>
                        <span class="info-box-number">
                            <h3></h3>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon btn btn-outline-secondary elevation-1"><a href="{{route ('pembina.index') }}"><i class="fas fa-users-rectangle"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Data Pembina</span>
                        <span class="info-box-number">
                            <h3></h3>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon btn btn-outline-secondary elevation-1"><a href="{{route ('pelatih.index') }}"><i class="fas fa-users-rays"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Data Pelatih</span>
                        <span class="info-box-number">
                            <h3></h3>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon btn btn-outline-secondary elevation-1"><a href="{{route ('siswa.index') }}"><i class="fas fa-users-line"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Data Siswa</span>
                        <span class="info-box-number">
                            <h3></h3>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon btn btn-outline-secondary elevation-1"><a href="{{route ('kategori.index') }}"><i class="fas fa-users-line"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Data Kategori</span>
                        <span class="info-box-number">
                            <h3></h3>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
</section>

  @endsection
