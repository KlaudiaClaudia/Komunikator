<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Komunikator internetowy</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Imię</label>
            <input type="text" name="fname" placeholder="Imię" required>
          </div>
          <div class="field input">
            <label>Nazwisko</label>
            <input type="text" name="lname" placeholder="Nazwisko" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Wprowadź email" required>
        </div>
        <div class="field input">
          <label>Hasło</label>
          <input type="password" name="password" placeholder="Wprowadź hasło" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Wybierz avatar</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Przejdź do rozmowy">
        </div>
      </form>
      <div class="link">Masz już konto? <a href="login.php">Zaloguj się!</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
