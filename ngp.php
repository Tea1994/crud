
<?php include 'templates/header.php'; ?>

<?php require_once 'actiongp.php';  //dodal ?>  


<form class="container" action="actiongp.php" method="POST">	
    <div class="col-auto pb-2 pt-2">
        <input type="text" class="form-control col-sm-3" id="naziv" name="naziv" placeholder="Naziv"   value="<?php if($id){ echo $name; } ?>">
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="status" name="status" value="1" <?php if($id && $status==1){ echo 'checked';  }   ?>>
        <label class="form-check-label" for="status">Status</label>
      </div>
    </div>
	
	<input type="hidden" name="id" value="<?php if($id){ echo $id;  }?>">
    <div class="col-auto">
       <button type="submit" class="btn btn-primary" <?php if ($update == true): ?> name="update"  <?php else: ?>  name="sacuvaj" <?php endif; ?>  >Sacuvaj</button>
	
			
	   
	   
    </div>
</form>



<?php include 'templates/footer.php'; ?>



