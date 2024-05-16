<?php
$lang = getUser()->lang;
?>

<html>

<head>
  <title>
    <?= $title ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/app/styles.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/Main/index?lang=<?= $lang ?>"><?= __('Spectra Perfumes')?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/Main/sales?lang=<?= $lang ?>"><?= __('Sales Analytics') ?></a>
        </li>

        <!-- <li class="nav-item">
        <a class="nav-link" href="/Invoice/index">Invoice</a>
      </li> -->
        <li class="nav-item">
          <a class="nav-link" href="/Folder/index?lang=<?= $lang ?>"><?= __('Folders') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Main/bookmarks?lang=<?= $lang ?>">Bookmarks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Main/settings?lang=<?= $lang ?>"><?= __('Settings') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/User/logout"><?= __('Logout') ?></a>
        </li>
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn" type="submit">Search</button>
    </form> -->
    </div>
  </nav>