@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div dir="rtl" style="text-align: right" class="card-header">تعديل نوع</div>

                  {{--  for display the masseege error --}}

            
                  
                                  @if(count($errors)>0)
                  
                  
                                  <div dir="rtl" style="text-align: right" class="container">      
                                      <div class="alert alert-danger">
                  
                                          <ul style="right: 0" class="navbar-nav">
                  
                                              @foreach( $errors->all() as $error )
                                                  <li class="nav-item active">
                                                  <p>{{ $error }}</p> 
                                                  </li>
                                                  
                                                  @endforeach
                              
                                              </ul>
                                              
                                      </div>
                                  </div>
                  
                                  
                                  
                                 
                                  @endif
                  





                <div dir="rtl" style="text-align: right" class="card-body">

                    <form action="/categoreis/{{$category->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>الاسم</label>
                            <input class="form-control" name="name" value="{{$category->name}}">
                        </div>

                        <div class="form-group">
                            <label>الصورة</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>

                        <div class="form-group">
                            <label>الايقونة</label>
                            <input type="file" class="form-control-file" name="icon">
                        </div>

                        <button type="submit" name="submit" class="btn btn-success">تحديث</button>
                    
                    </form>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
