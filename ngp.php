
<?php include 'templates/header.php'; ?>


<form class="container" action="process.php" method="POST">	
    <div class="col-auto pb-2 pt-2">
        <input type="text" class="form-control col-sm-3" id="naziv" name="naziv" placeholder="Naziv">
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="status" name="status" value="1">
        <label class="form-check-label" for="status">Status</label>
      </div>
    </div>
    <div class="col-auto">
       <button type="submit" class="btn btn-primary" name="sacuvaj">Sacuvaj</button>
    </div>
</form>



<?php include 'templates/footer.php'; ?>



