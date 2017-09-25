
<nav class="navbar navbar-costume">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		<?php 
			$nama = $_SESSION['username'];
		?>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li><a href="#"> Home </a> </li>
			<li><a href="#"> Article </a> </li> <!-- buat CRUD Artikel -->
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Career Center <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Job Vacancies</a></li><!-- buat CRUD lowongan pekerjaan -->
					<li><a href="#">Seminar Career Davelopment</a></li><!-- buat CRUD Seminar -->
					<li><a href="#">Job Fair/Campus Hiring </a></li><!-- buat CRUD Job Fair -->
				</ul>
			</li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Alumni Center <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#"> Tracer Study </a> </li>  <!-- buat CRUD Tracer Study -->
					<li><a href="#"> Alumni Testimony </a> </li>  <!-- buat CRUD Alumni Testimony -->
					<li><a href="#"> Events Alumni Center </a> </li> <!-- buat CRUD event -->
				</ul>
			</li>			
			<li><a href="#"> About Us </a> </li> <!-- buat CRUD About Us-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
