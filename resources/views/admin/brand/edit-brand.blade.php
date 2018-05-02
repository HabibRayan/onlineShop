@extends('admin.master')

@section('title')
    edit brand
@endsection

@section('content')
    <hr/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">

                <h1 style="text-color:rgba(0,97,250,0.78)"; >{{ Session::get('message') }}</h1><br>

                <form name="editbrandForm" action="{{url('/update-brand')}}" method="post" class="form-horizontal" >
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-3"> Brand Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$brandById->brand_name}}" name="brand_name" class="form-control"/>
                            <input type="hidden" value="{{$brandById->id}}" name="brand_id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3"> Brand Description</label>
                        <div class="col-sm-9">
                            <textarea   name="brand_description" class="form-control" cols="22" rows="10">{{$brandById->brand_description}}</textarea>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Brand Info"/>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script>
        document.forms['editbrandForm'].elements['publication_status'].value ='{{$brandById->publication_status}}';
    </script>
@endsection