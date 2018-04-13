<html>
  <head>
    <title>Codeigniter Guestbook</title>
    <link rel='stylesheet' href='<?php base_url('assets/css/materialize.min.css')?>' />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <nav class="grey darken-4">
      <div class="nav-wrapper container">
        <a href="/" class="brand-logo">Express Guestbook</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="<?php echo site_url('guestbook/new_entry'); ?>">Add new entry<i class="material-icons left">add</i></a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav">
          <li><a href="<?php echo site_url('guestbook/new_entry'); ?>">Add new entry<i class="material-icons right">add</i></a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
