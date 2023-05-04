<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashbaord Customer</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/chart.css'?>">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>pdf</title><link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/chart.css'?>">');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
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
                <h1>Dashboard
                    <small>Customer</small>
                </h1>
            </div>
            <form id="form1">
            <div id="dvContainer">
	            <div class="col-md-12">
	                <div class="card direct-chat direct-chat-primary">
					  <div class="card-header ui-sortable-handle" style="cursor: move;">
					    <h3 class="card-title">Chart Data</h3>
					    <div class="card-tools" style="float:right">
						<input type="button" class="btn btn-primary" value="cetak" id="btnPrint" />
						</div>
					      
					  </div>
					  <div class="card-body">
					     <div id="container_kota"></div>
					  </div>

					  <div class="card-body">
					     <div id="container"></div>
					  </div>
					   
					</div>
	            </div>
            </div>
            
            </form>

            


        </div>
    </div>
        
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="http://code.highcharts.com/modules/offline-exporting.js"></script>
<script>

	Highcharts.chart('container_kota', {
	  chart: {
	  	backgroundColor: 'transparent',
	    type: 'column'
	  },
	  title: {
	    text: 'Jumlah Customer Berdasarkan Kota'
	  },
	 
	  xAxis: {
	    categories: ['Total Customer'],
	    crosshair: true
	  },
	  exporting: {
	        showTable: true
	    },
	  yAxis: {
	    min: 0,
	    title: {
	      text: 'Total Customer'
	    }
	  },
	  tooltip: {
	    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
	    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
	      '<td style="padding:0"><b>{point.y} </b></td></tr>',
	    footerFormat: '</table>',
	    shared: true,
	    useHTML: true
	  },
	  plotOptions: {
	    column: {
	      pointPadding: 0.2,
	      borderWidth: 0
	    }
	  },
	  credits: {
	     enabled: false
	  },
	  series: [
	   <?php foreach ($customer_kota as $kota){ ?>

	   {
	    name: '<?=$kota->kota?>',
	    data: [<?=$kota->jml?>]
	    },  
	    <?php } ?>
	    ]
	});
	// Data retrieved from https://netmarketshare.com
	Highcharts.chart('container', {
	  chart: {
	  	backgroundColor: 'transparent',
	    plotBackgroundColor: null,
	    plotBorderWidth: null,
	    plotShadow: false,
	    type: 'pie'
	  },
	  credits: {
	     enabled: false
	  },
	  title: {
	    text: 'Jumlah Customer Berdasarkan Jenis Kelamin',
	    align: 'center'
	  },
	  exporting: {
	        showTable: true
	    },
	  tooltip: {
	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	  },
	  accessibility: {
	    point: {
	      valueSuffix: '%'
	    }
	  },
	  
	  plotOptions: {
	    pie: {
	      allowPointSelect: true,
	      cursor: 'pointer',
	      dataLabels: {
	        enabled: true,
	        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
	      }
	    }
	  },
	  series: [{
	    name: 'Jumlah',
	    colorByPoint: true,
	    data: [
	    <?php foreach ($jenis_kelamin as $data){ ?>
		
	    {
	      name: 'WANITA',
	      y: <?=$data->WANITA?>,
	     }, 


	    {
	      name: 'PRIA',
	      y: <?=$data->PRIA?>,
	     }, 
	    <?php } ?>
	     ]
	  }]
	});

</script>



<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

</body>
</html>


