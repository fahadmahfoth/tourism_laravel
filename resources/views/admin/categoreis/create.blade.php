@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div dir="rtl" style="text-align: right" class="card-header">اضافة نوع</div>

                

                <div dir="rtl" style="text-align: right" class="card-body">

                    <form action="/categoreis" method="post">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label>الاسم</label>
                            <input class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label>الصورة</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <div class="form-group">
                            <label>الايقونة</label>
                            <input type="file" class="form-control-file" name="icon">
                        </div>

                        <button type="submit" name="submit" class="btn btn-success">حفظ</button>
                    
                    </form>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
