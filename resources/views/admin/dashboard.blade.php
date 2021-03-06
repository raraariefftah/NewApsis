@extends('admin.dashboard_admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Content Header (Page header) -->
<section class="content">
    <div class="container-fluid">
        {{-- Row1 --}}
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h4><i class="nav-icon fas fa-hand-spock pr-1"></i>Halo Admin, Selamat Datang Di APSIS</h4>
                    </div>
                    <!-- form start -->
                    <div class="card-body">
                        {{-- ROW 1 --}}
                        <!-- Small boxes (Stat box) -->
                        <div class="row justify-content-center">
                            {{-- pendaftar hari ini --}}
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>60</h3>
                                        <p>Total User</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                </div>
                            </div>
                            {{-- total pendaftar --}}
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>60</h3>
                                        <p>Tata Usaha</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                </div>
                            </div>
                            {{-- Terverifikasi --}}
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>60</h3>
                                        <p>Admin</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-checkmark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ROw2 --}}
        <div class="row justify-content-center">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <div class="row mt-2 ">
                            <div class="col-sm-10">
                                <h4>Data Semua User</h4>
                            </div>
                        </div>
                    </div>
                    {{-- search --}}
                    <div class="card-tool">
                        <div class="row justify-content-end pt-3 pr-4">
                            <div class="input-group input-group-sm" style="width: 200px; right: 3px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form start -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5px">No</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th style="text-align: center"><i class="nav-icon fas fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <tr>
                                    <td>1.</td>
                                    <td>Rara Ariefftah</td>
                                    <td>Admin</td>
                                    <td>abc@gmail.com</td>
                                    {{-- <td>2020/2021</td> --}}
                                    <td style="text-align: center">                                       
                                        {{-- <a href="#" class="btn btn-warning mr-1" ><i class="nav-icon fas fa-edit " >Edit</i></a> --}}
                                        <a href="/admin/edit_data_user" class="btn btn-info"><i
                                                class="nav-icon fas fa-pencil-alt pr-1"></i>Edit</a>
                                        {{-- <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-check"></i></a> --}}
                                        <a href="#" class="btn btn-danger "><i
                                                class="nav-icon fas fa-trash pr-1 "></i>Hapus</a>
                                    </td>
                                </tr>                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
</section>


@endsection
