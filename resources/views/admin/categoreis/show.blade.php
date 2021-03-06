@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div dir="rtl" style="text-align: right;"  class="col">
                    <h1 dir="rtl">{{$category->name}}</h1>

                    <a href="/categoreis/{{$category->id}}/edit" class="btn btn-primary">تعديل</a>
                    {!! Form::open(['action' => ['Admin\PlaceCategoryAdminController@destroy', $category->id], 'method' =>
                    'POST']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('حذف', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}

                    <br>

                    <div dir="rtl" style="text-align: right" class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">الصورة</th>
                                    <th scope="col">الايقونة</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>

                                        <img src="{{$category->image}}" alt="{{$category->name}}" class="img-thumbnail" height="50px" width="50px">
                                            {{-- {{ $category->image }} --}}
    
                                        </td>
    
                                        <td>
                                            <img src="{{$category->icon}}" alt="{{$category->name}}" class="img-thumbnail" height="50px" width="50px">
                                            {{-- {{ $category->image }} --}}
    
                                        </td>
                                    
                                    </tr>
                            </tbody>
    
                        </table>
                    </div>
                    <br>

<hr>
<br>
                  <h1 dir="rtl">الاماكن في هذا القسم</h1>
                    <div dir="rtl" style="text-align: right" class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">التفاصيل</th>
                                </tr>
                            </thead>
                            <tbody>
                                

                                    @foreach ($category->places as $item)
                                    <tr>
                                    <td>
                                        {{ $item->name }}

                                    </td>

                                    <td>
                                        <a href="/places/{{ $item->id }}" class="btn btn-warning">اضغط</a>

                                    </td>

                                </tr>
                                    @endforeach
                                  
                                    
                                    
                            </tbody>
    
                        </table>
                    </div>
                   
                </div>
                
                <br>
            


            </div>
        </div>
    </div>
@endsection
