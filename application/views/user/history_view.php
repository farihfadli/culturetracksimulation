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
                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="x_title" style="text-align:center">
                      <h4 >Index Pencapaian Unit</h4>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div style="text-align: center; margin-bottom: 17px">
                        <?php $ppp=0; for ($i=0; $i <count($program) ; $i++) {
                            if ($program[$i]->persen_realisasi) $ppp=$ppp+$program[$i]->persen_realisasi;
                        } ?>
                        <span class="chart" data-percent="<?php echo $ppp/count($program); ?>">
                          <span class="percent"></span>
                        </span>persen
                      </div>
                    </div>
                    <h3 style="text-align:center"><?php echo $this->session->userdata('username'); ?></h3>
                    <div class="divider"></div>
                    <br />
                    <div style="text-align:center">
                      <a href="<?php echo base_url()?>user"><button type="submit" class="btn btn-primary btn-xs" style="width: 80% ; font-size: 100%" >Kembali</button></a>
                    </div>
                    <br>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Program Progress Report</h2>
                      </div>

                    </div>
                    <br>
                      <table class="table table-hover table-bordered" style="font-size:14px">
                        <?php  if ($jumlahprogram!=0)  {?>
                        <thead>
                          <tr>
                            <th style="width:5%; text-align:center">#</th>
                            <th style="width:35%; text-align:center">Program</th>
                            <th style="width:15%; text-align:center">Target</th>
                            <th style="width:15%; text-align:center">Satuan</th>
                            <th style="width:15%; text-align:center">Gap (%)</th>

                          </tr>
                        </thead>
                        <tbody> 
                               <?php $ppp=0; for ($i=0; $i <count($program) ; $i++) { 
                                $unit=$this->session->userdata('username');
                                $xmen=$program[$i]->cc_detail;
                               $sudah=mysqli_query($con, "SELECT * FROM cc_program_input where input_user='$unit' and input_detail='$xmen'");
                              $gap=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='$unit' and input_detail_c='$xmen'");
                              $isimen=mysqli_fetch_array($sudah);
                              $gapmen=mysqli_fetch_array($gap);?>
                               <tr>
                              <td scope="row" style="text-align:center; vertical-align:middle"><?php echo $i+1; ?></td>
                              <td><?php echo $program[$i]->cc_detail?> </td>
                              <td style="text-align:center">
                                  <?php if (!$program[$i]->input_target) echo "-"; else echo $program[$i]->input_target; $ppp=$ppp+$program[$i]->input_target;?>
                                </td> 
                                <td style="text-align:center">
                                  <?php if (!$program[$i]->input_satuan) echo "-"; else echo $program[$i]->input_satuan; ?>
                                </td>
                                <td style="text-align:center">
                                  <?php echo round($program[$i]->persen_gap);?>
                                </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                      <?php 

                    } else {
                      echo "Saat ini tidak ada program berjalan";
                    }
                    ?>


                    <!-- after 1 -->
                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Program Progress History</h2>
                      </div>

                    </div>
                    <br>
                    <?php 
                    $p=count($programdefault);
                    $cc=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                    $cc2=mysqli_query($con, "SELECT MAX(cc_time) as max FROM cc_program where status= 'Default'");
                    $cc3=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                    if ($p>0)
                    {
                      $max=$max[0]->max;
                      $bulan= 01;
                    

                      ?>
                      <table class="table table-hover table-bordered" style="font-size:14px">
                        <thead>
                          <tr>
                            <th style="width:5%; text-align:center; vertical-align:middle" rowspan="2" >#</th>
                            <th style="width:35%; text-align:center; vertical-align:middle" rowspan="2">Program</th>
                            <th style=" text-align:center" colspan="<?php echo $max; ?>">Capaian (%)</th>
                          </tr>
                          <tr>
                            <?php
                            $x=1;
                            while ($x <= $max-9) {
                              if ($bulan>12) {
                                $bulan=$bulan-12;
                              }
                              if ($bulan==1) {
                                $bulan1='Agu';
                              }
                              if ($bulan==2) {
                                $bulan1='Sep';
                              }
                              if ($bulan==3) {
                                $bulan1='Okt';
                              }
                              ?>
                              <th style=" text-align:center"><?php echo $bulan1;?></th>
                              <?php
                              $bulan++;
                              $x++;  
                            }
                            ?>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no=1;
                          while ($cc_program=mysqli_fetch_array($cc)) {
                            $xmen=$cc_program['cc_detail'];
                              // echo $xmen;
                            ?>
                            <tr>

                              <?php
                              $sudah=mysqli_query($con, "SELECT * FROM cc_program_eval JOIN cc_program_input on cc_program_eval.input_user_c=cc_program_input.input_user  and cc_program_input.input_detail=cc_program_eval.input_detail_c where input_user='$unit' and input_detail='$xmen' ORDER BY input_id DESC");
                        

                              $cc4=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                              $bulan2=mysqli_fetch_array($cc4 )['start_month'];
                              $bulan2= 19;

                              ?>
                              <th scope="row" style="text-align:center; vertical-align:middle"><?php echo $no++; ?></th>
                              <td><?php echo $cc_program['cc_detail'];?></td>
                              <?php
                              $o2=1;
                              while ($o2 <= $max-9) {
                                ?>
                                <td style="text-align:center">
                                  <?php 
                                  $bulan2++;
                                  if ($bulan2>12) {
                                    $bulan2=$bulan2-12;
                                  }
                                  if ($bulan2<10) {
                                    $bulan2="0".$bulan2;
                                  }

                                  $pro=$cc_program['cc_detail'];
                                  $cc5=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='$unit'  and input_bulan='$bulan2' and input_detail_c='$pro'");

                                  $isi5=mysqli_fetch_array($cc5)['input_realisasi_'];
                                  if ($isi5==null && empty($isi5)) {
                                    echo "-";
                                  } else {
                                    echo $isi5;
                                  }
                                  ?>
                                </td>
                                <?php
                                $o2++;
                              }
                              ?>
                            </tr>
                            <?php
                          }
                          ?>
                        </tbody>
                      </table>
                      <?php 

                    } else {
                      echo "Saat ini tidak ada program berjalan";
                    }
                    ?>

                    

                    <!-- after 2 -->

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
    <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="<?php echo base_url();?>js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>js/inspinia.js"></script>
    <script src="<?php echo base_url();?>js/plugins/pace/pace.min.js"></script>
    <style>
      .x_panel {
  position: relative;
  width: 100%;
  margin-bottom: 10px;
  padding: 10px 17px;
  display: inline-block;
  background: #fff;
  border: 1px solid #E6E9ED;
  -webkit-column-break-inside: avoid;
  -moz-column-break-inside: avoid;
  column-break-inside: avoid;
  opacity: 1;
  transition: all .2s ease; }
  .profile_title {
  background: #F5F7FA;
  border: 0;
  padding: 7px 0;
  display: -ms-flexbox;
  display: flex; }
    </style>
    <!-- easy-pie-chart -->
    <script src="<?php echo base_url();?>js/jquery.easypiechart.min.js"></script>
  <script>
  $(function() {
    $('.chart').easyPieChart({
      easing: 'easeOutElastic',
      delay: 3000,
      barColor: '#26B99A',
      trackColor: '#F5F7FA',
      scaleColor: false,
      lineWidth: 20,
      trackWidth: 20,
      lineCap: 'butt',
      onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
  });
  </script>




</body>
</html>
    