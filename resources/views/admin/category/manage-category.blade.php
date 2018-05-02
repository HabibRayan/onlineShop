@extends('admin.master')

@section('title')
    manage-category
@endsection

@section('content')


    <div class="row">
        <div class="col-lg-12">
            @if($message = Session::get('message'))
            <h1 class="page-header">{{$message}}</h1>
                @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($allCategories as $allCategory)
                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                            <td>{{$allCategory->id}}</td>
                            <td>{{$allCategory->category_name}}</td>
                            <td>{{$allCategory->category_description}}</td>
                            <td >{{$allCategory->publication_status ==1 ? "Published" :"Unpublished" }}</td>
                            <td >
                                @if($allCategory->publication_status ==1 )
                                <a href="{{url('/unpublished-category/'.$allCategory->id)}}" class="btn btn-success btn-xs" title="published category">
                                  <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                 @else
                                    <a href="{{url('/published-category/'.$allCategory->id)}}" class="btn btn-warning btn-xs" title="Unpublished category">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                    @endif
                                 <a href="{{url('/edit-category/'.$allCategory->id)}}" class="btn btn-primary btn-xs" title="edit category">
                                  <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                   <a href="{{url('/delete-category/'.$allCategory->id)}}" class="btn btn-danger btn-xs" title="delete category" onclick="return confirm('Are you sure to delete this');">
                                  <span class="glyphicon glyphicon-trash"></span>
                                </a>

                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

@endsection