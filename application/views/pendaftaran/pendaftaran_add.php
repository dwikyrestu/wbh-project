<?php if(isset($achtung)){ ?>
<div class="alert <?php echo $alert;?>">
  <?php echo $achtung;?>
</div>
<?php } ?>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                    <form data-toggle="validator" name="form1" method="post" action="<?php echo base_url();?>home/tambahdata">
                                        <div class="form-group col-lg-6">
                                            <label>NIM *</label>
                                            <input required class="form-control" type="text" name="txtnim" id="txtnim" '"'>
                                            <div class='help-block with-errors'></div>
                                        </div>

                                        <div class="form-group  col-lg-6">
                                            <label>Nama *</label>
                                            <input required class="form-control" type="text" name="txtnama" id="txtnama" '"'>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Email *</label>
                                            <input required class="form-control" type="email" name="txtemail" id="txtemail" '"'>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>No. HP *</label>
                                            <input required class="form-control" type="number" name="txthp" id="txthp" '"'>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Tanggal Lahir *</label>
                                            <input required class="form-control" type="date" name="tgllahir" id="tgllahir" '"'>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Alamat *</label>
                                            <input required class="form-control" type="text" name="txtalamat" id="txtalamat" '"'>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Jenjang Pendidikan *</label>
                                            <select name="education_jobseeker" id="education_jobseeker" class="form-control" onchange="edu()">
                                							<option value="D1">D1</option>
                                							<option value="D2">D2</option>
                                							<option value="D3">D3</option>
                                							<option value="D4">D4</option>
                                							<option value="S1" selected="true">S1</option>
                                							<option value="S2">S2</option>
                                						</select>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Asal Universitas *</label>
                                            <input required class="form-control" type="text" name="txtuniv" id="txtuniv" value="Universitas Airlangga" readonly>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Jurusan *</label>
                                            <input required class="form-control" type="text" name="txtjur" id="txtjur" '"'>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>IPK *</label>
                                            <input required class="form-control" type="number" name="txtipk" id="txtipk" step="0.01">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Reason *</label>
                                            <select name="reason" id="reason" class="form-control" onchange="edu()">
                                              <option value="Website PPKK" selected="true">Website PPKK</option>
                                    	    		<option value="Media Sosial" >Media Sosial</option>
                                    	    		<option value="Surat Kabar">Surat Kabar</option>
                                    	    		<option value="Spanduk">Spanduk</option>
                                    	    		<option value="Teman">Teman</option>
                                    	    		<option value="SMS">SMS</option>
                                    	    		<option value="SMS">Televisi</option>
                                    	    		<option value="Lain Lain">Lain lain</option>
                                						</select>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Tahun Masuk *</label>
                                            <input required class="form-control" type="number" name="txtthn" id="txtthn" '"'>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <center>
                                        <div class="form-group col-lg-12">
                                            <button type="submit" name="submit" value="submit" class="btn btn-sm btn-primary">Submit</button>
                                            <button type="reset" name="reset" value="clear form" class="btn btn-sm btn-danger " >Reset Field</button>
                                            <button class="btn btn-sm btn-warning" onclick="window.history.back()">Cancel</button>
                                        </div>
                                        <div class="col-lg-12">
                                            *&nbsp;&nbsp; Wajib diisi
                                        </div>
                                      </center>
                                    </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
