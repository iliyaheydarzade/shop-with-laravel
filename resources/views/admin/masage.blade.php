@extends('admin.adhome');
@section("cont")
<div class="tab">
    <div class="item">نام نویسنده</div>
    <div class="item">متن پیام</div>
    <div class="item">حذف پیام</div>
</div>
<div class="sc">
@foreach ($f as $fs)
<div class="tabs">
    <div class="item1">{{$fs["name"]}}</div>
    <div class="item1">{{$fs["text"]}}</div>
    <div class="item1"><a href="del/{{$fs["id"]}}">حذف</a></div>
</div>
@endforeach
</div>
@endsection