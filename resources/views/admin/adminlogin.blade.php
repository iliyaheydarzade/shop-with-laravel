<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/admin.css">
    <title>Document</title>
</head>
<body>
    
    <div class="con">
        <h1>پنل ادمین</h1>
    <form action="adlog" method="post">
        @csrf
      <input type="text" name="name"    placeholder="نام کاربری"><br>
      <input type="password" name="pas" placeholder="رمز عبور"><br>
      <input type="submit" value="ورود ادمین" class="adbtn">
    </form>
    @if (session("login") == "no")
        <p>رمز یا اسم غلط است</p>
    @endif
    </div>
</body>
</html>