@extends('admin.master')

@section('title')
    add-brand
@endsection

@section('content')
    <hr/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">

                <h1 style="color:rgba(1,0,250,0.78) "   >{{ Session::get('message') }}</h1><br>

                <form action="{{url('/new-brand')}}" method="post" class="form-horizontal" >
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-3"> Brand Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="brand_name" class="form-control"/>
                            <span style="color: rgba(255,78,94,0.78)">{{$errors->has('brand_name') ? $errors->first('brand_name'):''}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3"> Brand Description</label>
                        <div class="col-sm-9">
                            <textarea  name="brand_description" class="form-control" cols="22" rows="10"></textarea>
                            <span style="color: rgba(255,33,119,0.78)">{{$errors->has('brand_description')? $errors->first('brand_description'):''}}
                                  </span>
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
                            {{$errors->has('publication_status')? $errors->first('publication_status'):''}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection