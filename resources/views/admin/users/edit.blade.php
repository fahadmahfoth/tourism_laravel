





@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div dir="rtl" style="text-align: right" class="card-header">تعديل مستخدم</div>

                

                <div dir="rtl" style="text-align: right" class="card-body">
                    <div class='col-lg-4 col-lg-offset-4'>

                        
                      
                        {{-- @include ('errors.list') --}}
                        {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }} {{-- Form model binding to automatically populate our fields with user data --}}

  <div class="form-group">
      {{ Form::label('name', 'الاسم') }}
      {{ Form::text('name', null, array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
      {{ Form::label('email', 'البريد الالكتروني') }}
      {{ Form::email('email', null, array('class' => 'form-control')) }}
  </div>





  <div class="form-group">
      {{ Form::label('password', 'كلمة السر') }}<br>
      {{ Form::password('password', array('class' => 'form-control')) }}

  </div>

  <div class="form-group">
      {{ Form::label('password', 'كلمة السر') }}<br>
      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

  </div>

  <div class="form-group">
    <label>الصلاحية والنفوذ</label>
    <select  style="height: 200px" multiple class="form-control" name="role[]" >
      @foreach ($role as $item)
      <option value="{{ $item->name }}">{{ $item->name }}</option>
          @endforeach
    </select>
  </div>
  
  

  {{ Form::submit('تحديث', array('class' => 'btn btn-success')) }}



  {{ Form::close() }}
                      
                      </div>
                      
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










