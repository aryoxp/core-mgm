<?php $this->view('head.php', null, CoreView::CORE); ?>
<?php 
  $lang = array();
  $lang[] = "Willkommen!";
  $lang[] = "Bienvenido!";
  $lang[] = "Bienvenue!";
  $lang[] = "Benvenuto!";
  $lang[] = "Bem-vindo!";
  $lang[] = "Välkommen!";
  $lang[] = "Hoş geldin!";
  $lang[] = "Witaj!";
  $lang[] = "Selamat datang!";
  $lang[] = "Добро пожаловать!";
  $lang[] = "欢迎!";
  $lang[] = "أهلا بك!";
  $lang[] = "ողջույն!";
  $lang[] = "ကြိုဆို!";
  $lang[] = "欢迎!";
  $lang[] = "მისასალმებელი!";
  $lang[] = "ברוך הבא!";
  $lang[] = "स्वागत हे!";
  $lang[] = "ようこそ!";
  $lang[] = "ಸ್ವಾಗತಾರ್ಹ!";
  $lang[] = "환영!";
  $lang[] = "тавтай морилно уу!";
  $lang[] = "स्वागत!";
  $lang[] = "خوش آمدی!";
  $lang[] = "පිළිගැනීමේ!";
  $lang[] = "வரவேற்பு!";
  $lang[] = "Hosgeldiniz!";
  $lang[] = "خوش آمدید!";
  $lang[] = "Xush Lelibsiz!";
  $lang[] = "Chào Mừng!";
  $welcome = $lang[rand(0, count($lang)-1)];
?>

<div class="container p-3 flex-fill d-flex flex-column">
  <div class="row flex-fill d-flex flex-column justify-content-center">
    <div class="col-auto mt-3">
      <h1 class="text-secondary display-4"><?php echo $welcome; ?></h1>
      <div class="d-flex align-items-end mt-4">
        <img src="<?php echo $this->asset('images/mgm.png'); ?>" style="width:333px;" alt="MGM: Media, Game, and Mobile Laboratory" />  
      </div>
      <div class="py-4"> <span class="py-4"><?php echo $this->view('nav.php'); ?></span></div>
    </div>
    <div class="col-auto my-5">
      <a href="<?php echo $this->location('../admin'); ?>" type="button" class="btn btn-lg btn-secondary px-5">Enter &rsaquo;</a>
      <a href="https://rbc-filkom.ub.ac.id" class="ms-5">
        <img src="<?php echo $this->asset('images/overleaf-logo-primary.png'); ?>" style="max-width:200px;">
      </a>
    </div>
  </div>
  <?php echo $this->view('footer.php'); ?>
</div>

<?php $this->view('foot.php', null, CoreView::CORE);
