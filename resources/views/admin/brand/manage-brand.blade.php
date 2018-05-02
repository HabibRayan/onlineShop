@extends('admin.master')

@section('title')
    manage-brand
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
                            <th>Brand Id</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($allBrands as $allBrand)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$allBrand->id}}</td>
                                <td>{{$allBrand->brand_name}}</td>
                                <td>{{$allBrand->brand_description}}</td>
                                <td >{{$allBrand->publication_status ==1 ? "Published" :"Unpublished" }}</td>
                                <td >
                                    @if($allBrand->publication_status ==1 )
                                        <a href="{{url('/unpublished-brand/'.$allBrand->id)}}" class="btn btn-success btn-xs" title="published brand">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/published-brand/'.$allBrand->id)}}" class="btn btn-warning btn-xs" title="Unpublished brand">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/edit-brand/'.$allBrand->id)}}" class="btn btn-primary btn-xs" title="edit brand">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{url('/delete-brand/'.$allBrand->id)}}" class="btn btn-danger btn-xs" title="delete brand" onclick="return confirm('Are you sure to delete this');">
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