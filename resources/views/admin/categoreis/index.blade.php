@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div dir="rtl" style="text-align: right;"  class="col">
                    <h1 dir="rtl">الانواع</h1>
                    <a href="/categoreis/create" class="btn btn-success">جديد</a>
                </div>
                
                <br>
                <div dir="rtl" style="text-align: right" class="table-responsive">
                    <table class="table table-bordered table-striped">

                      

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">الاسم</th>
                                <th scope="col">عدد الاماكن</th>
                                <th scope="col">التفاصيل</th>
                                
                                


                            </tr>
                        </thead>
                        <tbody>

                            <tr>





                                @foreach ($categoreis as $item)

                                    <th scope="row">{{ $item->id }}</th>
                                    <td>
                                        {{ $item->name }}

                                    </td>

                                    

                                    <td>
                                        {{ $item->places->count() }}

                                    </td>
                                   

                                    <td>
                                        <a href="/categoreis/{{ $item->id }}" class="btn btn-warning">اضغط</a>
                   

                                    </td>


                                </tr>

                                @endforeach




                           



                        </tbody>

                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection
