<?php
  $id_atlet = "";
  $nama = "";
  $npm = "";
  $gender = "";
  // $berat = "";
  // $tinggi = "";
  $tanggal_lahir = "";
  $email = "";
  $no_hp = "";
  $pt = "";
  $foto = "";
  $ss_forlap = "";
  $ss_ktm = "";
  $ss_ktp = "";
  $cabang = "";
  if ($op=="edit") {
    foreach ($sql->result() as $obj) {
      $op = "edit";
      $id_atlet = $obj->id_atlet;
      $nama = $obj->nama;
      $gender = $obj->gender;
      $tanggal_lahir = $obj->tanggal_lahir;
      $npm = $obj->npm;
      $email = $obj->email;
      // $berat = $obj->berat;
      // $tinggi = $obj->tinggi;
      $no_hp = $obj->no_hp;
      $pt = $obj->pt;
      $foto = $obj->foto;
      $ss_forlap = $obj->ss_forlap;
      $ss_ktp = $obj->ss_ktp;
      $ss_ktm = $obj->ss_ktm;
      $cabang = $obj->cabang;
    }
  }
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css"/>
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"<?php echo base_url(); ?>></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootbox.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.hotkeys.index.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/spinbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-editable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ace-editable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootbox.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.hotkeys.index.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/spinbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>
<div class="page-content">
  <div class="page-header">
    <h1>

    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <?php echo form_open_multipart('institusi/atlet_simpan');?>
      <div class="form-horizontal" >  
        <input type="hidden" name="op" value="<?php echo $op;?>" class="form-control">
        <input type="hidden" name="id_atlet" value="<?php echo $id_atlet;?>" class="form-control">
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pas Foto </label>  
          <div class="col-sm-3">
						<span class="profile-picture image_preview">
							<img id="avatar" class="editable img-responsive " alt="Alex's Avatar" src="<?php echo base_url();?>assets/upload/foto/<?php if($foto != ""){echo $foto;} else {echo "profile-pic.jpg";}?>" />
						</span>
            <input  name="foto"  class="upload_btn" type="file" accept="image/*" value="<?php echo $foto;?>" style="float: left;" <?php if($op!="edit"){echo "required";} ?> />
          </div>
        </div>
        <!-- </div> -->
        <!-- Nama -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Lengkap </label>
          <div class="col-sm-3">
            <input type="text" id="form-field-1" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama;?>" class="col-xs-12" required/>
          </div>
        </div>

        <!-- Jenis Kelamin -->
        <div class="form-group control-group">
          <label class=" col-sm-3 control-label no-padding-right">Jenis Kelamin</label>

          <div class="radio">
            <label>
              <input class="form-field-radio ace" type="radio" name="gender" value="Laki - laki" <?php if($gender == 'L'){ echo 'checked'; } ?> required/>
              <span class="lbl"> Laki-laki</span>
            </label>

            <label>
              <input class="form-field-radio ace" type="radio" name="gender" value="Perempuan" <?php if($gender == 'P'){ echo 'checked'; } ?> required/>
              <span class="lbl"> Perempuan</span>
            </label>
          </div>
        </div>

        <!-- TL -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal lahir </label>
    
          <div class="col-sm-3">
            <div class="input-group">
              <input class="form-control date-picker" id="id-date-picker-1" value="1999-08-28" type="text" data-date-format="yyyy-mm-dd" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" required/>
              <span class="input-group-addon">
                <i class="fa fa-calendar bigger-110"></i>
              </span>
            </div>
          </div>
        </div>

        <!-- NPM -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIM/NPM </label>
          <div class="col-sm-3">
            <input type="text" id="form-field-1" placeholder="NPM" class="col-xs-12" name="npm" value="<?php echo $npm;?>"required/>
          </div>
        </div>

        <!-- Berat -->
        <!-- <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Berat Badan </label>
          <div class="col-sm-3">
            <input type="text" id="form-field-1" placeholder="Berat" class="col-xs-12" name="berat" value="<?php echo $berat;?>"required/>
          </div>/Kg
        </div> -->

        <!-- Berat -->
        <!-- <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tinggi Badan </label>
          <div class="col-sm-3">
            <input type="text" id="form-field-1" placeholder="Tinggi" class="col-xs-12" name="tinggi" value="<?php echo $tinggi;?>"required/>
          </div>/cm
        </div> -->

        <!-- Email -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
          <div class="col-sm-3">
            <input type="email" id="form-field-1" placeholder="Email" class="col-xs-12" name="email" value="<?php echo $email;?>" required/>
          </div>
        </div>

        <!-- No. Telpon -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Telpon </label>
          <div class="col-sm-3">
            <input type="number" id="form-field-1" placeholder="No. Telpon" class="col-xs-12" name="no_hp" value="<?php echo $no_hp;?>" required/>
          </div>
        </div>

        <!-- ss -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bukti Screenshot Forlap Dikti </label>
          <div class="col-sm-3">
            <div class="image_preview1 profile-picture">
              <img class="pict_url editable img-responsive  editable-empty" src="<?php echo base_url();?>assets/upload/ss/<?php if($ss_forlap != ""){echo $ss_forlap;} else {echo "ss.jpg";}?>">
            </div>
            <input name="ss_forlap" class="upload_btn_ss_forlap" type="file" accept="image/*" value="<?php echo $ss_forlap;?>" style="float: left;" <?php if($op!="edit"){echo "required";} ?> />
          </div>
        </div>

        <!-- ss -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Foto KTM </label>
          <div class="col-sm-3">
            <div class="image_preview2 profile-picture">
              <img class="pict_url editable img-responsive  editable-empty" src="<?php echo base_url();?>assets/upload/ss/<?php if($ss_ktm != ""){echo $ss_ktm;} else {echo "ktm.jpg";}?>">
            </div>
            <input name="ss_ktm" class="upload_btn_ss_ktm" type="file" accept="image/*" value="<?php echo $ss_ktm;?>" style="float: left;" <?php if($op!="edit"){echo "required";} ?> />
          </div>
        </div>

        <!-- ss -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Foto KTP </label>
          <div class="col-sm-3">
            <div class="image_preview3 profile-picture">
              <img class="pict_url editable img-responsive  editable-empty" src="<?php echo base_url();?>assets/upload/ss/<?php if($ss_ktp != ""){echo $ss_ktp;} else {echo "ktp.jpg";}?>">
            </div>
            <input name="ss_ktp" class="upload_btn_ss_ktp" type="file" accept="image/*" value="<?php echo $ss_ktp;?>" style="float: left;" <?php if($op!="edit"){echo "required";} ?> />
          </div>
        </div>

        <!-- cabang -->

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilihan Cabang Olahraga Pertama </label>
          <div class="col-sm-3">
            <select name="cabang" multiple class="chosen-select-1 form-control" data-placeholder="Silahkan Pilih Cabang Anda...">
              <optgroup label="Atletik">
                <option value="Atletik Putra 100 M" <?php if ($cabang == 'Atletik Putra 100 M') {echo "selected";} ?>>
                  Atletik Putra 100 M
                </option>

                <option value="Atletik Putri 100 M" <?php if ($cabang == 'Atletik Putri 100 M') {echo "selected";} ?>>
                  Atletik Putri 100 M
                </option>

                <option value="Atletik Putra 5000 M" <?php if ($cabang == 'Atletik Putra 5000 M') {echo "selected";} ?>>
                  Atletik Putra 5000 M
                </option>

                <option value="Atletik Putri 5000 M" <?php if ($cabang == 'Atletik Putri 5000 M') {echo "selected";} ?>>
                  Atletik Putri 5000 M
                </option>
              </optgroup>

              <optgroup label="Basket">
                <option value="Basket Putra" <?php if ($cabang == 'Basket Putra') {echo "selected";} ?>>
                  Basket Putra
                </option>

                <option value="Basket Putri" <?php if ($cabang == 'Basket Putri') {echo "selected";} ?>>
                  Basket Putri
                </option>
              </optgroup>

              <optgroup label="Futsal">
                <option value="Futsal Putra" <?php if ($cabang == 'Futsal Putra') {echo "selected";} ?>>
                  Futsal Putra
                </option>

                <option value="Futsal Putri" <?php if ($cabang == 'Futsal Putri') {echo "selected";} ?>>
                  Futsal Putri
                </option>
              </optgroup>

              <optgroup label="Bulutangkis">
                <option value="Bulutangkis Tunggal Putra Perorang" <?php if ($cabang == 'Bulutangkis Tunggal Putra Perorang') {echo "selected";} ?>>
                  Bulutangkis Tunggal Putra Perorang
                </option>

                <option value="Bulutangkis Tunggal Putri Perorang" <?php if ($cabang == 'Bulutangkis Tunggal Putri Perorang') {echo "selected";} ?>>
                  Bulutangkis Tunggal Putri Perorang
                </option>

                <option value="Bulutangkis Ganda Putra Perorang" <?php if ($cabang == 'Bulutangkis Ganda Putra Perorang') {echo "selected";} ?>>
                  Bulutangkis Ganda Putra Perorang
                </option>

                <option value="Bulutangkis Ganda Putri Perorang" <?php if ($cabang == 'Bulutangkis Ganda Putri Perorang') {echo "selected";} ?>>
                  Bulutangkis Ganda Putri Perorang
                </option>

                <option value="Bulutangkis Beregu Putra" <?php if ($cabang == 'Bulutangkis Beregu Putra') {echo "selected";} ?>>
                  Bulutangkis Beregu Putra
                </option>

                <option value="Bulutangkis Beregu Putri" <?php if ($cabang == 'Bulutangkis Beregu Putri') {echo "selected";} ?>>
                  Bulutangkis Beregu Putri
                </option>

                <option value="Bulutangkis Campuran" <?php if ($cabang == 'Bulutangkis Campuran') {echo "selected";} ?>>
                  Bulutangkis Campuran
                </option>
              </optgroup>

              <optgroup label="Catur Meja">
                <option value="Catur Meja 1 Putra" <?php if ($cabang == 'Catur Meja 1 Putra') {echo "selected";} ?>>
                  Catur Meja 1 Putra
                </option>

                <option value="Catur Meja 1 Putri" <?php if ($cabang == 'Catur Meja 1 Putri') {echo "selected";} ?>>
                  Catur Meja 1 Putri
                </option>

                <option value="Catur Meja 2 Putra" <?php if ($cabang == 'Catur Meja 2 Putra') {echo "selected";} ?>>
                  Catur Meja 2 Putra
                </option>

                <option value="Catur Meja 2 Putri" <?php if ($cabang == 'Catur Meja 2 Putri') {echo "selected";} ?>>
                  Catur Meja 2 Putri
                </option>

                <option value="Catur Meja 3 Putra" <?php if ($cabang == 'Catur Meja 3 Putra') {echo "selected";} ?>>
                  Catur Meja 3 Putra
                </option>

                <option value="Catur Meja 3 Putri" <?php if ($cabang == 'Catur Meja 3 Putri') {echo "selected";} ?>>
                  Catur Meja 3 Putri
                </option>

                <option value="Catur Beregu Putra" <?php if ($cabang == 'Catur Beregu Putra') {echo "selected";} ?>>
                  Catur Beregu Putra
                </option>

                <option value="Catur Beregu Putri" <?php if ($cabang == 'Catur Beregu Putri') {echo "selected";} ?>>
                  Catur Beregu Putri
                </option>
              </optgroup>

              <optgroup label="Panjat Tebing">
                <option value="Panjat Tebing Lead Putra" <?php if ($cabang == 'Panjat Tebing Lead Putra') {echo "selected";} ?>>
                  Panjat Tebing Lead Putra
                </option>

                <option value="Panjat Tebing Lead Putri" <?php if ($cabang == 'Panjat Tebing Lead Putri') {echo "selected";} ?>>
                  Panjat Tebing Lead Putri
                </option>

                <option value="Panjat Tebing Speed Putra" <?php if ($cabang == 'Panjat Tebing Speed Putra') {echo "selected";} ?>>
                  Panjat Tebing Speed Putra
                </option>

                <option value="Panjat Tebing Speed Putri" <?php if ($cabang == 'Panjat Tebing Speed Putri') {echo "selected";} ?>>
                  Panjat Tebing Speed Putri
                </option>

                <option value="Panjat Tebing Boulder Putra" <?php if ($cabang == 'Panjat Tebing Boulder Putra') {echo "selected";} ?>>
                  Panjat Tebing Boulder Putra
                </option>

                <option value="Panjat Tebing Boulder Putri" <?php if ($cabang == 'Panjat Tebing Boulder Putri') {echo "selected";} ?>>
                  Panjat Tebing Boulder Putri
                </option>
              </optgroup>

              <optgroup label="Voli">
                <option value="Voli Putra" <?php if ($cabang == 'Voli Putra') {echo "selected";} ?>>
                  Voli Putra
                </option>

                <option value="Voli Putri" <?php if ($cabang == 'Voli Putri') {echo "selected";} ?>>
                  Voli Putri
                </option>
              </optgroup>

              <optgroup label="Tenis Meja">
                <option value="Tenis Meja Tunggal Putra Perorangan" <?php if ($cabang == 'Tenis Meja Tunggal Putra Perorangan') {echo "selected";} ?>>
                  Tenis Meja Tunggal Putra Perorangan
                </option>

                <option value="Tenis Meja Tunggal Putri Perorangan" <?php if ($cabang == 'Tenis Meja Tunggal Putri Perorangan') {echo "selected";} ?>>
                  Tenis Meja Tunggal Putri Perorangan
                </option>

                <option value="Tenis Meja Ganda Putra Perorangan" <?php if ($cabang == 'Tenis Meja Ganda Putra Perorangan') {echo "selected";} ?>>
                  Tenis Meja Ganda Putra Perorangan
                </option>

                <option value="Tenis Meja Ganda Putri Perorangan" <?php if ($cabang == 'Tenis Meja Ganda Putri Perorangan') {echo "selected";} ?>>
                  Tenis Meja Ganda Putri Perorangan
                </option>

                <option value="Tenis Meja Beregu Putra" <?php if ($cabang == 'Tenis Meja Beregu Putra') {echo "selected";} ?>>
                  Tenis Meja Beregu Putra
                </option>

                <option value="Tenis Meja Beregu Putri" <?php if ($cabang == 'Tenis Meja Beregu Putri') {echo "selected";} ?>>
                  Tenis Meja Beregu Putra
                </option>

                <option value="Tenis Meja Campuran" <?php if ($cabang == 'Tenis Meja Campuran') {echo "selected";} ?>>
                  Tenis Meja Campuran
                </option>
              </optgroup>

              <optgroup label="Karate">
                <option value="Karate Putra Kumite - 55 kg" <?php if ($cabang == 'Karate Putra Kumite - 55 kg') {echo "selected";} ?>>
                  Karate Putra Kumite - 55 kg
                </option>

                <option value="Karate Putra Kumite - 60 kg" <?php if ($cabang == 'Karate Putra Kumite - 60 kg') {echo "selected";} ?>>
                  Karate Putra Kumite - 60 kg
                </option>

                <option value="Karate Putra Kumite - 65 kg" <?php if ($cabang == 'Karate Putra Kumite - 65 kg') {echo "selected";} ?>>
                  Karate Putra Kumite - 65 kg
                </option>

                <option value="Karate Putra Kumite - 75 kg" <?php if ($cabang == 'Karate Putra Kumite - 75 kg') {echo "selected";} ?>>
                  Karate Putra Kumite - 75 kg
                </option>

                <option value="Karate Putri Kumite - 48 kg" <?php if ($cabang == 'Karate Putri Kumite - 48 kg') {echo "selected";} ?>>
                  Karate Putri Kumite - 48 kg
                </option>

                <option value="Karate Putri Kumite - 50 kg" <?php if ($cabang == 'Karate Putri Kumite - 50 kg') {echo "selected";} ?>>
                  Karate Putri Kumite - 50 kg
                </option>

                <option value="Karate Putri Kumite - 53 kg" <?php if ($cabang == 'Karate Putri Kumite - 53 kg') {echo "selected";} ?>>
                  Karate Putri Kumite - 53 kg
                </option>

                <option value="Karate Putri Kumite - 60 kg" <?php if ($cabang == 'Karate Putri Kumite - 60 kg') {echo "selected";} ?>>
                  Karate Putri Kumite - 60 kg
                </option>

                <option value="Karate Putri Kumite > 60 kg" <?php if ($cabang == 'Karate Putri Kumite > 60 kg') {echo "selected";} ?>>
                  Karate Putri Kumite > 60 kg
                </option>

                <option value="Karate Putra Kata Perorangan" <?php if ($cabang == 'Karate Putra Kata Perorangan') {echo "selected";} ?>>
                  Karate Putra Kata Perorangan
                </option>

                <option value="Karate Putri Kata Perorangan" <?php if ($cabang == 'Karate Putri Kata Perorangan') {echo "selected";} ?>>
                  Karate Putri Kata Perorangan
                </option>

                <option value="Karate Putra Kata Beregu" <?php if ($cabang == 'Karate Putra Kata Beregu') {echo "selected";} ?>>
                  Karate Putra Kata Beregu
                </option>

                <option value="Karate Putri Kata Beregu" <?php if ($cabang == 'Karate Putri Kata Beregu') {echo "selected";} ?>>
                  Karate Putri Kata Beregu
                </option>
              </optgroup>

              <optgroup label="Pencak Silat">
                <option value="Pencak Silat Putra Kelas A (45-50 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas A (45-50 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas A (45-50 kg)
                </option>

                <option value="Pencak Silat Putri Kelas A (45-50 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas A (45-50 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas A (45-50 kg)
                </option>

                <option value="Pencak Silat Putra Kelas B (50-55 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas B (50-55 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas B (50-55 kg)
                </option>

                <option value="Pencak Silat Putri Kelas B (50-55 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas B (50-55 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas B (50-55 kg)
                </option>

                <option value="Pencak Silat Putra Kelas C (55-60 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas C (55-60 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas C (55-60 kg)
                </option>

                <option value="Pencak Silat Putri Kelas C (55-60 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas C (55-60 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas C (55-60 kg)
                </option>

                <option value="Pencak Silat Putra Kelas D (60-65 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas D (60-65 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas D (60-65 kg)
                </option>

                <option value="Pencak Silat Putri Kelas D (60-65 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas D (60-65 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas D (60-65 kg)
                </option>

                <option value="Pencak Silat Putra Kelas E (65-70 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas E (65-70 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas E (65-70 kg)
                </option>

                <option value="Pencak Silat Putri Kelas E (65-70 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas E (65-70 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas E (65-70 kg)
                </option>

                <option value="Pencak Silat Putra Kelas F (70-75 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas F (70-75 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas F (70-75 kg)
                </option>

                <option value="Pencak Silat Putra Tunggal Atraksi" <?php if ($cabang == 'Pencak Silat Putra Tunggal Atraksi') {echo "selected";} ?>>
                  Pencak Silat Putra Tunggal Atraksi
                </option>

                <option value="Pencak Silat Putri Tunggal Atraksi" <?php if ($cabang == 'Pencak Silat Putri Tunggal Atraksi') {echo "selected";} ?>>
                  Pencak Silat Putri Tunggal Atraksi
                </option>
              </optgroup>

              <optgroup label="Taekwondo">
                <option value="Taekwondo Putra Under 54 Kg" <?php if ($cabang == 'Taekwondo Putra Under 54 Kg') {echo "selected";} ?>>
                  Taekwondo Putra Under 54 Kg
                </option>

                <option value="Taekwondo Putra Under 58 Kg (> 54-58 Kg)" <?php if ($cabang == 'Taekwondo Putra Under 58 Kg (> 54-58 Kg)') {echo "selected";} ?>>
                  Taekwondo Putra Under 58 Kg (> 54-58 Kg)
                </option>

                <option value="Taekwondo Putra Under 63 Kg (> 58-63 Kg)" <?php if ($cabang == 'Taekwondo Putra Under 63 Kg (> 58-63 Kg)') {echo "selected";} ?>>
                  Taekwondo Putra Under 63 Kg (> 58-63 Kg)
                </option>

                <option value="Taekwondo Putra Under 68 Kg (> 63-68 Kg)" <?php if ($cabang == 'Taekwondo Putra Under 68 Kg (> 63-68 Kg)') {echo "selected";} ?>>
                  Taekwondo Putra Under 68 Kg (> 63-68 Kg)
                </option>
                <option value="Taekwondo Putra Under 74 Kg (> 68-74 Kg)" <?php if ($cabang == 'Taekwondo Putra Under 74 Kg (> 68-74 Kg)') {echo "selected";} ?>>
                  Taekwondo Putra Under 74 Kg (> 68-74 Kg)
                </option>

                <option value="Taekwondo Putri Under 46 Kg" <?php if ($cabang == 'Taekwondo Putri Under 46 Kg') {echo "selected";} ?>>
                  Taekwondo Putri Under 46 Kg
                </option>

                <option value="Taekwondo Putri Under 49 Kg (> 46-49 Kg)" <?php if ($cabang == 'Taekwondo Putri Under 49 Kg (> 46-49 Kg)') {echo "selected";} ?>>
                  Taekwondo Putri Under 49 Kg (> 46-49 Kg)
                </option>

                <option value="Taekwondo Putri Under 53 Kg (> 49-53 Kg)" <?php if ($cabang == 'Taekwondo Putri Under 53 Kg (> 49-53 Kg)') {echo "selected";} ?>>
                  Taekwondo Putri Under 53 Kg (> 49-53 Kg)
                </option>

                <option value="Taekwondo Putri Under 57 Kg (> 53-57 Kg)" <?php if ($cabang == 'Taekwondo Putri Under 57 Kg (> 53-57 Kg)') {echo "selected";} ?>>
                  Taekwondo Putri Under 57 Kg (> 53-57 Kg)
                </option>

                <option value="Taekwondo Putri Under 57 Kg (> 57-62 Kg)" <?php if ($cabang == 'Taekwondo Putri Under 57 Kg (> 57-62 Kg)') {echo "selected";} ?>>
                  Taekwondo Putri Under 57 Kg (> 57-62 Kg)
                </option>

                <option value="Taekwondo Putra Pomsae Individu" <?php if ($cabang == 'Taekwondo Putra Pomsae Individu') {echo "selected";} ?>>
                  Taekwondo Putra Pomsae Individu
                </option>

                <option value="Taekwondo Putri Pomsae Individu" <?php if ($cabang == 'Taekwondo Putri Pomsae Individu') {echo "selected";} ?>>
                  Taekwondo Putri Pomsae Individu
                </option>

                <option value="Taekwondo Putra Pomsae Beregu" <?php if ($cabang == 'Taekwondo Putri Pomsae Individu') {echo "selected";} ?>>
                  Taekwondo Putra Pomsae Beregu
                </option>

                <option value="Taekwondo Putri Pomsae Beregu" <?php if ($cabang == 'Taekwondo Putri Pomsae Individu') {echo "selected";} ?>>
                  Taekwondo Putri Pomsae Beregu
                </option>
              </optgroup>

              <optgroup label="Solo Song">
                <option value="Solo Song Pop Putra" <?php if ($cabang == 'Solo Song Pop Putra') {echo "selected";} ?>>
                  Solo Song Pop Putra
                </option>

                <option value="Solo Song Pop Putri" <?php if ($cabang == 'Solo Song Pop Putri') {echo "selected";} ?>>
                  Solo Song Pop Putri
                </option>

                <option value="Solo Song Dangdut Putra" <?php if ($cabang == 'Solo Song Dangdut Putra') {echo "selected";} ?>>
                  Solo Song Dangdut Putra
                </option>

                <option value="Solo Song Dangdut Putri" <?php if ($cabang == 'Solo Song Dangdut Putri') {echo "selected";} ?>>
                  Solo Song Dangdut Putri
                </option>

                <option value="Solo Song Melayu Putra" <?php if ($cabang == 'Solo Song Melayu Putra') {echo "selected";} ?>>
                  Solo Song Melayu Putra
                </option>

                <option value="Solo Song Melayu Putri" <?php if ($cabang == 'Solo Song Melayu Putri') {echo "selected";} ?>>
                  Solo Song Melayu Putri
                </option>
              </optgroup>

              <optgroup label="Puisi">
                <option value="Puisi Putra" <?php if ($cabang == 'Puisi Putra') {echo "selected";} ?>>
                  Puisi Putra
                </option>

                <option value="Puisi Putri" <?php if ($cabang == 'Puisi Putri') {echo "selected";} ?>>
                  Puisi Putri
                </option>
              </optgroup>

              <optgroup label="Karikatur">
                <option value="Karikatur Putra" <?php if ($cabang == 'Karikatur Putra') {echo "selected";} ?>>
                  Karikatur Putra
                </option>

                <option value="Karikatur Putri" <?php if ($cabang == 'Karikatur Putri') {echo "selected";} ?>>
                  Karikatur Putri
                </option>
              </optgroup>

              <optgroup label="Fotografi">
                <option value="Fotografi Foto Warna Putra" <?php if ($cabang == 'Fotografi Foto Warna Putra') {echo "selected";} ?>>
                  Fotografi Foto Warna Putra
                </option>

                <option value="Fotografi Foto Warna Putri" <?php if ($cabang == 'Fotografi Foto Warna Putri') {echo "selected";} ?>>
                  Fotografi Foto Warna Putri
                </option>

                <option value="Fotografi Foto Hitam Putih Putra" <?php if ($cabang == 'Fotografi Foto Hitam Putih Putra') {echo "selected";} ?>>
                  Fotografi Foto Hitam Putih Putra
                </option>
                
                <option value="Fotografi Foto Hitam Putih Putri" <?php if ($cabang == 'Fotografi Foto Hitam Putih Putri') {echo "selected";} ?>>
                  Fotografi Foto Hitam Putih Putri
                </option>
              </optgroup>

              <optgroup label="Kaligrafi">
                <option value="Kaligrafi Khat/Arab Putra" <?php if ($cabang == 'Kaligrafi Khat/Arab Putra') {echo "selected";} ?>>
                  Kaligrafi Khat/Arab Putra
                </option>

                <option value="Kaligrafi Khat/Arab Putri" <?php if ($cabang == 'Kaligrafi Khat/Arab Putri') {echo "selected";} ?>>
                  Kaligrafi Khat/Arab Putri
                </option>

                <option value="Kaligrafi Umum/Latin Putra" <?php if ($cabang == 'Kaligrafi Umum/Latin Putra') {echo "selected";} ?>>
                  Kaligrafi Umum/Latin Putra
                </option>

                <option value="Kaligrafi Umum/Latin Putri" <?php if ($cabang == 'Kaligrafi Umum/Latin Putri') {echo "selected";} ?>>
                  Kaligrafi Umum/Latin Putri
                </option>
              </optgroup>

              <optgroup label="Nasyid">
                <option value="Nasyid Acapela Putra" <?php if ($cabang == 'Nasyid Acapela Putra') {echo "selected";} ?>>
                  Nasyid Acapela Putra
                </option>
              </optgroup>

              <optgroup label="Monolog">
                <option value="Monolog Putra" <?php if ($cabang == 'Monolog Putra') {echo "selected";} ?>>
                  Monolog Putra
                </option>

                <option value="Monolog Putri" <?php if ($cabang == 'Monolog Putri') {echo "selected";} ?>>
                  Monolog Putri
                </option>
              </optgroup>
            </select>
          </div>
        </div>

        <!-- cabang -->

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilihan Cabang Olahraga Pertama </label>
          <div class="col-sm-3">
            <select name="cabang" multiple class="chosen-select-2 form-control" data-placeholder="Silahkan Pilih Cabang Anda...">
              <optgroup label="Atletik">
                <option value="Atletik Putra 100 M" <?php if ($cabang == 'Atletik Putra 100 M') {echo "selected";} ?>>
                  Atletik Putra 100 M
                </option>

                <option value="Atletik Putri 100 M" <?php if ($cabang == 'Atletik Putri 100 M') {echo "selected";} ?>>
                  Atletik Putri 100 M
                </option>

                <option value="Atletik Putra 5000 M" <?php if ($cabang == 'Atletik Putra 5000 M') {echo "selected";} ?>>
                  Atletik Putra 5000 M
                </option>

                <option value="Atletik Putri 5000 M" <?php if ($cabang == 'Atletik Putri 5000 M') {echo "selected";} ?>>
                  Atletik Putri 5000 M
                </option>
              </optgroup>

              <optgroup label="Basket">
                <option value="Basket Putra" <?php if ($cabang == 'Basket Putra') {echo "selected";} ?>>
                  Basket Putra
                </option>

                <option value="Basket Putri" <?php if ($cabang == 'Basket Putri') {echo "selected";} ?>>
                  Basket Putri
                </option>
              </optgroup>

              <optgroup label="Futsal">
                <option value="Futsal Putra" <?php if ($cabang == 'Futsal Putra') {echo "selected";} ?>>
                  Futsal Putra
                </option>

                <option value="Futsal Putri" <?php if ($cabang == 'Futsal Putri') {echo "selected";} ?>>
                  Futsal Putri
                </option>
              </optgroup>

              <optgroup label="Bulutangkis">
                <option value="Bulutangkis Tunggal Putra Perorang" <?php if ($cabang == 'Bulutangkis Tunggal Putra Perorang') {echo "selected";} ?>>
                  Bulutangkis Tunggal Putra Perorang
                </option>

                <option value="Bulutangkis Tunggal Putri Perorang" <?php if ($cabang == 'Bulutangkis Tunggal Putri Perorang') {echo "selected";} ?>>
                  Bulutangkis Tunggal Putri Perorang
                </option>

                <option value="Bulutangkis Ganda Putra Perorang" <?php if ($cabang == 'Bulutangkis Ganda Putra Perorang') {echo "selected";} ?>>
                  Bulutangkis Ganda Putra Perorang
                </option>

                <option value="Bulutangkis Ganda Putri Perorang" <?php if ($cabang == 'Bulutangkis Ganda Putri Perorang') {echo "selected";} ?>>
                  Bulutangkis Ganda Putri Perorang
                </option>

                <option value="Bulutangkis Beregu Putra" <?php if ($cabang == 'Bulutangkis Beregu Putra') {echo "selected";} ?>>
                  Bulutangkis Beregu Putra
                </option>

                <option value="Bulutangkis Beregu Putri" <?php if ($cabang == 'Bulutangkis Beregu Putri') {echo "selected";} ?>>
                  Bulutangkis Beregu Putri
                </option>

                <option value="Bulutangkis Campuran" <?php if ($cabang == 'Bulutangkis Campuran') {echo "selected";} ?>>
                  Bulutangkis Campuran
                </option>
              </optgroup>

              <optgroup label="Catur Meja">
                <option value="Catur Meja 1 Putra" <?php if ($cabang == 'Catur Meja 1 Putra') {echo "selected";} ?>>
                  Catur Meja 1 Putra
                </option>

                <option value="Catur Meja 1 Putri" <?php if ($cabang == 'Catur Meja 1 Putri') {echo "selected";} ?>>
                  Catur Meja 1 Putri
                </option>

                <option value="Catur Meja 2 Putra" <?php if ($cabang == 'Catur Meja 2 Putra') {echo "selected";} ?>>
                  Catur Meja 2 Putra
                </option>

                <option value="Catur Meja 2 Putri" <?php if ($cabang == 'Catur Meja 2 Putri') {echo "selected";} ?>>
                  Catur Meja 2 Putri
                </option>

                <option value="Catur Meja 3 Putra" <?php if ($cabang == 'Catur Meja 3 Putra') {echo "selected";} ?>>
                  Catur Meja 3 Putra
                </option>

                <option value="Catur Meja 3 Putri" <?php if ($cabang == 'Catur Meja 3 Putri') {echo "selected";} ?>>
                  Catur Meja 3 Putri
                </option>

                <option value="Catur Beregu Putra" <?php if ($cabang == 'Catur Beregu Putra') {echo "selected";} ?>>
                  Catur Beregu Putra
                </option>

                <option value="Catur Beregu Putri" <?php if ($cabang == 'Catur Beregu Putri') {echo "selected";} ?>>
                  Catur Beregu Putri
                </option>
              </optgroup>

              <optgroup label="Panjat Tebing">
                <option value="Panjat Tebing Lead Putra" <?php if ($cabang == 'Panjat Tebing Lead Putra') {echo "selected";} ?>>
                  Panjat Tebing Lead Putra
                </option>

                <option value="Panjat Tebing Lead Putri" <?php if ($cabang == 'Panjat Tebing Lead Putri') {echo "selected";} ?>>
                  Panjat Tebing Lead Putri
                </option>

                <option value="Panjat Tebing Speed Putra" <?php if ($cabang == 'Panjat Tebing Speed Putra') {echo "selected";} ?>>
                  Panjat Tebing Speed Putra
                </option>

                <option value="Panjat Tebing Speed Putri" <?php if ($cabang == 'Panjat Tebing Speed Putri') {echo "selected";} ?>>
                  Panjat Tebing Speed Putri
                </option>

                <option value="Panjat Tebing Boulder Putra" <?php if ($cabang == 'Panjat Tebing Boulder Putra') {echo "selected";} ?>>
                  Panjat Tebing Boulder Putra
                </option>

                <option value="Panjat Tebing Boulder Putri" <?php if ($cabang == 'Panjat Tebing Boulder Putri') {echo "selected";} ?>>
                  Panjat Tebing Boulder Putri
                </option>
              </optgroup>

              <optgroup label="Voli">
                <option value="Voli Putra" <?php if ($cabang == 'Voli Putra') {echo "selected";} ?>>
                  Voli Putra
                </option>

                <option value="Voli Putri" <?php if ($cabang == 'Voli Putri') {echo "selected";} ?>>
                  Voli Putri
                </option>
              </optgroup>

              <optgroup label="Tenis Meja">
                <option value="Tenis Meja Tunggal Putra Perorangan" <?php if ($cabang == 'Tenis Meja Tunggal Putra Perorangan') {echo "selected";} ?>>
                  Tenis Meja Tunggal Putra Perorangan
                </option>

                <option value="Tenis Meja Tunggal Putri Perorangan" <?php if ($cabang == 'Tenis Meja Tunggal Putri Perorangan') {echo "selected";} ?>>
                  Tenis Meja Tunggal Putri Perorangan
                </option>

                <option value="Tenis Meja Ganda Putra Perorangan" <?php if ($cabang == 'Tenis Meja Ganda Putra Perorangan') {echo "selected";} ?>>
                  Tenis Meja Ganda Putra Perorangan
                </option>

                <option value="Tenis Meja Ganda Putri Perorangan" <?php if ($cabang == 'Tenis Meja Ganda Putri Perorangan') {echo "selected";} ?>>
                  Tenis Meja Ganda Putri Perorangan
                </option>

                <option value="Tenis Meja Beregu Putra" <?php if ($cabang == 'Tenis Meja Beregu Putra') {echo "selected";} ?>>
                  Tenis Meja Beregu Putra
                </option>

                <option value="Tenis Meja Beregu Putri" <?php if ($cabang == 'Tenis Meja Beregu Putri') {echo "selected";} ?>>
                  Tenis Meja Beregu Putra
                </option>

                <option value="Tenis Meja Campuran" <?php if ($cabang == 'Tenis Meja Campuran') {echo "selected";} ?>>
                  Tenis Meja Campuran
                </option>
              </optgroup>

              <optgroup label="Karate">
                <option value="Karate Putra Kumite - 55 kg" <?php if ($cabang == 'Karate Putra Kumite - 55 kg') {echo "selected";} ?>>
                  Karate Putra Kumite - 55 kg
                </option>

                <option value="Karate Putra Kumite - 60 kg" <?php if ($cabang == 'Karate Putra Kumite - 60 kg') {echo "selected";} ?>>
                  Karate Putra Kumite - 60 kg
                </option>

                <option value="Karate Putra Kumite - 65 kg" <?php if ($cabang == 'Karate Putra Kumite - 65 kg') {echo "selected";} ?>>
                  Karate Putra Kumite - 65 kg
                </option>

                <option value="Karate Putra Kumite - 75 kg" <?php if ($cabang == 'Karate Putra Kumite - 75 kg') {echo "selected";} ?>>
                  Karate Putra Kumite - 75 kg
                </option>

                <option value="Karate Putri Kumite - 48 kg" <?php if ($cabang == 'Karate Putri Kumite - 48 kg') {echo "selected";} ?>>
                  Karate Putri Kumite - 48 kg
                </option>

                <option value="Karate Putri Kumite - 50 kg" <?php if ($cabang == 'Karate Putri Kumite - 50 kg') {echo "selected";} ?>>
                  Karate Putri Kumite - 50 kg
                </option>

                <option value="Karate Putri Kumite - 53 kg" <?php if ($cabang == 'Karate Putri Kumite - 53 kg') {echo "selected";} ?>>
                  Karate Putri Kumite - 53 kg
                </option>

                <option value="Karate Putri Kumite - 60 kg" <?php if ($cabang == 'Karate Putri Kumite - 60 kg') {echo "selected";} ?>>
                  Karate Putri Kumite - 60 kg
                </option>

                <option value="Karate Putri Kumite > 60 kg" <?php if ($cabang == 'Karate Putri Kumite > 60 kg') {echo "selected";} ?>>
                  Karate Putri Kumite > 60 kg
                </option>

                <option value="Karate Putra Kata Perorangan" <?php if ($cabang == 'Karate Putra Kata Perorangan') {echo "selected";} ?>>
                  Karate Putra Kata Perorangan
                </option>

                <option value="Karate Putri Kata Perorangan" <?php if ($cabang == 'Karate Putri Kata Perorangan') {echo "selected";} ?>>
                  Karate Putri Kata Perorangan
                </option>

                <option value="Karate Putra Kata Beregu" <?php if ($cabang == 'Karate Putra Kata Beregu') {echo "selected";} ?>>
                  Karate Putra Kata Beregu
                </option>

                <option value="Karate Putri Kata Beregu" <?php if ($cabang == 'Karate Putri Kata Beregu') {echo "selected";} ?>>
                  Karate Putri Kata Beregu
                </option>
              </optgroup>

              <optgroup label="Pencak Silat">
                <option value="Pencak Silat Putra Kelas A (45-50 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas A (45-50 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas A (45-50 kg)
                </option>

                <option value="Pencak Silat Putri Kelas A (45-50 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas A (45-50 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas A (45-50 kg)
                </option>

                <option value="Pencak Silat Putra Kelas B (50-55 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas B (50-55 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas B (50-55 kg)
                </option>

                <option value="Pencak Silat Putri Kelas B (50-55 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas B (50-55 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas B (50-55 kg)
                </option>

                <option value="Pencak Silat Putra Kelas C (55-60 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas C (55-60 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas C (55-60 kg)
                </option>

                <option value="Pencak Silat Putri Kelas C (55-60 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas C (55-60 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas C (55-60 kg)
                </option>

                <option value="Pencak Silat Putra Kelas D (60-65 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas D (60-65 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas D (60-65 kg)
                </option>

                <option value="Pencak Silat Putri Kelas D (60-65 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas D (60-65 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas D (60-65 kg)
                </option>

                <option value="Pencak Silat Putra Kelas E (65-70 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas E (65-70 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas E (65-70 kg)
                </option>

                <option value="Pencak Silat Putri Kelas E (65-70 kg)" <?php if ($cabang == 'Pencak Silat Putri Kelas E (65-70 kg)') {echo "selected";} ?>>
                  Pencak Silat Putri Kelas E (65-70 kg)
                </option>

                <option value="Pencak Silat Putra Kelas F (70-75 kg)" <?php if ($cabang == 'Pencak Silat Putra Kelas F (70-75 kg)') {echo "selected";} ?>>
                  Pencak Silat Putra Kelas F (70-75 kg)
                </option>

                <option value="Pencak Silat Putra Tunggal Atraksi" <?php if ($cabang == 'Pencak Silat Putra Tunggal Atraksi') {echo "selected";} ?>>
                  Pencak Silat Putra Tunggal Atraksi
                </option>

                <option value="Pencak Silat Putri Tunggal Atraksi" <?php if ($cabang == 'Pencak Silat Putri Tunggal Atraksi') {echo "selected";} ?>>
                  Pencak Silat Putri Tunggal Atraksi
                </option>
              </optgroup>

              <optgroup label="Taekwondo">
                <option value="Taekwondo Putra Under 54 Kg" <?php if ($cabang == 'Taekwondo Putra Under 54 Kg') {echo "selected";} ?>>
                  Taekwondo Putra Under 54 Kg
                </option>

                <option value="Taekwondo Putra Under 58 Kg (> 54-58 Kg)" <?php if ($cabang == 'Taekwondo Putra Under 58 Kg (> 54-58 Kg)') {echo "selected";} ?>>
                  Taekwondo Putra Under 58 Kg (> 54-58 Kg)
                </option>

                <option value="Taekwondo Putra Under 63 Kg (> 58-63 Kg)" <?php if ($cabang == 'Taekwondo Putra Under 63 Kg (> 58-63 Kg)') {echo "selected";} ?>>
                  Taekwondo Putra Under 63 Kg (> 58-63 Kg)
                </option>

                <option value="Taekwondo Putra Under 68 Kg (> 63-68 Kg)" <?php if ($cabang == 'Taekwondo Putra Under 68 Kg (> 63-68 Kg)') {echo "selected";} ?>>
                  Taekwondo Putra Under 68 Kg (> 63-68 Kg)
                </option>
                <option value="Taekwondo Putra Under 74 Kg (> 68-74 Kg)" <?php if ($cabang == 'Taekwondo Putra Under 74 Kg (> 68-74 Kg)') {echo "selected";} ?>>
                  Taekwondo Putra Under 74 Kg (> 68-74 Kg)
                </option>

                <option value="Taekwondo Putri Under 46 Kg" <?php if ($cabang == 'Taekwondo Putri Under 46 Kg') {echo "selected";} ?>>
                  Taekwondo Putri Under 46 Kg
                </option>

                <option value="Taekwondo Putri Under 49 Kg (> 46-49 Kg)" <?php if ($cabang == 'Taekwondo Putri Under 49 Kg (> 46-49 Kg)') {echo "selected";} ?>>
                  Taekwondo Putri Under 49 Kg (> 46-49 Kg)
                </option>

                <option value="Taekwondo Putri Under 53 Kg (> 49-53 Kg)" <?php if ($cabang == 'Taekwondo Putri Under 53 Kg (> 49-53 Kg)') {echo "selected";} ?>>
                  Taekwondo Putri Under 53 Kg (> 49-53 Kg)
                </option>

                <option value="Taekwondo Putri Under 57 Kg (> 53-57 Kg)" <?php if ($cabang == 'Taekwondo Putri Under 57 Kg (> 53-57 Kg)') {echo "selected";} ?>>
                  Taekwondo Putri Under 57 Kg (> 53-57 Kg)
                </option>

                <option value="Taekwondo Putri Under 57 Kg (> 57-62 Kg)" <?php if ($cabang == 'Taekwondo Putri Under 57 Kg (> 57-62 Kg)') {echo "selected";} ?>>
                  Taekwondo Putri Under 57 Kg (> 57-62 Kg)
                </option>

                <option value="Taekwondo Putra Pomsae Individu" <?php if ($cabang == 'Taekwondo Putra Pomsae Individu') {echo "selected";} ?>>
                  Taekwondo Putra Pomsae Individu
                </option>

                <option value="Taekwondo Putri Pomsae Individu" <?php if ($cabang == 'Taekwondo Putri Pomsae Individu') {echo "selected";} ?>>
                  Taekwondo Putri Pomsae Individu
                </option>

                <option value="Taekwondo Putra Pomsae Beregu" <?php if ($cabang == 'Taekwondo Putri Pomsae Individu') {echo "selected";} ?>>
                  Taekwondo Putra Pomsae Beregu
                </option>

                <option value="Taekwondo Putri Pomsae Beregu" <?php if ($cabang == 'Taekwondo Putri Pomsae Individu') {echo "selected";} ?>>
                  Taekwondo Putri Pomsae Beregu
                </option>
              </optgroup>

              <optgroup label="Solo Song">
                <option value="Solo Song Pop Putra" <?php if ($cabang == 'Solo Song Pop Putra') {echo "selected";} ?>>
                  Solo Song Pop Putra
                </option>

                <option value="Solo Song Pop Putri" <?php if ($cabang == 'Solo Song Pop Putri') {echo "selected";} ?>>
                  Solo Song Pop Putri
                </option>

                <option value="Solo Song Dangdut Putra" <?php if ($cabang == 'Solo Song Dangdut Putra') {echo "selected";} ?>>
                  Solo Song Dangdut Putra
                </option>

                <option value="Solo Song Dangdut Putri" <?php if ($cabang == 'Solo Song Dangdut Putri') {echo "selected";} ?>>
                  Solo Song Dangdut Putri
                </option>

                <option value="Solo Song Melayu Putra" <?php if ($cabang == 'Solo Song Melayu Putra') {echo "selected";} ?>>
                  Solo Song Melayu Putra
                </option>

                <option value="Solo Song Melayu Putri" <?php if ($cabang == 'Solo Song Melayu Putri') {echo "selected";} ?>>
                  Solo Song Melayu Putri
                </option>
              </optgroup>

              <optgroup label="Puisi">
                <option value="Puisi Putra" <?php if ($cabang == 'Puisi Putra') {echo "selected";} ?>>
                  Puisi Putra
                </option>

                <option value="Puisi Putri" <?php if ($cabang == 'Puisi Putri') {echo "selected";} ?>>
                  Puisi Putri
                </option>
              </optgroup>

              <optgroup label="Karikatur">
                <option value="Karikatur Putra" <?php if ($cabang == 'Karikatur Putra') {echo "selected";} ?>>
                  Karikatur Putra
                </option>

                <option value="Karikatur Putri" <?php if ($cabang == 'Karikatur Putri') {echo "selected";} ?>>
                  Karikatur Putri
                </option>
              </optgroup>

              <optgroup label="Fotografi">
                <option value="Fotografi Foto Warna Putra" <?php if ($cabang == 'Fotografi Foto Warna Putra') {echo "selected";} ?>>
                  Fotografi Foto Warna Putra
                </option>

                <option value="Fotografi Foto Warna Putri" <?php if ($cabang == 'Fotografi Foto Warna Putri') {echo "selected";} ?>>
                  Fotografi Foto Warna Putri
                </option>

                <option value="Fotografi Foto Hitam Putih Putra" <?php if ($cabang == 'Fotografi Foto Hitam Putih Putra') {echo "selected";} ?>>
                  Fotografi Foto Hitam Putih Putra
                </option>
                
                <option value="Fotografi Foto Hitam Putih Putri" <?php if ($cabang == 'Fotografi Foto Hitam Putih Putri') {echo "selected";} ?>>
                  Fotografi Foto Hitam Putih Putri
                </option>
              </optgroup>

              <optgroup label="Kaligrafi">
                <option value="Kaligrafi Khat/Arab Putra" <?php if ($cabang == 'Kaligrafi Khat/Arab Putra') {echo "selected";} ?>>
                  Kaligrafi Khat/Arab Putra
                </option>

                <option value="Kaligrafi Khat/Arab Putri" <?php if ($cabang == 'Kaligrafi Khat/Arab Putri') {echo "selected";} ?>>
                  Kaligrafi Khat/Arab Putri
                </option>

                <option value="Kaligrafi Umum/Latin Putra" <?php if ($cabang == 'Kaligrafi Umum/Latin Putra') {echo "selected";} ?>>
                  Kaligrafi Umum/Latin Putra
                </option>

                <option value="Kaligrafi Umum/Latin Putri" <?php if ($cabang == 'Kaligrafi Umum/Latin Putri') {echo "selected";} ?>>
                  Kaligrafi Umum/Latin Putri
                </option>
              </optgroup>

              <optgroup label="Nasyid">
                <option value="Nasyid Acapela Putra" <?php if ($cabang == 'Nasyid Acapela Putra') {echo "selected";} ?>>
                  Nasyid Acapela Putra
                </option>
              </optgroup>

              <optgroup label="Monolog">
                <option value="Monolog Putra" <?php if ($cabang == 'Monolog Putra') {echo "selected";} ?>>
                  Monolog Putra
                </option>

                <option value="Monolog Putri" <?php if ($cabang == 'Monolog Putri') {echo "selected";} ?>>
                  Monolog Putri
                </option>
              </optgroup>
            </select>
          </div>
        </div>

        <!-- Submit -->
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right"></label>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
          </div>
        </div>
      
      
      
      </div>
      </form>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->


<!-- <?php 
  if ($op == 'edit' && $cabang != '') { ?>
      <script type="text/javascript">
        // $('.chosen-select').val(<?php echo $cabang ?>);
        alert('bisa nih gan');
      </script>
<?php      
  }
?>-->


<script type="text/javascript">
    //datepicker plugin
    //link
    $('.date-picker').datepicker({
      autoclose: true,
      todayHighlight: true
    })
    //show datepicker when clicking on the icon
    .next().on(ace.click_event, function(){
      $(this).prev().focus();
    });			
</script>


<script>
  function pictUpload () {
    $('.upload_btn').on('change', function() {
      if (typeof (FileReader) != "undefined") {
        var image_holder = $('.image_preview');
        image_holder.empty();

        var reader = new FileReader();
        reader.onload = function(e) {
          $('<img >', {
            'src': e.target.result,
            'id' : 'avatar',
            'class': 'pict_url editable img-responsive'
          }).appendTo(image_holder);

          // var image = new Image();

          // image.src = reader.result;

          // image.onload = function() {
          //     alert(image.width);
        };
        // alert(image_holder);
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
      }

      else {
        alert("cant show up the picture. please change your browser to use it properly");
      };
        //verifikasi
        var fileSize = this.files[0].size/1024/1024;
        if(fileSize>2)
        {
         var n = fileSize.toFixed(2);
            alert('Your file size is: ' + n + "MB, and it is too large to upload! Please try to upload smaller file (25MB or less).");
            $('.image_preview').css('display', 'none');
            // $('.image_preview').src('');
            $('.upload_btn').val("");

        }
        else
        {
            //alert('File size is OK');
            $(this).show();
        }
    });
    
    $('.upload_btn_ss_forlap').on('change', function() {
      if (typeof (FileReader) != "undefined") {
        var image_holder = $('.image_preview1');
        image_holder.empty();

        var reader = new FileReader();
        reader.onload = function(e) {
          $('<img >', {
            'src': e.target.result,
            'id' : 'avatar',
            'class': 'pict_url editable img-responsive'
          }).appendTo(image_holder);

          // var image = new Image();

          // image.src = reader.result;

          // image.onload = function() {
          //     alert(image.width);
        };
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
      }

      else {
        alert("cant show up the picture. please change your browser to use it properly");
      };
    });


    $('.upload_btn_ss_ktp').on('change', function() {
      if (typeof (FileReader) != "undefined") {
        var image_holder = $('.image_preview3');
        image_holder.empty();

        var reader = new FileReader();
        reader.onload = function(e) {
          $('<img >', {
            'src': e.target.result,
            'id' : 'avatar',
            'class': 'pict_url editable img-responsive'
          }).appendTo(image_holder);

          // var image = new Image();

          // image.src = reader.result;

          // image.onload = function() {
          //     alert(image.width);
        };
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
      }

      else {
        alert("cant show up the picture. please change your browser to use it properly");
      };
    });

    $('.upload_btn_ss_ktm').on('change', function() {
      if (typeof (FileReader) != "undefined") {
        var image_holder = $('.image_preview2');
        image_holder.empty();

        var reader = new FileReader();
        reader.onload = function(e) {
          $('<img >', {
            'src': e.target.result,
            'id' : 'avatar',
            'class': 'pict_url editable img-responsive'
          }).appendTo(image_holder);

          // var image = new Image();

          // image.src = reader.result;

          // image.onload = function() {
          //     alert(image.width);
        };
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
      }

      else {
        alert("cant show up the picture. please change your browser to use it properly");
      };
    });
      
  }

  $(document).ready(pictUpload);
  // $(document).ready(function() {
  //   $('.upload_btn').bind('change', function() {
  //     alert('This file size is: ' + this.files[0].size/1024/1024 + "MB");
  //     alert('This file width is: ' + this.files[0].clientWidth);

  //   // var img = document.getElementById('avatar'); 
  //     // alert(img.clientWidth);
  //     alert('width');
    
  //     //or however you get a handle to the IMG
  //     var width = img.clientWidth;
  //     var height = img.clientHeight;
  //   });
  // });
</script>
  
<script>

  $('.chosen-select-1').chosen({
    allow_single_deselect:true,
    max_selected_options: 2,
    display_disabled_options: false
  }).each(function () {
      $(this).on('chosen:showing_dropdown', function (event, params) {
          $('optgroup:contains("Atletik")', $(this)).attr('disabled', true);
          
      });
  }).$(this).trigger("chosen:updated");;

  // $('.chosen-select-1').on('click', function() {
  //   var optValue = $(this).find("option:selected").closest('optgroup').prop('label');
  //   $('.chosen-select-1').on('change', function(evt, params) {
    
  //   })
    
  // });

  // $('.chosen-select-1').each(function () {
  //     $(this).on('chosen:showing_dropdown', function (event, params) {
  //       $('option:contains("Atletik Putra 100 M")',$(this)).attr('disabled', true);
  //       $(this).trigger("chosen:updated");
  //     });
  // });
</script>

<!-- <script>
  $('.chosen-select-1').each(function () {
      $(this).on('chosen:showing_dropdown', function (event, params) {
        $('option:contains("Atletik Putra 100 M")',$(this)).attr('disabled', true);
        $(this).trigger("chosen:updated");
      });
  });
</script> -->

<!-- <script>
  $(function () {
    var gameConsoleOptions = $('.chosen-select-2 optgroup');

    $(".chosen-select-1").on("change", function () {
      var label = $(this).find("option:selected").closest('optgroup').prop('label');
      if (label) {
        gameConsoleOptions.hide();
          gameConsoleOptions.filter(function (index, value) {
            return $(this).prop('label') === label;
          }).show();
      } else{
          gameConsoleOptions.show();
      }
    });
  });
</script> -->



<!-- <script>
  function aca () {
    try {//ie8 throws some harmless exceptions, so let's catch'em
			
			//first let's add a fake appendChild method for Image element for browsers that have a problem with this
			//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
			try {
				document.createElement('IMG').appendChild(document.createElement('B'));
			} catch(e) {
				Image.prototype.appendChild = function(el){}
			}
	
			var last_gritter
			$('#avatar').editable({
				type: 'image',
				name: 'avatar',
				value: null,
				//onblur: 'ignore',  //don't reset or hide editable onblur?!
				image: {
					//specify ace file input plugin's options here
					btn_choose: 'Change Avatar',
					droppable: true,
					maxSize: 110000,//~100Kb
	
					//and a few extra ones here
					name: 'avatar',//put the field name here as well, will be used inside the custom plugin
					on_error : function(error_type) {//on_error function will be called when the selected file has a problem
						if(last_gritter) $.gritter.remove(last_gritter);
						if(error_type == 1) {//file format error
							last_gritter = $.gritter.add({
								title: 'File is not an image!',
								text: 'Please choose a jpg|gif|png image!',
								class_name: 'gritter-error gritter-center'
							});
						} else if(error_type == 2) {//file size rror
							last_gritter = $.gritter.add({
								title: 'File too big!',
								text: 'Image size should not exceed 100Kb!',
								class_name: 'gritter-error gritter-center'
							});
						}
						else {//other error
						}
					},
					on_success : function() {
						$.gritter.removeAll();
					}
				},
					url: function(params) {
					// ***UPDATE AVATAR HERE*** //
					//for a working upload example you can replace the contents of this function with 
					//examples/profile-avatar-update.js
	
					var deferred = new $.Deferred
	
					var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
					if(!value || value.length == 0) {
						deferred.resolve();
						return deferred.promise();
					}
	
	
					//dummy upload
					setTimeout(function(){
						if("FileReader" in window) {
							//for browsers that have a thumbnail of selected image
							var thumb = $('#avatar').next().find('img').data('thumb');
							if(thumb) $('#avatar').get(0).src = thumb;
						}
						
						deferred.resolve({'status':'OK'});
	
						if(last_gritter) $.gritter.remove(last_gritter);
						last_gritter = $.gritter.add({
							title: 'Avatar Updated!',
							text: 'Uploading to server can be easily implemented. A working example is included with the template.',
							class_name: 'gritter-info gritter-center'
						});
						
					 } , parseInt(Math.random() * 800 + 800))
	
					return deferred.promise();
					
					// ***END OF UPDATE AVATAR HERE*** //
				},
				
				success: function(response, newValue) {
				}
			})
		}catch(e) {}
  }

  $(document).ready(aca);
</script> -->