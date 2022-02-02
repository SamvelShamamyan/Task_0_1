 @extends('admin.layouts.main')

 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
               <li class="breadcrumb-item active"><a href="{{ route('admin.product.index') }}">Product</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="col-12">
          
            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group w-25">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Product Name">
                    @error('title')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="summernote">{{ old('description') }}</textarea>
                    @error('description')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="form-group w-25">
                    <label>Price</label>
                    <input type="text" name="price" value="{{ old('price') }}" class="form-control" placeholder="Product Price">
                    @error('price')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="form-group w-50">
                    <label for="exampleInputFile">Input Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">Choose image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    @error('image')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
          
                  <div class="form-group w-50">
                        <label>Choose Category</label>
                        <select class="form-control" name="category_id">
                          @foreach($categories as $category)
                          <option value="{{$category->id}}" 
                              {{ $category->id == old('category_id') ? 'selected' : '' }}>
                              {{$category->title}}</option>
                          @endforeach
                        </select>
                         @error('category_id')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                      </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary mb-3" value="Add">
                  </div>
            </form>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  @endsection