@extends('layouts.default')

@section('content')    
    <section>
        <div class="container">
            <h2 class="text-center mt-3" style="margin-bottom: 2cm;">Input Vaccine</h2>
            <div class="row">
            <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center" style="">
                    <div class="col-lg-12 col-lg-offset-12 ">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="deskripsi"><b>Vaccine Name</b></label>
                                    <input required type="text" name="nama" id="" class="form-control">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Price</b></label>
                                    <input class="form-control" name="price" id="" class="form-control">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Description</b></label>
                                    <textarea required class="form-control" name="description" id="" rows="3"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group mt-2">
                                    <h6 ><b>Image</b></h6>
                 
                                <div class="col-md-12">
          
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                </div>

                                <div class="form-group" style="margin-top: 30px; float:left">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection