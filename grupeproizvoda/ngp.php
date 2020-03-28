<!DOCTYPE html>
<html>
<head>
  <title>PHP CRUD</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link collapse-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sifarnici
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="gp.php">Grupe proizvoda</a>
                  <a class="dropdown-item" href="#">Brendovi</a>
                </div>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">Proizvodi</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
  </header>

<?php require_once '../db/actiongp.php';  //dodal ?>  


    <form class="container" action="../db/actiongp.php" method="POST">	
	<br>
	<div class="row">
        <div class="col-md-12">
		<div class="row">
		<div class="col-md-3">
            <input type="text" class="form-control " id="naziv" name="naziv" placeholder="Naziv"   value="<?php if($id){ echo $name; } ?>">
		<?php 
	if (isset($_SESSION['message'])):
	?>

	<div class="col-md-12 ">
	<p class="redcolor">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
		</p>
	</div>
	<?php endif ?>
	</div>

	
	 <div class="col-auto col-md-2">
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" id="status" name="status" value="1" <?php if($id && $status==1){ echo 'checked';  }   ?>>
            <label class="form-check-label" for="status">Status</label>
          </div>
        </div>
			<input type="hidden" name="id" value="<?php if($id){ echo $id;  }?>">
			 <div class="col-auto col-md-3">
           <button type="submit" class="btn btn-primary" <?php if ($update == true): ?> name="update"  <?php else: ?>  name="sacuvaj" <?php endif; ?>  >Sacuvaj</button>
        </div>
			
			
		</div>
        </div>
		
	
       
		</div>
       
    	
    	    	
    	</form>



<?php include '../templates/footer.php'; ?>



