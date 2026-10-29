

<!DOCTYPE html>
<html>
<head>
	<title>Contract</title>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="content-type" content="text-html; charset=utf-8">
	<style type="text/css">
	

		footer {
			margin-bottom: 20px;
		}
		footer .thanks {
			margin-bottom: 40px;
			color: #8BC34A;
			font-size: 1.16666666666667em;
			font-weight: 600;
		}
		footer .notice {
			margin-bottom: 25px;
		}
		footer .end {
			padding-top: 5px;
			border-top: 2px solid #e30d40;
			text-align: center;
		}
		header{
		
		margin-top:50px;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			border-spacing: 0;
			font-size: 18px;
			
		}
		.exclusive{
			
			color:#dfa844;
			margin-left:50px;
			}
		table tbody td {
			padding: 10px;
			text-align:center;
			color: #777777;
			text-align: left;
			border-bottom: 5px solid #FFFFFF;
		}
		.address{
			float:right;
			height:150px;
			width:200px;
			margin-right:70px;
			background-color:#f9f5f5;
			font-size:20px;
		}
		.logo{
			margin-left:50px;
			margin-top:50px;
			font-size:35px;
			color:#dfa844;
			
		}
		.table{
			margin-left:50px;
		}
	</style>
</head>

<body onload="window.print();">
	<header class="clearfix">
	
	<div class="address"> 
		<p>1 Olufowobi Str , Lawanson,
Surulere, Lagos, Nigeria.</p>
	</div>
	<div class="logo">
	<img src="https://amplifihub.com/img/AmplifiHub_New_Logo.png" alt="Amplifihub" height="20" width="120" >
	<?php if($licence == "lease"){ ?>
	<p>Contract for Lease License</p>
	<?php }elseif($licence == "exclusive"){ ?>
		<p>Contract for Exclusive License</p>
	<?php }elseif($licence == "premium"){ ?>
	<p>Contract for Premium License</p>
	<?php } ?>
	</div>
	

	</header>
	<section>
		
		<footer>
		<div class="container">
			
			<div class="end"></div>
		</div>
	</footer>
		
	<div class="exclusive">
			 
			<h2>Licence Agreement</h2>
			<?php if($licence == "lease"){ ?>
        	<h2>(NON-EXCLUSIVE RIGHTS)</h2>
        	<?php }elseif($licence == "sample" || $licence == "playlist"){ ?>
        		<h2>(SAMPLE LICENSE RIGHTS)</h2>
        	<?php }elseif($licence == "pack"){ ?>
        	<h2>(SAMPLE LICENSE RIGHTS)</h2>
        	<?php }elseif($licence == "exclusive"){ ?>
        	<h2>(EXCLUSIVE LICENSE RIGHTS)</h2>
        	<?php } ?>
			<h2>Sound Recording/BEATS</h2>
        
        <?php echo $data; ?>
        
        <?php if($licence == "lease"){ ?>
         owns 90% of publishing rights. 
         <?php echo $data3; ?>
        , owns 10% of publishing rights.
        
        <?php }elseif($licence == "sample" || $licence == "playlist"){ ?>
         owns 90% of publishing rights. 
         <?php echo $data3; ?>
        , owns 10% of publishing rights.
        
        
        <?php }elseif($licence == "pack"){ ?>
         owns 90% of publishing rights. 
         <?php echo $data3; ?>
        , owns 10% of publishing rights.
        
        
        <?php }elseif($licence == "exclusive"){ ?>
         owns 80% of publishing rights. 
         <?php echo $data3; ?>
        , owns 20% of publishing rights.
        <?php } ?>


<?php echo $data2; ?>

	<footer style="margin-top:50px;">
		<div class="container">
			
			<div class="end"></div>
		</div>
	</footer>

</body>

</html>

