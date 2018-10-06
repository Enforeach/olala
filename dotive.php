        <?php
              $title = 'Document Inactive';
              $ftitle = 'Form Edit';
              $ngingik = 'Improvement';
              $submit = 'Edit';
              $hua = $_SERVER["REQUEST_URI"];
              $li = substr($hua, 30,5);
        ?>
        
<?php if($level < 3 || in_array("17", $access)){ ?>
<div class="page-wrapper">
        <div class="container-fluid" role="main">
          <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor"><?= $ngingik ?></h3>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item" active><?= $title ?></li>
                            
                        </ol>
                    </div>
                </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Document Inactive List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <?php if($level == 1 ||  in_array("17", $access)){ ?>
                        <a href="<?= site_url('dotive/dotive_excel'); ?>" class="btn btn-outline-success waves-effect waves-light"><span class="btn-label"><i class="fa fa-fw fa-file-excel-o" onfocus=></i></span>Export</a>
                      <?php } ?>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <div class="table-responsive">
                      <table class="table table-striped datatable-ku" data-func="dotive" data-meth="dotive_datatable">
                        <thead>
                          <tr>
                            <th>Register Date</th>
                            <th>No dotive</th>
                            <th>Title</th>
                            <th>Date Apply</th>
                            <th>Date Distribution</th>
                            <th>Qty</th>
                            <th <?php if($level == 1){ echo "style='min-width:90px'"; } ?>>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <script>delete_sweet_dtt(".btn-deletedoc", window.location.href);</script>
        <?php }else {?>
          <div class="page-wrapper">
        <div class="container-fluid" role="main">
          <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor"><?= $ngingik ?></h3>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?= site_url('category_filter/manage'); ?>"><?= $title ?></a></li>
                          <?php
                              foreach ($sempel as $row) {
                                if($row->idcategory == $li){
                                  echo "<li class='breadcrumb-item active'>" ?>  <?php echo "$row->nmcategory</li>";
                                }
                              }
                            ?>
                            
                        </ol>
                    </div>
                </div>

          <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4><b>Sorry You don't have the permission to access this page <br> Please contact the administrator!</b></h4></center>
                            </div>
                        </div>
                    </div>
                </div>

</div></div>
        <?php } ?>
