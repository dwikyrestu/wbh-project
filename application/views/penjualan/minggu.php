<div class="container">
    <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data Minggu </h1>
        </div>
        <input type="hidden" name="kodebul" id="bulkode" value="<?php echo $id; ?>">
        <div class="row">
          <div class="pull-left"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Minggu Baru</a></div>
        </div><br/>
    <div class="row">
        <div id="reload">
        <table class="table table-striped" id="mydata">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Minggu</th>
                    <th>Omset</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody id="show_data">

            </tbody>
        </table>
        </div>
    </div>
</div>


<div class="container" id="childMin" style="display:none">
    <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header" id="txt_id">Data Minggu </h1>
        </div>
        <input type="hidden" name="kodemin" id="minkode" value="">
        <div class="row">
          <div class="pull-left"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd2"><span class="fa fa-plus"></span> Tambah Minggu Baru</a></div>
        </div><br/>
    <div class="row">
        <div id="reload">
        <table class="table table-striped" id="mydata2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Person</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody id="show_data2">

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
                <h3 class="modal-title" id="myModalLabel">Tambah Minggu</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body"><div class="form-group">
                        <label class="control-label col-xs-3" >Nama Minggu</label>
                        <div class="col-xs-9">
                            <input name="minggu" id="nm_minggu" class="form-control" type="text" placeholder="Nama Minggu" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Omset</label>
                        <div class="col-xs-9">
                            <input name="omset" id="nm_omset" class="form-control" type="number" placeholder="000000000" style="width:335px;" required>
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


        <!-- MODAL ADD Det Minggu-->
        <div class="modal" id="ModalaAdd2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Data Penjualan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body"><div class="form-group">
                        <label class="control-label col-xs-3" >Nama Penjualan</label>
                        <div class="col-xs-9">
                            <input name="penj" id="nm_penj" class="form-control" type="text" placeholder="Nama Penjualan" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nilai Penjualan</label>
                        <div class="col-xs-9">
                            <input name="nilaipenj" id="nm_nilai" class="form-control" type="number" placeholder="000000000" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Person</label>
                        <div class="col-xs-9">
                            <input name="person" id="nm_person" class="form-control" type="number" placeholder="000" style="width:335px;" required>
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
        <!--END MODAL ADD Det Minggu-->


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

                            <input type="hidden" name="kodehps" id="textkodehps" value="">
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

        <!--MODAL HAPUS Det Minggu-->
        <div class="modal fade" id="ModalHapus2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data Penjualan</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">

                            <input type="hidden" name="kodehps2" id="textkodehps2" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau mengapus data penjualan ini?</p></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS Det Minggu-->

<script type="text/javascript" src="<?php echo base_url().'asset/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'asset/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
        //tampil_data_minggu();

        $('#mydata').dataTable();
        //$('#mydata2').dataTable();

        //fungsi tampil barang
        function tampil_data_barang(){
          var idbul=$('#bulkode').val();
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>/minggu/data_minggu/'+idbul,
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no=1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].nama_minggu+'</td>'+
                                '<td>'+data[i].omset_minggu+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-success btn-sm item_det" id="'+data[i].id_minggu+'" data="'+data[i].nama_minggu+'">Detail Minggu</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data="'+data[i].id_minggu+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                                no++;
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //function tampil data penjualan perminggu
        function tampil_data_minggu(){
          var idmin=$('#minkode').val();
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>/minggu/data_perminggu/'+idmin,
                async : false,
                dataType : 'json',
                success : function(data){
                    var html2 = '';
                    var i;
                    var no=1;
                    for(i=0; i<data.length; i++){
                        html2 += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].nama_detpen+'</td>'+
                                '<td>'+data[i].nilai_detpen+'</td>'+
                                '<td>'+data[i].person+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-success btn-sm item_det" id="'+data[i].id_detpen+'" data="'+data[i].nama_minggu+'">Detail Minggu</a>'+' '+
                                    '<a href="<?php echo base_url(); ?>penjualan/hapus_det/'+data[i].id_detpen+'" class="btn btn-danger btn-sm item_hapus2" data="'+data[i].id_detpen+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                                no++;
                    }
                    $('#show_data2').html(html2);
                }

            });
        }

        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kodehps"]').val(id);
        });

        //GET HAPUS
        $('#show_data').on('click','.item_hapus2',function(){
            var id=$(this).attr('data');
            $('#ModalHapus2').modal('show');
            $('[name="kodehps2"]').val(id);
        });


        $('#show_data').on('click','.item_det',function(){
            var nama=$(this).attr('data');
            var id=$(this).attr('id');
            document.getElementById('childMin').style.display = "block";
            document.getElementById("txt_id").innerHTML = "Data "+nama;
            $('[name="kodemin"]').val(id);
            tampil_data_minggu();
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            var idbulan=$('#bulkode').val();
            var minggu=$('#nm_minggu').val();
            var omset=$('#nm_omset').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('/minggu/simpan_minggu')?>",
                dataType : "JSON",
                data : {idbulan:idbulan,minggu:minggu,omset:omset,},
                success: function(data){
                    $('[name="minggu"]').val("");
                    $('[name="omset"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                    $('body').removeClass().removeAttr('style');$('.modal-backdrop').remove();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var idmin=$('#textkodehps').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('minggu/hapus_minggu')?>",
            dataType : "JSON",
            data : {idmin: idmin},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_barang();
                    }
                });
                return false;
            });

    });

</script>
