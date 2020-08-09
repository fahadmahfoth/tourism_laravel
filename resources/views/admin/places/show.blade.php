@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div dir="rtl" style="text-align: right;"  class="col">
                   <div class="row-sm">
                    <h1 dir="rtl">{{$place->name}}</h1>
                   <a href="/places/{{$place->id}}/edit" class="btn btn-primary">تعديل</a>
                   {!! Form::open(['action' => ['Admin\PlaceAdminController@destroy', $place->id], 'method' =>
                   'POST']) !!}
                   {{ Form::hidden('_method', 'DELETE') }}
                   {{ Form::submit('حذف', ['class' => 'btn btn-danger']) }}
                   {!! Form::close() !!}
                   
                   </div>
                    
                    <br>

                    <p>
                        {{ $place->contente }}
                    </p>
                    <br>
                    <div>
                        <h4>
                            ايام العمل
                        </h4>
                        <p>

                            {{ $place->days }}
                        </p>

                    </div>
                   
                    <p>
                        <img src="{{ $place->image }}"  height="300px" alt="">
                       
                    </p>


                    <div dir="rtl" style="text-align: right" class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">نوع المكان</th>
                                    <th scope="col">رقم الهاتف</th>
                                    <th scope="col">الحي او المنطقة</th>
                                    <th scope="col">وقت الفتح</th>
                                    <th scope="col">وقت الاغلاق</th>
                                    <th scope="col">خريطةLAT</th>
                                    <th scope="col">خريطةLNG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                            {{ $category->name }}
    
                                        </td>
    
                                        <td>
                                            {{ $place->phone_number }}
    
                                        </td>
                                        <td>
                                            {{ $place->city }}
    
                                        </td>

                                        <td>
                                            {{ $place->time_up }}
    
                                        </td>
                                        <td>
                                            {{ $place->time_down  }}
    
                                        </td>
                                        <td>
                                            {{ $place->map_lat  }}
    
                                        </td>
                                        <td>
                                            {{ $place->map_lng  }}
    
                                        </td>
                                    </tr>
                            </tbody>
    
                        </table>
                    </div>
                    <br>          
                </div>
                
                <br>
            


            </div>
        </div>
    </div>
@endsection
