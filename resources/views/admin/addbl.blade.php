@extends('admin.adhome');
@section("cont")
<form action="addbl" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="نام مقاله"><br>
    <textarea name="text" cols="30" rows="10" placeholder="متن مقاله"></textarea><br>
    <label for="file">عکس را انتخاب کنید</label>
    <input type="file" name="filee" ><br>
    <input type="submit" value="ثبت">
    </form>
@endsection