
<div class="container">
    <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data Bulan </h1>
        </div>
        <div class="row">
          <div class="pull-left"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Bulan Baru</a></div>
        </div><br/>
    <div class="row">
        <div id="reload">
        <table class="table table-striped" id="mydata">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody id="show_data">

            </tbody>
        </table>
        </div>
    </div>
</div>

        <!-- MODAL ADD -->
        <div class="modal" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                  <div class="alert alert-info"><p>Silahkan Masukkan bulan <?php echo date('F'); ?>, Anda hanya dapat memasukkan data bulan ini !!!</p></div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Bulan</label>
                        <div class="col-xs-9">
                            <input name="bulan" id="nm_bulan" class="form-control" type="text" placeholder="Bulan" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tahun</label>
                        <div class="col-xs-9">
                            <input name="tahun" id="nm_tahun" class="form-control" type="number" placeholder="Tahun" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->


        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data Bulan</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">

                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau mengapus data bulan ini?</p></div>
                            <div class="alert alert-info"><p>Pastikan anda sebelumnya telah menghapus data penjualan dan omset per minggu dari bulan ini !!!</p></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<script type="text/javascript" src="<?php echo base_url().'asset/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'asset/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.

        $('#mydata').dataTable();

        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>/penjualan/data_bulan',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no=1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].nama_bulan+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="det_minggu/'+data[i].id_bulan+'" class="btn btn-info btn-sm" data="'+data[i].id_bulan+'">Detail Minggu</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data="'+data[i].id_bulan+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                                no++;
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/barang/get_barang')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(barang_kode, barang_nama, barang_harga){
                        $('#ModalaEdit').modal('show');
                        $('[name="kobar_edit"]').val(data.barang_kode);
                        $('[name="nabar_edit"]').val(data.barang_nama);
                        $('[name="harga_edit"]').val(data.barang_harga);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            var bulan=$('#nm_bulan').val();
            var tahun=$('#nm_tahun').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('/penjualan/simpan_bulan')?>",
                dataType : "JSON",
                data : {bulan:bulan,tahun:tahun,},
                success: function(data){
                    $('[name="bulan"]').val("");
                    $('[name="tahun"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                    $('body').removeClass().removeAttr('style');$('.modal-backdrop').remove();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var kobar=$('#kode_barang2').val();
            var nabar=$('#nama_barang2').val();
            var harga=$('#harga2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/update_barang')?>",
                dataType : "JSON",
                data : {kobar:kobar , nabar:nabar, harga:harga},
                success: function(data){
                    $('[name="kobar_edit"]').val("");
                    $('[name="nabar_edit"]').val("");
                    $('[name="harga_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var idbul=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('penjualan/hapus_bulan')?>",
            dataType : "JSON",
                    data : {idbul: idbul},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_barang();
                    }
                });
                return false;
            });

    });

</script>
