  <div class="container">
		      <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php if( $item == 0) echo " active"; ?>"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item <?php if( $item == 1) echo " active"; ?>"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item <?php if( $item == 2) echo " active"; ?>"><a href="services.php" class="nav-link">Serviços</a></li>
	          <li class="nav-item <?php if( $item == 3) echo " active"; ?>"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item <?php if( $item == 4) echo " active"; ?>"><a href="about.php" class="nav-link">Sobre</a></li>
	          <li class="nav-item <?php if( $item == 5) echo " active"; ?>"><a href="contact.php" class="nav-link">Contato</a></li>
	        </ul>
	      </div>
		  </div>