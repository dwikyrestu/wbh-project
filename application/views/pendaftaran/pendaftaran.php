
<div class="alert <?php echo $this->session->flashdata('alert');?>">
  <?php echo $this->session->flashdata('msg');?>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Data Pendaftaran</h3>
            <a href="<?php echo base_url();?>home/tambahdata" class="btn btn-danger pull-left m-l-20 hidden-xs hidden-sm waves-effect waves-light">Tambah Data</a>
            <br/>
            <br/>
            <br/>
            <?php //print_r($data);?>
            <div class="table-responsive">
                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nim</th>
                            <th>Name Jobseeker</th>
                            <th>Email Jobseeker</th>
                            <th>Major</th>
                            <th>Reason</th>
                            <th>Tahun</th>
                            <th>Registereddate Jobseeker</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($data as $list) { ?>
                           <tr>
                           <td><?php echo $list['nim']; ?></td>
                           <td><?php echo $list['name_jobseeker']; ?></td>
                           <td><?php echo $list['email_jobseeker']; ?></td>
                           <td><?php echo $list['major']; ?></td>
                           <td><?php echo $list['reason']; ?></td>
                           <td><?php echo $list['tahun']; ?></td>
                           <td><?php echo $list['registereddate_jobseeker']; ?></td>
                           <td>
                             <a href="<?php echo base_url()?>home/editdata/<?php echo $list['id_jobseeker'];?>" class="btn btn-info" role="button">Update</a>
                             <a onclick="return konfirmasi()" href="<?php echo base_url()?>home/hapus/<?php echo $list['id_jobseeker'];?>" class="btn btn-danger" role="button">Delete&nbsp;</a>
                           </td>
                           </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>
