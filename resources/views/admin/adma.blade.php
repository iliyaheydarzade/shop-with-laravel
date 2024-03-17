@extends('admin.adhome');
@section("cont")
<form action="addma" method="post" enctype="multipart/form-data">
    @csrf
<input type="text" name="name" placeholder="نام محصول">
<input type="number" name="pr" placeholder="قیمت محصول">
<select name="cat">
    <option value="1">زنانه</option>
    <option value="2">بچگانه</option>
    <option value="3">مردانه</option>
</select>
<select name="pl">
    <option value="1">جدیدترین محصولات</option>
    <option value="2">ارسالتو رایگان کن!</option>
    <option value="3">فروش ویژه</option>
</select>
<label for="file">عکس را انتخاب کنید</label>
<input type="file" name="file" >
<input type="submit" value="ثبت">
</form>
@endsection