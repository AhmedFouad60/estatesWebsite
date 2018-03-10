<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{url('Design/')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('Design/')}}/css/flexslider.css" rel="stylesheet" />
    <link href="{{url('Design/')}}/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('Design/')}}/css/font-awesome.min.css">
    <script src="{{url('Design/')}}/js/jquery.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>


    <title>

        موقع عقارات
        |

        @yield('title')
    </title>
    @yield('header')


</head>
<body id="app-layout" style="direction: rtl">

<div class="header">
    <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
        <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="{{url('/Design')}}/images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
                @if(Auth::guest())

                @else
                    <li class="current"><a href="{{url('/home')}}">الرئيسية</a></li>
                    <li><a href="about.html">من نحن</a></li>
                    <li><a href="services.html">خدماتنا</a></li>
                    <li><a href="contact.html">تواصل معنا</a></li>
                @endif

            <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                    <li><a href="{{ route('register') }}">تسجيل عضوية جديدة</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>



            <div class="clear"></div>
            </ul>
        </div>
    </div>
</div>

@yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
{!! Html::script('Design//js/jquery.min.js') !!}
{!! Html::script('Design/js/responsive-nav.js') !!}

<div class="footer">
    <div class="footer_bottom">
        <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
        <div class="copy">
            <p>Copyright &copy; 2015 Company Name. Design by </p>
        </div>
    </div>
</div>


@yield('footer')

</body>
</html>
