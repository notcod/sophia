<div class="d-flex" id="wrapper">
  <div id="sidebar-wrapper">
    <div class="list-group list-group-flush">
      <a href="<?=ROOT?>owner/index" class="list-group-item main-sidebar"><i class="fas fa-tachometer-alt"></i> Pregled</a>
      <a href="<?=ROOT?>owner/company" class="list-group-item main-sidebar"><i class="fas fa-briefcase"></i> Kompanija</a>
      <a href="<?=ROOT?>owner/servicers" class="list-group-item main-sidebar"><i class="fas fa-users-cog"></i> Serviseri</a>
      <a href="<?=ROOT?>owner/phones" class="list-group-item main-sidebar"><i class="far fa-list-alt"></i> Oglasi</a>
      <a href="<?=ROOT?>owner/orders" class="list-group-item main-sidebar"><i class="fas fa-list-ol"></i> Porudžbine</a>
      <a href="<?=ROOT?>owner/settings" class="list-group-item main-sidebar"><i class="fas fa-cogs"></i> Podešavanja</a>
      <a href="<?=ROOT?>owner/logout" class="list-group-item main-sidebar"><i class="fas fa-sign-out-alt"></i> Izloguj se</a>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-blue text-white" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);">
    <button class="btn text-white" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
    <div class="sidebar-heading mr-auto font-weight-bold">PROTOMOB</div>
  </nav>
  <div id="page-content-wrapper">
    <div class="container-fluid py-3" style="margin-top:55px;">
      <?php require_once("$data[view]/$data[page].php"); ?>
    </div>
  </div>
</div>