 @extends('admin.layouts.main')

 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
             <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-primary">Add</a>
           </div>
         </div>
         <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th class="text-center">ID</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Role</th>
@auth
  @if(Auth::user()->role_id === 1 OR Auth::user()->role_id === 2)
                      <th colspan="3" class="text-center">Actions</th>
  @endif
@endauth
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td class="text-center">{{$user->id}}</td>
                      <td class="text-center">{{$user->name}}</td>
                      <td class="text-center">{{$user->email}}</td>
                      <td class="text-center">{{$user->role_id}}</td>
@auth
  @if(Auth::user()->role_id === 1 OR Auth::user()->role_id === 2)
                      <td class="text-center"><a href="{{ route('admin.user.show', $user->id) }}"><i class="far fa-eye"></i></a></td>
                      <td class="text-center"><a href="{{ route('admin.user.edit', $user->id) }}"  class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
  @endif
@endauth

@auth
  @if(Auth::user()->role_id === 1)
<span><td><form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
  @csrf
  @method('DELETE')
                        
<button type="submit" class="text-danger border-0 bg-transparent" ><i class="fas fa-trash"></i></button>
                      </form></td></span>
  @endif
@endauth         
                      
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


  @endsection