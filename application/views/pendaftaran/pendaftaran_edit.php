<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                    <form data-toggle="validator" name="form1" method="post" action="<?php echo base_url();?>home/editdata">
                                        <div class="form-group col-lg-6">
                                            <label>NIM *</label>
                                            <input required class="form-control" type="text" name="txtnim" id="txtnim" value="<?php echo $detail['nim'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Nama *</label>
                                            <input required class="form-control" type="text" name="txtnama" id="txtnama" value="<?php echo $detail['name_jobseeker'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Email *</label>
                                            <input required class="form-control" type="text" name="txtemail" id="txtemail" value="<?php echo $detail['email_jobseeker'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>No. HP *</label>
                                            <input required class="form-control" type="text" name="txthp" id="txthp" value="<?php echo $detail['phone_jobseeker'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Tanggal Lahir *</label>
                                            <input required class="form-control" type="date" name="tgllahir" id="tgllahir" value="<?php echo $detail['borndate_jobseeker'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Alamat *</label>
                                            <input required class="form-control" type="text" name="txtalamat" id="txtalamat" value="<?php echo $detail['address_jobseeker'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Jenjang Pendidikan *</label>
                                            <select name="education_jobseeker" id="education_jobseeker" class="form-control" onchange="edu()">
                                							<option value="D1" <?php if($detail['education_jobseeker']=="D1"){echo "selected";} ?>>D1</option>
                                							<option value="D2"<?php if($detail['education_jobseeker']=="D2"){echo "selected";} ?>>D2</option>
                                							<option value="D3"<?php if($detail['education_jobseeker']=="D3"){echo "selected";} ?>>D3</option>
                                							<option value="D4"<?php if($detail['education_jobseeker']=="D4"){echo "selected";} ?>>D4</option>
                                							<option value="S1"<?php if($detail['education_jobseeker']=="S1"){echo "selected";} ?>>S1</option>
                                							<option value="S2"<?php if($detail['education_jobseeker']=="S2"){echo "selected";} ?>>S2</option>
                                						</select>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Asal Universitas *</label>
                                            <input required class="form-control" type="text" name="txtuniv" id="txtuniv" value="<?php echo $detail['university_jobseeker'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Jurusan *</label>
                                            <input required class="form-control" type="text" name="txtjur" id="txtjur" value="<?php echo $detail['major'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>IPK *</label>
                                            <input required class="form-control" type="text" name="txtipk" id="txtipk" value="<?php echo $detail['gpa_jobseeker'];?>">
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Reason *</label>
                                            <select name="reason" id="reason" class="form-control" onchange="edu()">
                                              <option value="Website PPKK" <?php if($detail['education_jobseeker']=="Website PPKK"){echo "selected";} ?>>Website PPKK</option>
                                    	    		<option value="Media Sosial" <?php if($detail['education_jobseeker']=="Media Sosial"){echo "selected";} ?>>Media Sosial</option>
                                    	    		<option value="Surat Kabar" <?php if($detail['education_jobseeker']=="Surat Kabar"){echo "selected";} ?>>Surat Kabar</option>
                                    	    		<option value="Spanduk" <?php if($detail['education_jobseeker']=="Spanduk"){echo "selected";} ?>>Spanduk</option>
                                    	    		<option value="Teman" <?php if($detail['education_jobseeker']=="Teman"){echo "selected";} ?>>Teman</option>
                                    	    		<option value="SMS" <?php if($detail['education_jobseeker']=="SMS"){echo "selected";} ?>>SMS</option>
                                    	    		<option value="SMS"<?php if($detail['education_jobseeker']=="Televisi"){echo "selected";} ?>>Televisi</option>
                                    	    		<option value="Lain Lain" <?php if($detail['education_jobseeker']=="Lain lain"){echo "selected";} ?>>Lain lain</option>
                                						</select>
                                            <div class='help-block with-errors'></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Tahun Masuk *</label>
                                            <input required class="form-control" type="number" name="txtthn" id="txtthn" value="<?php echo $detail['tahun'];?>">
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
