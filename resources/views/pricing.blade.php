@extends('layouts.public_master')
@section('title','Pricing')
@section('content')
<div class="container-fluid body_frame">
   <div class="row page_banner">
        <img src="{{asset('img/banner_img.jpg')}}" alt="">
        <div class="col-10 offset-1 banner_nav">
            <div class="banner_title">Pricing</div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float:right;">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
            </ol>
            </nav>
        </div>
   </div>
   <div class="container under_construction">
       <img src="{{asset('img/uc.gif')}}" alt="">
   </div>
</div>

   
@endsection