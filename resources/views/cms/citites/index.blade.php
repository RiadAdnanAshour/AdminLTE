@extends('cms.parent')



@section('title','')
@section('page-big-title','')
@section('page-main-title','')
@section('page-sub-title','')
@section('styles')
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>City</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
{{--                                    @foreach($ )--}}
{{--                                    <td>183</td>--}}
{{--                                    <td>John Doe</td>--}}
{{--                                    @endforeach--}}
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection


@section('script')
@endsection
