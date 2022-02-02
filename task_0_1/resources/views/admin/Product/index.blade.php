 @extends('admin.layouts.main')

 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
        <div class="row">
           <div class="col-1 mb-3">
             <a href="{{ route('admin.product.create') }}" class="btn btn-block btn-primary">Add</a>
           </div>
         </div>
         <div class="row">
          <div class="col-9">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>IMG</th>
@auth

@if(Auth::user()->role_id === 1 OR Auth::user()->role_id === 2)
                      <th colspan="3" class="text-center">Actions</th>

@endif

@endauth
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                    <tr>
                      <td>{{$product->id}}</td>
                      <td>{{$product->title}}</td>
                      <td>{!! $product->description !!}</td>
                      <td><img src="{{ url('storage/'. $product->image) }}" style="width: 30%;" alt="preview_image" class="w-10"></td>
@auth

@if(Auth::user()->role_id === 1 OR Auth::user()->role_id === 2)

 <td class="text-right"><a href="{{ route('admin.product.show', $product->id) }}"><i class="far fa-eye"></i></a></td>
                      <td class="text-center"><a href="{{ route('admin.product.edit', $product->id) }}"  class="text-success"><i class="fas fa-pencil-alt"></i></a></td>

@endif

@endauth
                     
 
@auth

@if(Auth::user()->role_id === 1)

<span><td><form action="{{ route('admin.product.delete', $product->id) }}" method="POST">
  @csrf
  @method('DELETE')

<button type="submit" class="text-danger border-0 bg-transparent" ><i class="fas fa-trash"></i></button>

@endif

@endauth
                  </form></td></span>
                    
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- ./col -->


        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content --> 
  </div>
  <section>

@auth
  @if(Auth::user()->role_id === 2)
    <div class="mx-auto d-flex justify-content-center">
                 {{$products->links()}}
    </div>
  @endif
@endauth 

  </section>


          
    


 

  @endsection
