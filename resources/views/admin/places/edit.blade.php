@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div dir="rtl" style="text-align: right" class="card-header">اضافة مكان</div>

                 {{--  for display the masseege error --}}

                {{-- @if(count($errors)>0)

                <ul class="navbar-nav mr-auto">

                @foreach( $errors->all() as $error )
                    <li class="nav-item active">
                    <h5>{{ $error }}</h5> 
                    </li>
                    
                    @endforeach

                </ul>
                <br>
                @endif --}}


                <div dir="rtl" style="text-align: right" class="card-body">

                    <form action="/update/place/{{$place->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>الاسم</label>
                            <input class="form-control" name="name" value="{{$place->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">اختر نوع المكان</label>
                            <select name="category_id" class="form-control" id="exampleSelect1">
                             @foreach ($categories as $item)
                                
                                
                                @if ($item->id == $place->category_id)
                                <option value="{{ $item->id}}" selected >{{ $item->name}} </option> 
                                @else
                                <option value="{{ $item->id}}">{{ $item->name}}</option>
                                @endif
                            
                                 
                             @endforeach
                            </select>
                          </div>

                        <div class="form-group">
                            <label>الصورة</label>
                            <input type="file" class="form-control-file" name="image" >
                        </div>

                        <div class="form-group">
                            <label>رقم الهاتف</label>
                            <input class="form-control" type="tel" name="phone_number" value="{{$place->phone_number}}">
                        </div>

                        <div class="form-group">
                            <div class="row"> 
                                <div  style="width: 200px ; padding: 20px">
                                    <label> الخريطة LNG</label>
                                    <input class="form-control" name="map_lng"  value="{{$place->map_lng}}">
                                </div>
                                
                                <div style="width: 200px ;  padding: 20px">
                                    <label> الخريطة LAT</label>
                                    <input class="form-control" name="map_lat"  value="{{$place->map_lat}}">
                                </div>

                            </div>
                            
                        </div>


                        <div class="form-group">
                            <label>الحي او المنطقة</label>
                            <input class="form-control" name="city" value="{{$place->city}}">
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
                            <input class="form-control" name="days" value="{{$place->days}}">
                        </div>


                        <div class="form-group">
                            <label for="exampleTextarea">تفاصيل</label>
                            <textarea class="form-control"  name="contente" id="exampleTextarea" rows="5">{{$place->contente}}</textarea>
                          </div>

                          



                        <button type="submit" name="submit" class="btn btn-success">تحديث</button>
                    
                    </form>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
