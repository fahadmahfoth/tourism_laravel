@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           
            <!--Grid row-->
<div class="row">

    <!--Grid column-->
    <div class="col-md-6 mb-4">
  
      <!-- Card -->
      <div class="card gradient-card">
  
          <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">
  
            <!-- Content -->
            <a href="/places">
              <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                <div class="first-content align-self-center p-3">
                  <h3 class="card-title">الاماكن</h3>
                </div>
                <div class="second-content align-self-center mx-auto text-center">
                  <i class="fas fa-location-arrow fa-3x"></i>
                  
                </div>
              </div>
            </a>
  
          </div>
  
          <!-- Data -->
          <div class="third-content ml-auto mr-4 mb-2">
            <p class="text-uppercase text-muted">العدد</p>
          <h4 class="font-weight-bold float-right">{{ $place_count }}</h4>
          </div>
  
          <!-- Content -->
         
  
      </div>
      <!-- Card -->
  
    </div>
    <!--Grid column-->
  
    <!--Grid column-->
    <div class="col-md-6 mb-4">
  
      <!-- Card -->
      <div class="card gradient-card">
  
          <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
  
            <!-- Content -->
            <a href="/categoreis">
              <div class="text-white d-flex h-100 mask purple-gradient-rgba">
                <div class="first-content align-self-center p-3">
                  <h3 class="card-title">الاقسام او الانواع</h3>
                </div>
                <div class="second-content  align-self-center mx-auto text-center">
                    <i class="fas fa-building fa-2x"></i>
                    <i class="fas fa-utensils fa-2x"></i>
                    <i class="fas fa-mosque fa-2x"></i>
                </div>
              </div>
            </a>
  
          </div>
  
          <!-- Data -->
          <div class="third-content  ml-auto mr-4 mb-2">
            <p class="text-uppercase text-muted">العدد</p>
          <h4 class="font-weight-bold float-right">{{ $categoreis_count }}</h4>
          </div>
  
        
      </div>
      <!-- Card -->
  
    </div>
    <!--Grid column-->
  
    <!--Grid column-->
    <div class="col-md-6 mb-4">
  
      <!-- Card -->
      <div class="card gradient-card">
  
          <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
  
            <!-- Content -->
            <a href="/users">
              <div class="text-white d-flex h-100 mask peach-gradient-rgba">
                <div class="first-content align-self-center p-3">
                  <h3 class="card-title">المستخدمين</h3>
                 
                </div>
                <div class="second-content  align-self-center mx-auto text-center">
                  <i class="fas fa-users fa-3x"></i>
                  
                </div>
              </div>
            </a>
  
          </div>
  
          <!-- Data -->
          <div class="third-content  ml-auto mr-4 mb-2">
            <p class="text-uppercase text-muted">العدد</p>
          <h4 class="font-weight-bold float-right">{{ $users_count }}</h4>
          </div>
  
          <!-- Content -->
        
      </div>
      <!-- Card -->
  
    </div>
    <!--Grid column-->
  
    <!--Grid column-->
    <div class="col-md-6 mb-4">
  
      <!-- Card -->
      <div class="card gradient-card">
  
          <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
  
            <!-- Content -->
            <a href="/suggests">
              <div class="text-white d-flex h-100 mask aqua-gradient-rgba">
                <div class="first-content align-self-center p-3">
                  <h3 class="card-title">الملاحظات والمشاكل</h3>
                  
                </div>
                <div class="second-content  align-self-center mx-auto text-center">
                  <i class="fas fa-chart-line fa-3x"></i>
                </div>
              </div>
            </a>
  
          </div>
  
          <!-- Data -->
          <div class="third-content  ml-auto mr-4 mb-2">
            <p class="text-uppercase text-muted">العدد</p>
            <h4 class="font-weight-bold float-right">{{$suggests_count}}</h4>
          </div>
  
          <!-- Content -->
         
  
      </div>
      <!-- Card -->
  
    </div>
    <!--Grid column-->
  
  </div>
  <!--Grid row-->
        </div>
    </div>
</div>
@endsection
