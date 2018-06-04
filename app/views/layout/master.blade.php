<!DOCTYPE html>
<html>
<head>
	<title></title>

	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/bootstrap-theme.min.css')}}
	{{HTML::style('css/screen.css')}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="master">

<header class="navbar-inverse navbar-fixed-top navbar-static-top bs-docs-nav"  id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">{{Rtm::SiteName()}}</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="{{URL::to('/customers')}}">Customers</a>
        </li>
        
        <li class="">
          <a href="{{URL::to('/orders')}}">Orders</a>
        </li>
        <li>
          <a href="{{URL::to('/payment')}}">Payments</a>
        </li>
       


        <li>
          <a href="{{URL::to('/reps')}}">Sales Reps</a>
        </li>


      </ul>
      <ul class="nav navbar-nav navbar-right">

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Howdy {{@Auth::user()->firstname}}  {{@Auth::user()->lastname}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            
            <li><a href="{{URL::to('/admin/updateaccount')}}"><span class="glyphicon glyphicon-user"></span> Update Account</a></li>

             <li><a href="{{URL::to('/admin/updateaccountpassword')}}"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Change Password</a></li>


            <li class="divider"></li>
           
            <li><a href="{{URL::to('/logout')}}"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>

          </ul>
        </li>


      </ul>
    </nav>
  </div>
</header>


    <div class="container">
      <div class="row">

        <div class="col-md-3">
          
        @include('layout.sidenav')
        </div>

        
              

              <div class="col-md-9">
                     @yield('content')
              </div>


      </div>
    </div>


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{{HTML::script('js/bootstrap.min.js')}}

</body>
</html>