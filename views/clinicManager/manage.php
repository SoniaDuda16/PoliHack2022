<link href="public/css/manage.css" rel="stylesheet">

<div class="add-zone">
  <h5>Adaugă o nouă dată disponibilă</h5>
  <form method="post" action="index.php?create=true">
    <div class="mb-3">
      <input name="data" type="date" class="form-control" required>
    </div>

    <div class="mb-3">
      <input name ="ora" type="time" class="form-control" value="16:00" required>
    </div>

    <div class="mb-3">
      <input name="pret" type="number" class="form-control" placeholder="Price" required>
    </div>

    <div class="mb-3">
      <input name="specializare" type="text" class="form-control" placeholder="Specializare" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="see-zone">
  <h1>Programări viitoare</h1>
  <div class="see-appo-wrapper">
    <?php 
      include_once $_SERVER['DOCUMENT_ROOT']."/functions/others.php";
      showProgramariManager();
    ?>
  </div>
</div>