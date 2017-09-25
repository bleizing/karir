
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
			<li><a href="#"> Profil Perusahaan </a> </li> <!-- buat CRUD profil perusahaan hanya untuk perusahaan yg login -->	
			<li><a href="#"> Data Pelamar </a> </li> <!-- Hanya untuk Read pelamar berdasarkan lowongan dari perusahaan -->
			<li><a href="#"> Buat Lowongan </a> </li> <!-- buat CRUD Lowongan -->				
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
