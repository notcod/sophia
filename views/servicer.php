<div class="d-flex" id="wrapper">
  <div id="sidebar-wrapper">
    
    <div class="list-group list-group-flush">
      <a href="<?=ROOT?>servicer/index" class="list-group-item main-sidebar"><i class="fas fa-tachometer-alt"></i> Pregled</a>
      <a href="<?=ROOT?>servicer/new" class="list-group-item main-sidebar"><i class="fas fa-folder-plus"></i> Dodaj telefon</a>
      <a href="<?=ROOT?>servicer/phones/1" class="list-group-item main-sidebar"><i class="fas fa-cog"></i> Telefoni na popravci</a>
      <a href="<?=ROOT?>servicer/phones/2" class="list-group-item main-sidebar"><i class="fas fa-clipboard-list"></i> Popravljeni telefoni</a>
      <a href="<?=ROOT?>servicer/phones/3" class="list-group-item main-sidebar"><i class="fas fa-list-alt"></i> Preuzeti telefoni</a>
      <a href="<?=ROOT?>servicer/settings" class="list-group-item main-sidebar"><i class="fas fa-cogs"></i> Podešavanja</a>
      <a href="<?=ROOT?>servicer/logout" class="list-group-item main-sidebar"><i class="fas fa-sign-out-alt"></i> Izloguj se</a>
    </div>
  </div>
  <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);">
      <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
      <div class="sidebar-heading mr-auto font-weight-bold">PROTOMOB</div>
    </nav>
    
    <div class="container-fluid py-3" style="margin-top:55px;">
      <?php require_once("$data[view]/$data[page].php"); ?>
    </div>
  </div>
</div>