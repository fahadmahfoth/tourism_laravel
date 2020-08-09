@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div dir="rtl" style="text-align: right" class="card-header">اضافة مكان</div>

                   {{--  for display the masseege error --}}

                   @if(Session::has('success'))
<div dir="rtl" style="text-align: right" class="container">      
    <div class="alert alert-success"><em> {!! session('success') !!}</em>
    </div>
</div>
@endif

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

                    <form action="/places" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label>الاسم</label>
                            <input class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">اختر نوع المكان</label>
                            <select name="category_id" class="form-control" id="exampleSelect1">
                             @foreach ($categoreis as $item)

                            <option value="{{ $item->id}}">{{ $item->name}}</option>
                                 
                             @endforeach
                            </select>
                          </div>

                        <div class="form-group">
                            <label>الصورة</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>

                        <div class="form-group">
                            <label>رقم الهاتف</label>
                            <input class="form-control" type="tel" name="phone_number">
                        </div>

                        <div class="form-group">
                            <div class="row"> 
                                <div  style="width: 200px ; padding: 20px">
                                    <label> الخريطة LNG</label>
                                    <input class="form-control" name="map_lng">
                                </div>
                                
                                <div style="width: 200px ;  padding: 20px">
                                    <label> الخريطة LAT</label>
                                    <input class="form-control" name="map_lat">
                                </div>

                            </div>
                            
                        </div>


                        <div class="form-group">
                            <label>الحي او المنطقة</label>
                            <input class="form-control" name="city">
                        </div>

                        <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">وقت الفتح</label>
                            <div class="col-10">
                              <input class="form-control" type="time" name="time_up" id="example-time-input">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">وقت الاغلاق</label>
                            <div class="col-10">
                              <input class="form-control" type="time"  name="time_down" id="example-time-input">
                            </div>
                          </div>


                          <div class="form-group">
                            <label>ايام العمل</label>
                            <input class="form-control" name="days">
                        </div>


                        <div class="form-group">
                            <label for="exampleTextarea">تفاصيل</label>
                            <textarea class="form-control"  name="contente" id="exampleTextarea" rows="5"></textarea>
                          </div>

                          



                        <button type="submit" name="submit" class="btn btn-success">حفظ</button>
                    
                    </form>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
