<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= site_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  </ol>
</section>

<section class="content-header">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-th"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">ITEMS</span>
          <span class="info-box-number">90<small></small></span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">SUPPLIERS</span>
          <span class="info-box-number">41,410</span>
        </div>
      </div>
    </div>
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">CUSTOMERS</span>
          <span class="info-box-number">760</span>
        </div>
      </div>
    </div>
    <?php if ($this->fungsi->user_login()->level == 1) { ?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <a href="<?= site_url('User') ?>">
            <span class="info-box-icon bg-orange"><i class="fa fa-user-plus"></i></span>
          </a>
          <div class="info-box-content">
            <span class="info-box-text">USERS</span>
            <span class="info-box-number">760</span>
          </div>
        </div>
      </div>
    <?php } ?>

</section>