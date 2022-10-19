@extends('layouts.master')
@section('title','Add Post')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Add Post</h4>
        </div>

        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error )
                <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{url('admin/add-post')}}" method="POST">
                @csrf
                <div class=mb-3>
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($category as $cateitem)
                        <option value="{{$cateitem->id}}">{{$cateitem->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=mb-3>
                    <label>Post Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class=mb-3>
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" />
                </div>
                <div class=mb-3>
                    <label>Description</label>
                    <textarea type="text" name="description" id="your_summernote" rows="5" class="form-control"></textarea>
                </div>
                <div class=mb-3>
                    <label>Youtube Iframe Link</label>
                    <input type="text" name="yt_iframe" class="form-control" />
                </div>

                <h4>SEO Tags</h4>
                <div class=mb-3>
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" />
                </div>
                <div class=mb-3>
                    <label>Meta Description</label>
                    <textarea name="meta_description" rows="5" class="form-control"></textarea>
                </div>
                <div class=mb-3>
                    <label>Meta Keyword</label>
                    <input name="meta_keyword" class="form-control" />
                </div>
                <h4>Status </h4>
                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status" />
                    </div>
                    <div class=col-mb-6>
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>

                </div>

            </form>
        </div>


    </div>
</div>




@endsection