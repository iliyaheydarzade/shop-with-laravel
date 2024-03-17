<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/adhome.css">
    <title>Document</title>
</head>
<body>
    <div class="flex">
        <div class="box">
            <h1 class="h1">پنل مدیریت</h1>
        </div>
        <div class="box adm">
            <h1 class="h2">
            @foreach ($names as $name )
                {{$name["name"]}}
            @endforeach
            </h1>
            <img src="/img/admin.jpg" alt="">
        </div>
    </div>
    <div class="flex">
        <div class="box2 bod">
         <div class="t">
            <h3> 
            @foreach ($names as $name )
                {{$name["name"]}}
            @endforeach
            </h3>
            <img src="/img/admin.jpg" alt="">
         </div>
         <h4>فهرست</h4>
         <ul class="ul">
            <li><a href="addma">افزودن محصول</a></li>
            <li><a href="addbl">افزودن مقاله</a></li>
            <li><a href="masage">پیام ها</a></li>
         </ul>
        </div>
        <div class="box2 boz">
            @yield("cont")
        </div>
    </div>
</body>
</html>