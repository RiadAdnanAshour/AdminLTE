@extends('cms.parent')



@section('title','cities')
@section('page-big-title','cities')
@section('page-main-title','cities')
@section('page-sub-title','cities')
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
                                    <th>Name</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>sataing</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cities as $city )
                                <tr>

                                        <td>{{$city->id}}</td>
                                        <td>{{$city->name}}</td>
                                        <td>{{$city->created_at}}</td>
                                        <td>{{$city->updated_at}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('cities.edit',$city->id)}}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                       <form method="post" action="{{route('cities.destroy',$city->id)}}">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="btn btn-danger">
                                               <i class="fas fa-trash"></i>
                                           </button>
                                       </form>

                                            </div>
                                        </td>

                                </tr>
                                @endforeach
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
