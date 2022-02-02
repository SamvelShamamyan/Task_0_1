 @extends('admin.layouts.main')

 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
               <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
              <li class="breadcrumb-item active">{{$user->name}}</li>
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
          
            <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="w-25">
              @csrf
              @method('PATCH')
              <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Categories Name">
                    @error('name')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="New Email">
                    @error('email')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" value="{{ old('password') }}" class="form-control" placeholder="Create New Password">
                    @error('password')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="form-group w-50">
                        <label>Choose Role</label>
                        <select class="form-control" name="role_id">
                          @foreach($roles as $role)
                          <option value="{{$role->id}}" 
                              {{ $role->id == old('role_id') ? 'selected' : '' }}>
                              {{$role->name}}</option>
                          @endforeach
                        </select>
                        @error('role_id')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                      </div>
                  <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                  <input type="submit" class="btn btn-primary" value="Add">
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