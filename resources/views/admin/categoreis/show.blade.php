@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div dir="rtl" style="text-align: right;"  class="col">
                    <h1 dir="rtl">{{$category->name}}</h1>

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
                                            {{ $category->image }}
    
                                        </td>
    
                                        <td>
                                            {{ $category->image }}
    
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
