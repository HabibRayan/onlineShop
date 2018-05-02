@extends('admin.master')

@section('title')
    add-category
    @endsection

@section('content')
   <hr/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">

               <h1 style="color:rgba(1,0,250,0.78) "   >{{ Session::get('message') }}</h1><br>

                <form action="{{url('/new-category')}}" method="post" class="form-horizontal" >
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-3"> Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="category_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3"> Category Description</label>
                        <div class="col-sm-9">
                            <textarea  name="category_description" class="form-control" cols="22" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3"> Publication Status</label>
                        <div class="col-sm-9">
                            <select name="publication_status" class="form-control">
                                <option>---Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection