<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <title>Garuda Indonesia</title>

    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

</head>
<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="white-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">Garuda Indonesia</a>
            </div>
            <div class="navbar-collapse collapse blue-bg" id="navbar">
                <ul class="nav navbar-top-links navbar-right"  style="color:black">
                    <li>
                           <h4><i class="fa fa-user"></i> Unit <?php echo $this->session->userdata('username') ?></h4>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>user/logout" style="color:black">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-left"  style="color:black">
                    <li>
                           <h4></h4>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>user/warrior" style="color:black">
                            <i class="fa fa-user"></i> Data Warrior
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>user/timbudaya" style="color:black">
                            <i class="fa fa-users"></i> Data Tim Implementasi Budaya
                        </a>
                    </li>
                </ul>
            </div>
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
                      </li><br>
                      <li><button type="button" class="btn btn-success table-hover btn-s" data-toggle="modal"  data-target="#isitim">Tambah Anggota TIB</button></li>
                      <li><a href="<?php echo base_url()?>user"><button type="button" class="btn btn-primary">Back</button></a></li>
                    </ul>
                        <div class="modal fade" id="isitim" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Tambah Anggota Tim Implementasi Budaya</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                                <!-- Isi Modal -->
                                                                <div class="box-body">
                                <form id="demo-form2" action="<?php echo base_url()?>user/addtimbudaya/" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomer Pegawai 
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required name="nopeg" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Posisi di TIB 
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required name="posisi" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('unit');?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Direktorat
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12"  readonly value="<?php echo $this->session->userdata('direktorat');?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Aktif
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" required="true" name="status_aktif">
                                        <option value="">Choose..</option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required name="email" class="form-control col-md-7 col-xs-12">
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
                                                      </div>
                                                    </div>
                                                    </div>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="profile_title">
                      <div class="col-md-9">
                        <h2>Data Tim Implementasi Budaya</h2>
                      </div>

                    </div>
                    <br>
                  <div class="x_panel ui-ribbon-container ">
                          <div class="x_content">
                            <?php if ($status==0) { ;?>
                             <?php
                        echo '<script language="javascript">';
                        echo 'alert("Anda Belum Mengisi Data Tim Implementasi Budaya")';
                        echo '</script>'; ?>
                            
                           <?php } else {?>

                                <?php $a=count($warrior);  $b=0; for ($i=0; $i < $a; $i++) {
                                                    if($this->input->post('is_submitted')){

                                                                $nopeg          = set_value('nopeg');
                                                                $posisi         = set_value('posisi');
                                                                $unit           = set_value('unit');
                                                                $direktorat     = set_value('direktorat');
                                                                $status_aktif   = set_value('status_aktif');       
                                                                $email          = set_value('email');
                                                    }
                                                    else {
                                                                $nopeg          = $warrior[$i]->nopeg;
                                                                $posisi         = $warrior[$i]->posisi;
                                                                $unit           = $warrior[$i]->unit;
                                                                $direktorat     = $warrior[$i]->direktorat;
                                                                $status_aktif   = $warrior[$i]->status_aktif;
                                                                $email          = $warrior[$i]->email;       
                                                    }
                                                    ?>
                                <form id="demo-form2" action="<?php echo base_url()?>user/editwarrior/<?php echo $nopeg?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                              <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomer Pegawai 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="nopeg" required class="form-control col-md-7 col-xs-12" value="<?php echo $nopeg?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Posisi di TIB 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" required name="posisi" class="form-control col-md-7 col-xs-12" value="<?php echo $posisi?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $unit?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Direktorat
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $direktorat?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Aktif
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="status_aktif" value="<?php echo $status_aktif?>">
                                      <option value="<?php echo $status_aktif?>"><?php if ($status_aktif==1) echo "Aktif"; else echo "Tidak Aktif"; ?></option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" required name="email" class="form-control col-md-7 col-xs-12" value="<?php echo $email?>">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="button" class="btn btn-success table-hover btn-s" data-toggle="modal"  data-target="#edit<?php echo $i?>">Edit</button>
                                  <?=anchor( 'user/delete/' . $nopeg,
                                       'Delete',
                                       ['class'=>'btn btn-w-m btn-danger',
                                       'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                       ])?>
                                </div>
                              </div>
                            </form>
                            <div class="ln_solid"></div>

                            <div class="modal fade" id="edit<?php echo $i?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Edit Anggota Tim Implementasi Budaya</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                                <!-- Isi Modal -->
                                                                <div class="box-body">
                                <form id="demo-form2" action="<?php echo base_url()?>user/edittimbudaya/<?php echo $nopeg?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                              <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomer Pegawai 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="nopeg" required class="form-control col-md-7 col-xs-12" value="<?php echo $nopeg?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Posisi di TIB 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" required name="posisi" class="form-control col-md-7 col-xs-12" value="<?php echo $posisi?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $unit?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Direktorat
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $direktorat?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Aktif
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="status_aktif" value="<?php echo $status_aktif?>">
                                      <option value="<?php echo $status_aktif?>"><?php if ($status_aktif==1) echo "Aktif"; else echo "Tidak Aktif"; ?></option>
                                      <option value="1">Aktif</option>
                                      <option value="0">Tidak Aktif</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" required name="email" class="form-control col-md-7 col-xs-12" value="<?php echo $email?>">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" name="submit" class="btn btn-success" value="simpan">Simpan</button>
                                </div>
                              </div>
                            </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    </div>
                           <?php } }?>
                          </div>
                        </div>
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
</body>
</html>
