<!--Custom styles-->
<link rel="stylesheet" type="text/css" href="public/css/log.css">

<div class="container">
  <div class="home">
    <a href="index.php?page=home"><i class="fas fa-home"></i></a>
  </div>
  <div class="card">
    <div class="card-header">
      <h3>Înregistează-te</h3>
    </div>
    
    <div class="card-body">
      <form novalidate action = "/index.php?page=register&try=reg" method = "POST">
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Nume utilizator" name="username" required>
        </div>

        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-at"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>

        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-signature"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Nume complet" name="fullname" required>
        </div>

        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
          </div>
          <input type="password" class="form-control" placeholder="Parolă" name="password" required>
        </div>

        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-unlock"></i></span>
          </div>
          <input type="password" class="form-control" placeholder="Repetă parolă" name="repassword" required>
        </div>

              <div class="button-wrapper">
          <div class="form-group">
            <input type="submit" value="Creează" class="btn float-right login_btn">
          </div>
              </div>
      </form>
      <?php if(isset($message) && $message!= "") { ?>
        <div class="error">
          <?php echo $message; ?>
        </div>
      <?php } ?>
    </div>

    <div class="card-footer">
      <div class="d-flex justify-content-center links">
        Aveți cont?<a href="index.php?page=login">Intră în cont</a>
      </div>
    </div>
  </div>
</div>