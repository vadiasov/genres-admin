@extends('layouts.admin.main')

@section('title', 'Genres')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet"
          href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Create Genre</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin/genres') }}"><i class="fa fa-dashboard"></i> Genres</a></li>
                <li><a href="#">Edit Genre</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border" style="margin-bottom: 10px">
                            <h3 class="box-title">Edit Genre</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            @foreach ($errors->all() as $error)
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6 alert alert-danger">{{ $error }}</div>
                                </div>
                            @endforeach

                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Name (only letters, digits, space)"
                                               value="{{ old('name') ? old('name') : $genre->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Slug</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="slug"
                                               placeholder="Slug (only letters, digits)" value="{{ old('slug') ? old('slug') : $genre->slug }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tag</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tag"
                                               placeholder="Tag (only letters, digits, defis, apostrophe, space)"
                                               value="{{ old('tag') ? old('tag') : $genre->tag }}">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('admin/genres') }}" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection