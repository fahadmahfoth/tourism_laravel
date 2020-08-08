

@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div style="align-items: center" class="col-md-10">
            


@if(Session::has('flash_message'))
<div class="container">      
    <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
    </div>
</div>
@endif

<div class="col-lg-12 col-lg-offset-1">
  {{-- <h1><i class="fa fa-users"></i> User Administration <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a> --}}
  {{-- <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1> --}}
 
  <div  dir="rtl" style="text-align: right"class="table-responsive">
      <table class="table table-bordered table-striped">
        

          <thead>
              <tr>
                  <th>الاسم</th>
                  <th>البريد الاكتروني</th>
                  <th>تاريخ الاضافة</th>
                  <th>خيارات</th>
                  <th>النفوذ</th>
              </tr>
          </thead>

          <tbody>
              @foreach ($users as $user)
              <tr>

                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                  {{-- <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>Retrieve array of roles associated to a user and convert to string --}}

                  <td>
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                  {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {!! Form::close() !!}

                  </td>
                  <td>{{ $user->getRoleNames() }}</td>
              </tr>
              @endforeach
          </tbody>

      </table>
  </div>

  <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

</div>







{{ $users ?? ''->links() }}


</div>

</div>
</div>

@endsection


















