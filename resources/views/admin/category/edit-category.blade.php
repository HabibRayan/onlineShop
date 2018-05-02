@extends('admin.master')

@section('title')
    add-category
@endsection

@section('content')
    <hr/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">

                <h1 style="text-color:rgba(0,97,250,0.78)"; >{{ Session::get('message') }}</h1><br>

                <form name="editCategoryForm" action="{{url('/update-category')}}" method="post" class="form-horizontal" >
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-3"> Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$categoryById->category_name}}" name="category_name" class="form-control"/>
                            <input type="hidden" value="{{$categoryById->id}}" name="category_id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3"> Category Description</label>
                        <div class="col-sm-9">
                            <textarea   name="category_description" class="form-control" cols="22" rows="10">{{$categoryById->category_description}}</textarea>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category Info"/>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
<script>
     document.forms['editCategoryForm'].elements['publication_status'].value ='{{$categoryById->publication_status}}';
</script>
@endsection