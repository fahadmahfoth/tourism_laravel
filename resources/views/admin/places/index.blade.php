@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">


                @if(Session::has('success'))
                <div dir="rtl" style="text-align: right" class="container">      
                    <div class="alert alert-success"><em> {!! session('success') !!}</em>
                    </div>
                </div>
                @endif

                <div dir="rtl" style="text-align: right;"  class="col">
                    <h1 dir="rtl">الاماكن</h1>
                    <a href="/places/create" class="btn btn-success">جديد</a>
                </div>
                
                <br>
                <div  dir="rtl" style="text-align: right" class="table-responsive">
                    <table dir="rtl" class="table table-bordered table-striped">

                      

                        <thead align="right" class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">الاسم</th>
                                <th scope="col">الهاتف</th>
                                <th scope="col">الحي</th>
                                <th scope="col">وقت الفتح</th>
                                <th scope="col">فتح التفاصيل</th>
                                


                            </tr>
                        </thead>
                        <tbody>

                            <tr>





                                @foreach ($places as $item)

                                    <th scope="row">{{ $item->id }}</th>
                                    <td>
                                        {{ $item->name }}

                                    </td>

                                    <td>
                                        {{ $item->phone_number }}

                                    </td>
                                    <td>
                                        {{ $item->city }}

                                    </td>
                                    <td>
                                        {{ $item->time_up }}

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
        </div>
    </div>


    <div class="container">
        {{ $places->links() }}
    </div>
@endsection
