





















@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div dir="rtl" style="text-align: right" class="card-header">اضافة مستخدم</div>

                

                <div dir="rtl" style="text-align: right" class="card-body">
                    <div class='col-lg-4 col-lg-offset-4'>

                        
                      
                        {{-- @include ('errors.list') --}}
                      
                        {{ Form::open(array('url' => 'users')) }}
                      
                        <div class="form-group">
                            {{ Form::label('name', 'الاسم') }}
                            {{ Form::text('name', '', array('class' => 'form-control')) }}
                        </div>
                      
                        <div class="form-group">
                            {{ Form::label('email', 'البريد الالكتروني') }}
                            {{ Form::email('email', '', array('class' => 'form-control')) }}
                        </div>
                      
                      
                      
                        <div class="form-group">
                            {{ Form::label('password', 'كلمة السر') }}<br>
                            {{ Form::password('password', array('class' => 'form-control')) }}
                      
                        </div>
                      
                        <div class="form-group">
                            {{ Form::label('password', 'تأكيد كلمة السر') }}<br>
                            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                      
                        </div>
                      
                        
                      
                        {{ Form::submit('اضافة', array('class' => 'btn btn-success')) }}
                      
                        {{ Form::close() }}
                      
                      </div>
                      
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










