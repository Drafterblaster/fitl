<!-- Header -->
<nav class="navbar fixed-top navbar navbar-inverse" style="background-color: #000000;">
  <div class="container-fluid">
  	<!-- Brand and toggle get grouped for better mobile display can be inside or outside of button -->
    <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#main_menu" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
        	<span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

          </button>
                    <a class="navbar-brand" href="http://www.part-buddy.net" target="new">part-buddy</a>
	</div>

<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main_menu">
    	<ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('fillorders/create') }}">Place Order</a></li>
 	    <li class="active"><a href="{{ url('fillorders') }}">Open Orders</a></li>
 	    <li class="active"><a href="{{ url('contact') }}">Contact Us</a></li>
 	    <li class="active"><a href="{{ url('about') }}">About</a></li>
	    </ul>
	</div>
</nav>

<!-- End of Header -->