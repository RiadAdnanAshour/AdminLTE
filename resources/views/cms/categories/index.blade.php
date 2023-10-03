@extends('cms.parent')



@section('title','categories')
@section('page-big-title','categories')
@section('page-main-title','categories')
@section('page-sub-title','categories')
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
                                    <th>Description</th>
                                    <th>status</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>sataing</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category )
                                <tr>

                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>
    <span class="badge @if($category->status) bg-success @else bg-danger @endif">
      {{ $category->visibility }}
    </span>
                                    </td>
                                    <td>{{$category->created_at}}</td>
                                    <td>{{$category->updated_at}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                       <form method="post" action="{{route('categories.destroy',$category->id)}}">
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
