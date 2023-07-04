<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل مدیریت</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}"/>


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>


<div class="panel_admin container-fluid">
    <div class="page_sidebar">
        <span class="fa fa-bars" id="sidebarToggle"></span>
        <ul id="sidebar_menu">
            <li>
                <a>
                    <span class="fa fa-shopping-cart"></span>
                    <span class="sidebar_menu_text">محصولات</span>
                    <span class="fa fa-angle-left" ></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت محصولات</a>
                    <a href="">افزودن محصول</a>
                    <a href="">مدیریت دسته ها</a>
                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-sliders"></span>
                    <span  class="sidebar_menu_text">اسلایدر</span>
                    <span class="fa fa-angle-left" ></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر جدید</a>
                </div>
            </li>
        </ul>

    </div>
    <div class="page_content">sdasda</div>

</div>

<div id="app"></div>

<script type="text/javascript" src="{{asset('js/code.jquery.com_jquery-3.7.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin.js')}}"></script>


</body>
</html>
