@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2 pt-1"><img src="https://image.shutterstock.com/image-photo/motorcycle-rider-team-260nw-335081771.jpg" alt="" height="80" width="80" class="rounded-circle">
        </div>
        <div class="col-10 pt-1">
            <div class="d-flex justify-content-between align-items-basline">
                <h1>{{ $usr->name }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>100</strong>posts</div>
                <div class="pr-5"><strong>25k</strong>followers</div>
                <div class="pr-5"><strong>200</strong>following</div>
            </div>
            <div class="pt-2 ">{{ $usr->profile->title }}</div>
            <div class=" display: inline-block">{{ $usr->profile->description }}</div>
            <div><a href="#">{{ $usr->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="https://ihplb.b-cdn.net/wp-content/uploads/2014/06/bike-trip-ladakh.jpg" alt="" class="w-100 h-100"></div>
        <div class="col-4"><img src="https://crazywanderer.com/wp-content/uploads/2017/03/Top-5-Indian-Adventure-Travel-Destinations-Cover-page-770x515.jpg" alt="" class="w-100 h-100"></div>
        <div class="col-4"><img src="https://bikeindia.in/wp-content/uploads/2020/01/KTM-390-Adventure-Jump-1-Web.jpg" alt="" class="w-100 h-100"></div>
    </div>
</div>
@endsection