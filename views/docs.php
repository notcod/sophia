<div class="d-flex" id="wrapper">
  <div id="sidebar-wrapper">
    <div class="list-group list-group-flush">
      <a href="<?=ROOT?>docs/index" class="list-group-item main-sidebar"><i class="fas fa-tachometer-alt"></i> Overview</a>
      <a href="<?=ROOT?>docs/Controllers" class="list-group-item main-sidebar"><i class="fas fa-briefcase"></i> Controllers</a>
      <a href="<?=ROOT?>docs/Models" class="list-group-item main-sidebar"><i class="fas fa-users-cog"></i> Models</a>
      <a href="<?=ROOT?>docs/Views" class="list-group-item main-sidebar"><i class="far fa-list-alt"></i> Views</a>
      <a href="<?=ROOT?>docs/Requests" class="list-group-item main-sidebar"><i class="fas fa-list-ol"></i> Requests</a>
      <a href="<?=ROOT?>docs/Template" class="list-group-item main-sidebar"><i class="fas fa-object-ungroup"></i> Template</a>
      <a href="<?=ROOT?>docs/Support" class="list-group-item main-sidebar"><i class="fas fa-cogs"></i> Support</a>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-blue text-white" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);">
    <button class="btn text-white" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
    <div class="sidebar-heading mr-auto font-weight-bold">SOPHIA</div>
  </nav>
  <div id="page-content-wrapper">
    <div class="container-fluid py-3" style="margin-top:55px;">
      <?php require_once("$data[view]/$data[page].php"); ?>
    </div>
  </div>
</div>