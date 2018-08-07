<?php
session_start();
include('connection/conn.php');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Garuda Indonesia | Dashboard</title>


    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">


    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url()?>css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url()?>img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('username')?></strong>
                             </span> <span class="text-muted text-xs block">User <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?php echo base_url()?>user/logout">Go To Admin</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            GI
                        </div>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>user/index"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Progress</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>user/warrior"><i class="fa fa-th-large"></i><span class="nav-label">Data Warrior</span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
          <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
              
          </div>
              <ul class="nav navbar-top-links navbar-right">
                  <li>
                      <span class="m-r-sm text-muted welcome-message">Welcome to Garuda Culture Program.</span>
                  </li>
                  <li>
                      <a href="<?php echo base_url()?>user/logout">
                          <i class="fa fa-sign-out"></i> Go To Admin
                      </a>
                  </li>
              </ul>
          </nav>
        </div>



        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="container " style="color:black">
          <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-12"></div>
            <div class="col-md-10 col-sm-10 col-xs-12">
              <h3 >Track - Corporate Culture </h3>
              <h4 >Selamat Datang</h4>
              <br/>
              <!-- form grid slider -->
              <div class="x_panel" style="border-top: 6px solid #4F8BB1;">

                <div class="x_content" >
                  <div class="col-md-3 col-sm-3 col-xs-12 " >
                    <div class="profile_img" >
                      <div id="crop-avatar"  >
                        <!-- Current avatar -->
                        <img class="img-responsive avatar-view" src="<?php echo base_url()?>assets/user.png" alt="Avatar" >
                      </div>
                    </div>
                    <br>
                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> Unit : <?php echo $this->session->userdata('username'); ?>
                      </li>
                    </ul>

              

                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Program Report</h2>
                      </div>

                    </div>
                    <br>
                    <div class="x_panel ui-ribbon-container ">
                      <p style="font-size:14px"><?php echo $programunit->cc_desc?></p>
                    </div>
                    <div class="x_panel ui-ribbon-container ">
                      <div class="x_title">
                        <h2>Daftar Evaluasi</h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <?php 
                              $a=count($daftarevaluasi);
                              if ($a>=1) {
                              ?>
                          <table class="table table-hover table-bordered" style="font-size:14px">
                            <thead style="font-size:12px">
                              <tr>
                                <th style="width:30%">Bulan</th>
                                <th style="width:10%">Target</th>
                                <th>Capaian Dalam <?php echo $daftarevaluasi[0]->input_satuan;?></th>
                                <th style="width:15%">Capaian (%)</th>
                                <th style="width:10%">Gap (%)</th>
                                <th style="width:10%">Metode Tracking</th>
                                <th style="width:10%">Reinforcement</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <?php for ($i=0; $i <$a ; $i++) { 
                              ?>
                                <tr style="font-size:12px">
                                  <td><?php echo $daftarevaluasi[$i]->last_modified_c;?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_target ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_realisasi ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_realisasi_ ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_gap ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_metodologi ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_reinforcement_positif ?></td>
                                  
                                </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                          <p style="font-size:14px">Ingin mengubah Target atau Evaluasi? Hubungi Admin</a></p>
                          <?php
                          } else { ?>
                          <table class="table table-hover table-bordered" style="font-size:14px">
                            <thead style="font-size:12px">
                              <tr>
                                <th style="width:30%">Bulan</th>
                                <th style="width:10%">Target</th>
                                <th>Capaian</th>
                                <th style="width:15%">Capaian (%)</th>
                                <th style="width:10%">Gap (%)</th>
                                <th style="width:10%">Metode Tracking</th>
                                <th style="width:10%">Reinforcement</th>
                              </tr>
                            </thead>
                            <tbody thead style="font-size:12px">
                                <tr> 
                                  <td colspan="8" class="text-center">Anda Belum Melakukan Evaluasi Target</td>
                                </tr>

                            </tbody>
                          </table>
                          <?php } ?>
                      </div>
                    </div>
                    <?php 
                    date_default_timezone_set("Asia/Jakarta");
                    $mydate=getdate(date("U"));
                    $date = "$mydate[month]";
                    $mon2= substr($date,0,3);
                    
                    $a=count($daftarevaluasi);
                    if ($a>0) {
                      
                           
                      $last_mod=$listevaluasi[$a-1]->last_modified_c;
                      $mon= substr("$last_mod",0,3);
                      if ($mon==$mon2) {
                        
                        ?>
                        <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Kembali</button></a>
                        <?php
                        echo '<script language="javascript">';
                        echo 'alert("Anda Sudah Mengisi Target Bulan Ini")';
                        echo '</script>';
                      }  else { ?>
                        <div class="x_panel ui-ribbon-container ">
                          <div class="x_content">
                            <form id="demo-form2" action="<?php echo base_url()?>user/evaluasi_data/<?php echo $programunit->cc_id?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                              <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Program 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="program" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_detail?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target Satuan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="satuan" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_satuan?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="target" id="first-name" required class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_target?>" readonly>
                                </div>
                              </div>
                              <div class="ln_solid"></div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Capaian
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number" lang="nb" name="capaian" id="first-name" required class="form-control col-md-7 col-xs-12" value="" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Metode Tracking
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="metodologi">
                                      <option value="">Choose..</option>
                                      <option value="Monitoring skedul pelaksanaan program dibandingkan target dan realisasi">Monitoring skedul pelaksanaan program dibandingkan target dan realisasi </option>
                                      <option value="Laporan Pelaksanan Kegiatan">Laporan Pelaksanan Kegiatan </option>
                                      <option value="Minutes of Meeting">Minutes of Meeting </option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Reinforcement
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="r_positif">
                                      <option value="">Choose..</option>
                                      <option value="Plakat">Plakat</option>
                                      <option value="Sertifikat">Sertifikat</option>
                                      <option value="Voucher">Voucher</option>
                                      <option value="Happy Icon">Happy Icon</option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Cancel</button></a>
                                  <button type="submit" name="submit" class="btn btn-success" value="simpan">Submit</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        
                        <?php }  ?>
                        <?php
                      
                    } 
          
                else {

                      if ( $mon2=='Des') {
                        
                        ?>
                        <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Kembali</button></a>
                        <?php
                        echo '<script language="javascript">';
                        echo 'alert("Anda tidak dapat mengisi pada Bulan Ini. Silahkan isi dimulai dari Bulan Januari")';
                        echo '</script>';
                      } else {

                        ?>
                        <div class="x_panel ui-ribbon-container ">
                          <div class="x_content">
                            <form id="demo-form2" action="<?php echo base_url()?>user/evaluasi_data/<?php echo $programunit->cc_id?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                              <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Program 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="program" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_detail?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target Satuan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="satuan" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_satuan?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="target" id="first-name" required class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_target?>" readonly>
                                </div>
                              </div>
                              <div class="ln_solid"></div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Capaian
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number" lang="nb" name="capaian" id="first-name" required class="form-control col-md-7 col-xs-12" value="" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Metode Tracking
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="metodologi">
                                      <option value="">Choose..</option>
                                      <option value="Monitoring skedul pelaksanaan program dibandingkan target dan realisasi">Monitoring skedul pelaksanaan program dibandingkan target dan realisasi </option>
                                      <option value="Laporan Pelaksanan Kegiatan">Laporan Pelaksanan Kegiatan </option>
                                      <option value="Minutes of Meeting">Minutes of Meeting </option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Reinforcement
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="r_positif">
                                      <option value="">Choose..</option>
                                      <option value="Plakat">Plakat</option>
                                      <option value="Sertifikat">Sertifikat</option>
                                      <option value="Voucher">Voucher</option>
                                      <option value="Happy Icon">Happy Icon</option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Cancel</button></a>
                                  <button type="submit" name="submit" class="btn btn-success" value="simpan">Submit</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <?php 
                      }
                    }
                    
                    ?>
                </div>

              </div>
            </div>
            <br />
            <br />
            <!-- /form grid slider -->

          </div>
          <div class="col-md-1 col-sm-1 col-xs-12"></div>

        </div>
        </div>
        </div>
        <div class="footer">
            <div class="pull-right">
              
            </div>
            <div>
                <strong>Copyright</strong> &copy; 2017 Garuda Indonesia. All rights reserved.
            </div>
        </div>


        
        </div>
        </div>

  

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url()?>js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()?>js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>js/inspinia.js"></script>
    <script src="<?php echo base_url()?>js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url()?>js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url()?>js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url()?>js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url()?>js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url()?>js/plugins/toastr/toastr.min.js"></script>
    <!-- ECharts -->
    <script src="<?php echo base_url()?>vendors/echarts/dist/echarts.min.js"></script>
    <script src="<?php echo base_url()?>vendors/echarts/map/js/world.js"></script>
     <!-- Knob -->
    <script src="<?php echo base_url()?>js/plugins/jsKnob/jquery.knob.js"></script>

    <script type="text/javascript">
        //KNOB CHART//
        $(".knob").knob(
        {
            draw: function () 
                {
                    // "tron" case
                    if (this.$.data('skin') == 'tron') 
                        {
                            var a = this.angle(this.cv)  // Angle
                            , sa = this.startAngle          // Previous start angle
                            , sat = this.startAngle         // Start angle
                            , ea                            // Previous end angle
                            , eat = sat + a                 // End angle
                            , r = true;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                            && (sat = eat - 0.3)
                            && (eat = eat + 0.3);

                            if (this.o.displayPrevious) 
                                {
                                    ea = this.startAngle + this.angle(this.value);
                                    this.o.cursor
                                    && (sa = ea - 0.3)
                                    && (ea = ea + 0.3);
                                    this.g.beginPath();
                                    this.g.strokeStyle = this.previousColor;
                                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                    this.g.stroke();
                                }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                }
        });
    </script>




</body>
</html>
    