<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Master Customer</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>

<div class="container">
    <nav class ="navbar navbar-expand-lg navbar-light bg-light mb-4">
         <a class="navbar-brand" href="<?=base_url()?>">APPS</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link" href="<?=base_url()?>">Dashboard <span class="sr-only">(current)</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link"  href="<?=base_url('customer')?>">Master Customer</a>
             </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           </form>
         </div>
           
    </nav>

	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Master
                    <small>Customer</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Tambah Customer</a></div>
                </h1>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" id="mydata">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Pekerjaan</th>
                            <th>Provinsi</th>
                            <th>Kota/Kabupaten</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        
</div>

		<!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                              <input type="text" name="nama" id="nama" class="form-control" placeholder="Input nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <select name="jns_kelamin" id="jns_kelamin" class="form-control form-select" aria-label="jenis_kelamin" required> 
                                  <option value="" selected> - pilih - </option>
                                  <option value="PRIA">PRIA</option>
                                  <option value="WANITA">WANITA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tgl Lahir</label>
                            <div class="col-md-10">
                              <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="dd/mm/yyyy" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Pekerjaan</label>
                            <div class="col-md-10">
                              <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="pekerjaan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Provinsi</label>
                            <div class="col-md-10">
                                <select id="propinsi" name="provinsi" class="form-control selectpicker" title="-- Pilih --" data-live-search="true">
                                    <option value="" selected> - pilih - </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kota/Kabupaten</label>
                            <div class="col-md-10">
                                <select id="kabupaten" name="kabupaten" class="form-control selectpicker" title="-- Pilih --" data-live-search="true">
                                     <option value="" selected> - pilih - </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kecamatan</label>
                            <div class="col-md-10">
                                <select id="kecamatan" name="kecamatan" class="form-control selectpicker" title="-- Pilih --" data-live-search="true">
                                    <option value="" selected> - pilih - </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kelurahan</label>
                            <div class="col-md-10" required>
                                 <select id="kelurahan" name="kelurahan" class="form-control selectpicker" title="-- Pilih --" data-live-search="true">
                                      <option value="" selected> - pilih - </option>
                                 </select>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                           
                            <div class="col-md-10">
                              <input type="hidden" name="cust_code_edit" id="cust_code_edit" class="form-control" placeholder="Product Code" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_edit" id="nama_edit" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <select name="jns_kelamin_edit" id="jns_kelamin_edit" class="form-control form-select" aria-label="jenis_kelamin" required> 
                                  <option value="" selected> - pilih - </option>
                                  <option value="PRIA">PRIA</option>
                                  <option value="WANITA">WANITA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tgl Lahir</label>
                            <div class="col-md-10">
                              <input type="date" name="tgl_lahir_edit" id="tgl_lahir_edit" class="form-control" placeholder="dd/mm/yyyy" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Pekerjaan</label>
                            <div class="col-md-10">
                              <input type="text" name="pekerjaan_edit" id="pekerjaan_edit" class="form-control" placeholder="pekerjaan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Provinsi</label>
                            <div class="col-md-10">
                                <select id="propinsi_edit" name="propinsi_edit" class="form-control selectpicker" title="-- Pilih --" data-live-search="true">
                                    <option value="" selected> - pilih - </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kota/Kabupaten</label>
                            <div class="col-md-10">
                                <select id="kabupaten_edit" name="kabupaten_edit" class="form-control selectpicker" title="-- Pilih --" data-live-search="true">
                                     <option value="" selected> - pilih - </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kecamatan</label>
                            <div class="col-md-10">
                                <select id="kecamatan_edit" name="kecamatan_edit" class="form-control selectpicker" title="-- Pilih --" data-live-search="true">
                                    <option value="" selected> - pilih - </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kelurahan</label>
                            <div class="col-md-10" required>
                                 <select id="kelurahan_edit" name="kelurahan_edit" class="form-control selectpicker" title="-- Pilih --" data-live-search="true">
                                      <option value="" selected> - pilih - </option>
                                 </select>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="cust_code_delete" id="cust_code_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->





<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

 
 <script type="text/javascript">
    $(document).ready(function(){

      function getData(type, id = ''){
        var data = '',
            url = "https://www.emsifa.com/api-wilayah-indonesia/api/",
            i;

        if(type === 'propinsi'){
          url += "provinces.json";
        }else if(type === 'kabupaten'){
          url += "regencies/" + id + ".json";
        }else if(type === 'kecamatan'){
          url += "districts/" + id + ".json";
        }else if(type === 'propinsi_edit'){
          url += "provinces.json";
        }else if(type === 'kabupaten_edit'){
          url += "regencies/" + id + ".json";
        }else if(type === 'kecamatan_edit'){
          url += "districts/" + id + ".json";
        }else{
          url += "villages/" + id + ".json";
        }

        $.ajax({
          method: 'GET',
          url: url,
          dataType: "json",
          success: function(result){
             data += '<option value="" selected> - pilih- </option>';
            for(i=0; i < result.length; i++){
              data += '<option value="' + result[i]['id'] + '">' + result[i]['name'] + '</option>';
            };
            $('#' + type).html(data);
            //$('#' + type).selectpicker('refresh');
          }
        });
      };

      getData('propinsi');
      getData('propinsi_edit');

      $('#propinsi').on('change', function(){
        getData('kabupaten', $(this).val());
      });

      $('#kabupaten').on('change', function(){
          getData('kecamatan', $(this).val());
      });

      $('#kecamatan').on('change', function(){
        getData('kelurahan', $(this).val());
      })

      $('#propinsi_edit').on('change', function(){
        getData('kabupaten_edit', $(this).val());
      });

      $('#kabupaten_edit').on('change', function(){
          getData('kecamatan_edit', $(this).val());
      });

      $('#kecamatan_edit').on('change', function(){
        getData('kelurahan_edit', $(this).val());
      })

    });
  </script>

<script type="text/javascript">
	$(document).ready(function(){
		show_customer();	 
		
		$('#mydata').dataTable();

		function show_customer(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('customer/customer_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
                    var no=1;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+no+'</td>'+
		                        '<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].jns_kelamin+'</td>'+
                                '<td>'+data[i].tgl_lahir+'</td>'+
                                '<td>'+data[i].pekerjaan+'</td>'+
                                '<td>'+data[i].provinsi+'</td>'+
                                '<td>'+data[i].kota+'</td>'+
                                '<td>'+data[i].kecamatan+'</td>'+
                                '<td>'+data[i].desa+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-cust_code="'+data[i].cust_code+'" data-name="'+data[i].nama+'" data-jk="'+data[i].jns_kelamin+'" data-tgl_lahir="'+data[i].tgl_lahir+'" data-pekerjaan="'+data[i].pekerjaan+'" data-prov="'+data[i].provinsi+'" data-kota="'+data[i].kota+'" data-kec="'+data[i].kecamatan+'" data-des="'+data[i].desa+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-cust_code="'+data[i].cust_code+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';

                    no++;
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save data
        $('#btn_save').on('click',function(){
            var nama = $('#nama').val();
            var jns_kelamin = $('#jns_kelamin').val();
            var tgl_lahir  = $('#tgl_lahir').val();
            var pekerjaan  = $('#pekerjaan').val();
            var propinsi  = $('#propinsi :selected').text();
            var kabupaten  = $('#kabupaten :selected').text();
            var kecamatan  = $('#kecamatan :selected').text();
            var kelurahan  = $('#kelurahan :selected').text();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('customer/save')?>",
                dataType : "JSON",
                data : {nama:nama , jns_kelamin:jns_kelamin, tgl_lahir:tgl_lahir,pekerjaan:pekerjaan,propinsi:propinsi, kabupaten:kabupaten,kecamatan:kecamatan,kelurahan:kelurahan},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="jns_kelamin"]').val("");
                    $('[name="tgl_lahir"]').val("");
                    $('[name="pekerjaan"]').val("");
                    $('[name="propinsi"]').val("");
                    $('[name="kabupaten"]').val("");
                    $('[name="kecamatan"]').val("");
                    $('[name="kelurahan"]').val("");
                    $('#Modal_Add').modal('hide');
                  show_customer();   
        

                }
            });
            return false;
        });

        $('#show_data').on('click','.item_edit',function(){
            var cust_code = $(this).data('cust_code');
            var name = $(this).data('name');
            var jk  = $(this).data('jk');
            var tgl_lahir  = $(this).data('tgl_lahir');
            var pekerjaan  = $(this).data('pekerjaan');
            var prov  = $(this).data('prov');
            var kot  = $(this).data('kot');
            var kec = $(this).data('kec');
            var des  = $(this).data('des');

        
            $('#Modal_Edit').modal('show');
            $('[name="cust_code_edit"]').val(cust_code);
            $('[name="nama_edit"]').val(name);
            $('[name="jns_kelamin_edit"]').val(jk);
            $('[name="tgl_lahir_edit"]').val(tgl_lahir);
            $('[name="pekerjaan_edit"]').val(pekerjaan);
            $('[name="propinsi_edit"]').val(prov);
            $('[name="kabupaten_edit"]').val(kot);
            $('[name="kecamatan_edit"]').val(kec);
            $('[name="kelurahan_edit"]').val(des);
 
            
        });

        //update 
         $('#btn_update').on('click',function(){
            var cust_code = $('#cust_code_edit').val();
            var nama = $('#nama_edit').val();
            var jns_kelamin = $('#jns_kelamin_edit').val();
            var tgl_lahir  = $('#tgl_lahir_edit').val();
            var pekerjaan  = $('#pekerjaan_edit').val();
            var propinsi  = $('#propinsi_edit :selected').text();
            var kabupaten  = $('#kabupaten_edit :selected').text();
            var kecamatan  = $('#kecamatan_edit :selected').text();
            var kelurahan  = $('#kelurahan_edit :selected').text();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('customer/update')?>",
                dataType : "JSON",
                data : {cust_code:cust_code ,nama:nama , jns_kelamin:jns_kelamin, tgl_lahir:tgl_lahir,pekerjaan:pekerjaan,propinsi:propinsi, kabupaten:kabupaten,kecamatan:kecamatan,kelurahan:kelurahan},
                success: function(data){
                    $('[name="cust_code_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="jns_kelamin_edit"]').val("");
                    $('[name="tgl_lahir_edit"]').val("");
                    $('[name="pekerjaan_edit"]').val("");
                    $('[name="propinsi_edit"]').val("");
                    $('[name="kabupaten_edit"]').val("");
                    $('[name="kecamatan_edit"]').val("");
                    $('[name="kelurahan_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_customer();
                }
            });
            return false;
        });

 
        $('#show_data').on('click','.item_delete',function(){
            var cust_code = $(this).data('cust_code');
            
            $('#Modal_Delete').modal('show');
            $('[name="cust_code_delete"]').val(cust_code);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var cust_code = $('#cust_code_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('customer/delete')?>",
                dataType : "JSON",
                data : {cust_code:cust_code},
                success: function(data){
                    $('[name="cust_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_customer();
                }
            });
            return false;
        });

	});

</script>
</body>
</html>