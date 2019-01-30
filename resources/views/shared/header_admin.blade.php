<!-- Header -->
<nav class="navbar navbar-static-top navbar navbar-inverse" style="background-color: #000000;">
  <div class="container-fluid">
  	<!-- Brand and toggle get grouped for better mobile display can be inside or outside of button -->
      <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#main_menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
          	<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">part-buddy <strong>ADMIN</strong></a>
  	  </div><!--navbar-header-->

<!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main_menu">
      	<ul class="nav navbar-nav">

        <li class="active"><a href="{{ url('/') }}">App Home</a></li>
        <li class="active"><a href="{{ url('admin/users') }}">Users</a></li>
   	    <li class="active"><a href="{{ url('admin/types') }}">Types</a></li>
  	    </ul>

      @include('shared.user_actions')

      </div><!--collapse navebar-->
  </div><!--container-fluid-->
</nav>

<!-- End of Header -->