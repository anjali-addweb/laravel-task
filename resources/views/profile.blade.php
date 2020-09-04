<!DOCTYPE HTML>
<html>

<!-- Mirrored from extracoding.com/demo/html/adminise/basicform.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Admin</title>
<!--// Stylesheets //-->
<link href="{{asset('css/A.style.css%2bbootstrap.css%2cMcc.0ONHoLZfWm.css.pagespeed.cf.2IS1LTyY4Z.css')}}" rel="stylesheet" media="screen"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<!--// Javascript //-->
<script type="text/javascript" src="{{asset('js/jquery.js.pagespeed.jm.ZzSiN_5Whq.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js%2bjquery.accordion.js%2bjquery.custom-scrollbar.min.js%2bicheck.min.js%2bselectnav.min.js%2bfunctions.js.pagespeed.jc.E43GhJAKRQ.js')}}"></script><script>eval(mod_pagespeed_4faLXq7bXy);</script>
<script>eval(mod_pagespeed_5xamDk3U$P);</script>
<script>eval(mod_pagespeed_2mVYeL32K_);</script>
<script>eval(mod_pagespeed_THTTwgJFDR);</script>
<script>eval(mod_pagespeed_HZwFFniCI0);</script>
<script>eval(mod_pagespeed_eqGDkjqIuR);</script>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $("#buttoni").click(function(){
              $("#view").hide();  
            $("#insert").toggle();
        });
            $("#buttonv").click(function(){
             $("#insert").hide();   
            $("#view").toggle();
        });
});
    function insertdata() {
            $.ajax({
               type:'GET',
               url:'getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $(".contents").html(data);
               }
            });
         }
         function viewdata() {

            $.ajax({
               type:'GET',
               url:'viewmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $(".contents").html(data);
               }
            });
         }
</script>
</head>

<body>
<!-- Wrapper Start -->
<div class="wrapper">
    <div class="structure-row">
        <!-- Sidebar Start -->
       <aside class="sidebar">
            <div class="sidebar-in">
                <!-- Sidebar Header Start -->
                <header>
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="dashboard1.html"><img src="assets/images/xlogo.png.pagespeed.ic.Foz7Hxw-1_.png" alt="Adminise"/></a>
                    </div>
                    <!-- Logo End -->
                    <!-- Toggle Button Start -->
                    <a href="#" class="togglemenu">&nbsp;</a>
                    <!-- Toggle Button End -->
                    <div class="clearfix"></div>
                </header>
                <!-- Sidebar Header End -->
                <!-- Sidebar Navigation Start -->
                <nav class="navigation">
                    <ul class="navi-acc" id="nav2">
                        <li>
                        <a href="dashboard2.html" class="dashboard">Dashboard</a>
                        </li>
                        <li>
                             <button class="forms" onclick="insertdata();" id="buttoni">Insert Data</button>
                            
                        </li>
                        <li>
                        <button class="forms" onclick="viewdata();" id="buttonv">View Data</button>
                           
                        </li>
                        
                    </ul>
                </nav>
                <!-- Sidebar Navigation End -->
                <!-- Shadow Start -->
                <span class="shadows"></span>
                <!-- Shadow End -->
            </div>
        </aside>
         <!-- Sidebar End -->
        <!-- Right Section Start -->
        <div class="right-sec">
            <!-- Right Section Header Start -->
            <header>
              <nav class="topnav">
                    <ul id="nav1">
                       </li>
                        <li class="nav-item dropdown">
                                <div class=""  aria-labelledby="navbarDropdown">
                                    <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </nav>
                   <!-- Header Top Navigation End -->
                <div class="clearfix"></div>
            </header>
            <!-- Right Section Header End -->
            <!-- Content Section Start -->
            <div class="content-section">
                <div class="container-liquid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sec-box">
                                <a class="closethis">Close</a>
                                <header>
                                    <h2 class="heading">Add User</h2>
                                </header>
                                <div class="contents">
                                 
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Content Section End -->
        </div>
        <!-- Right Section End -->
    </div>
</div>
<!-- Wrapper End -->

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');ga('create','UA-42761673-1','extracoding.com');ga('send','pageview');</script>

</body>

<!-- Mirrored from extracoding.com/demo/html/adminise/basicform.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:20 GMT -->
</html>
