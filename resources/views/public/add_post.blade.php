@extends('public.base')

@section('title')
    Add new Post

@endsection()

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="city">city</label>
                    <input type="text" name="city" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="state">state</label>
                    <input type="text" name="state" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="category">category</label>
                    <input type="text" name="category" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea rows="7" name="description" class="form-control"></textarea>
                </div>

                
                <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="brand">brand</label>
                    <input type="text" name="brand" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="model">model</label>
                    <input type="text" name="model" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="contact">contact</label>
                    <input type="text" name="contact" class="form-control">
                </div>
                
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block">
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection