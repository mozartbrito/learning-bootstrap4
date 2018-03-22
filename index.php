<!-- header -->
<?php include('template/header.php'); ?>
<!-- navbar -->
<?php include('template/navbar.php'); ?>
<!-- container -->
<div class="container">
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
  <!-- breadcrumb -->

  <!-- aqui vai nosso contudo -->
    <?php include('conteudo.php') ?>
  <!-- aqui vai nosso conteudo -->

</div>
<!-- container -->

<!-- footer -->
<?php include('template/footer.php'); ?>