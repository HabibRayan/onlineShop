@extends('admin.master')

@section('title')
    manage-product
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

                        <tr>
                            <th>Product Id</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{$product->category_name}}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{{$product->brand_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->product_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Code</th>
                            <td>{{$product->product_code}}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>TK.{{$product->product_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Quantity</th>
                            <td>{{$product->product_quantity}}</td>
                        </tr>
                        <tr>
                            <th>Product Short Description</th>
                            <td>{{$product->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Product Long Description</th>
                            <td>{{$product->long_description}}</td>
                        </tr>
                        <tr>
                            <th>Product Publication Status</th>
                            <td>{{$product->publication_status}}</td>
                        </tr>

                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

@endsection