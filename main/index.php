<!DOCTYPE html>
<html>
<head>
<title>
DASHBOARD
</title>
<link rel="icon" href="images/logo.png">

 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<?php
	require_once('auth.php');
?>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='TRN-'.createRandomPassword();
?>

 	
</head>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='cashier') {
?>

<a href="../index.php"
<?php
}
if($position=='admin') {
?>
	
	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
                     <ul class="nav nav-list">
              <li class="active"><a href="#"> DASHBOARD </a></li> 
			<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"> SALES</a>  </li>             
			<li><a href="products.php"> PRODUCT STOCKS</a>                                     </li>
			<li><a href="customer.php"> CUSTOMERS DATA</a>                                    </li>
			<li><a href="supplier.php"> SUPPLIERS DATA</a>                                    </li>
			<li><a href="salesreport.php?d1=0&d2=0"> TRANSACTION REPORT</a>  
			<li><a href="sales_inventory.php"> PRODUCT SALES INVENTORY</a></li>              </li>
		

				</ul>                               
          </div>
        </div>
	<div class="span10">
	<div class="contentheader">
			 Dashboard
			</div>
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style="font-size:60px; color:#79b74c; font-weight:bold; font-family: 'Fredoka One', cursive;"><center>JAM DRUGSTORE</center></font>
<div id="mainmain">



<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"> SALES</a>               
<a href="products.php"> PRODUCT STOCKS</a>      
<a href="customer.php"> CUSTOMERS DATA</a>     
<a href="supplier.php"> SUPPLIERS DATA</a>     
<a href="salesreport.php?d1=0&d2=0"> SALES REPORT</a>
<a href="sales_inventory.php"> PRODUCT SALES INVENTORY</a>

<?php
}
?>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>
