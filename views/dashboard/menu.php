<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Painel ADM</a>
        </div>
      </div>
</nav>

 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?= base_url(); ?>dashboard">Overview <span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?= base_url(); ?>dashboard_includes/home">Home</a></li>
            <li><a href="<?= base_url(); ?>dashboard_includes/about">About</a></li>
            <li><a href="<?= base_url(); ?>dashboard_includes/leftsidebar">Left Sidebar</a></li>
            <li><a href="<?= base_url(); ?>dashboard_includes/faq">FAQ</a></li>
            <li><a href="<?= base_url(); ?>dashboard_includes/contact">Contact</a></li>
          </ul>
        </div>