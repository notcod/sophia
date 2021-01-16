<div class="d-flex" id="wrapper">
  <div id="sidebar-wrapper">
    
    <div class="list-group list-group-flush">
      <a href="<?=ROOT?>admin/index" class="list-group-item main-sidebar"><i class="fa fa-cubes" aria-hidden="true"></i> Pregled</a>
    </div>
  </div>
  <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom fixed-top bg-white" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);">
      <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
      <div class="sidebar-heading mr-auto font-weight-bold">PROTOMOB</div>
    </nav>
    
    <div class="container-fluid py-3" style="margin-top:55px;">
      <?php require_once("$data[view]/$data[page].php"); ?>
    </div>
  </div>
</div>