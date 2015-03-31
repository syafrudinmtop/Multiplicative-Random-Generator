<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
/*******************************************************************************
  TABLE DESIGN 
*******************************************************************************/
#box-table-a {
	font-size: 15px;
	margin: 0px;
	text-align: left;
	border-collapse: separate;
	border-bottom:none;
	width:220px;
	text-align:center;
	float:left;
	margin-right:15px;
	margin-left:35px;
	
}

#box-table-a th {
	font-size: 13px;
	font-weight: normal;
	padding: 2px;
	background: #EFEFEF;
	border: 1px solid #D5CDCD;
	color: #000;
	text-align: left;
	font-weight:bold;
	text-align:center;
}
#box-table-a td {
	padding: 2px;
	background: none; 
	border: 1px solid #CCC;

}
#box-table-a tr:hover td {
	background: #FBFBFB;
	color: #333;
}
#box-table-a tr.footer { background: none !important; }
#box-table-a tr.footer:hover td { background: none !important;  }
#box-table-b {
	font-size: 15px;
	margin: 0px;
	text-align: left;
	border-collapse: separate;
	border-bottom:none;
	width:220px;
	text-align:center;
	float:left;
	margin-right:15px;
}
#box-table-b th {
	font-size: 13px;
	font-weight: normal;
	padding: 2px;
	background: #EFEFEF;
	border: 1px solid #D5CDCD;
	color: #000;
	text-align: left;
	font-weight:bold;
	text-align:center;
}
#box-table-b td {
	padding: 2px;
	background: none; 
	border: 1px solid #CCC;

}
#box-table-b tr:hover td {
	background: #FBFBFB;
	color: #333;
}
#box-table-b tr.footer { background: none !important; }
#box-table-b tr.footer:hover td { background: none !important;  }
#box-table-c {
	font-size: 15px;
	margin: 0px;
	text-align: left;
	border-collapse: separate;
	border-bottom:none;
	width:220px;
	text-align:center;
	float:left;
	margin-right:15px;
}
#box-table-c th {
	font-size: 13px;
	font-weight: normal;
	padding: 2px;
	background: #EFEFEF;
	border: 1px solid #D5CDCD;
	color: #000;
	text-align: left;
	font-weight:bold;
	text-align:center;
}
#box-table-c td {
	padding: 2px;
	background: none; 
	border: 1px solid #CCC;

}
#box-table-c tr:hover td {
	background: #FBFBFB;
	color: #333;
}
#box-table-c tr.footer { background: none !important; }
#box-table-c tr.footer:hover td { background: none !important;  }
#box-table-d {
	font-size: 15px;
	margin: 0px;
	text-align: left;
	border-collapse: separate;
	border-bottom:none;
	width:220px;
	text-align:center;
	float:left;
	margin-right:15px;
}
#box-table-d th {
	font-size: 13px;
	font-weight: normal;
	padding: 2px;
	background: #EFEFEF;
	border: 1px solid #D5CDCD;
	color: #000;
	text-align: left;
	font-weight:bold;
	text-align:center;
}
#box-table-d td {
	padding: 2px;
	background: none; 
	border: 1px solid #CCC;

}
#box-table-d tr:hover td {
	background: #FBFBFB;
	color: #333;
}
#box-table-d tr.footer { background: none !important; }
#box-table-d tr.footer:hover td { background: none !important;  }
#box-table-e {
	font-size: 15px;
	margin: 0px;
	text-align: left;
	border-collapse: separate;
	border-bottom:none;
	width:220px;
	text-align:center;
	float:left;
	margin-right:15px;
}
#box-table-e th {
	font-size: 13px;
	font-weight: normal;
	padding: 2px;
	background: #EFEFEF;
	border: 1px solid #D5CDCD;
	color: #000;
	text-align: left;
	font-weight:bold;
	text-align:center;
}
#box-table-e td {
	padding: 2px;
	background: none; 
	border: 1px solid #CCC;

}
#box-table-e tr:hover td {
	background: #FBFBFB;
	color: #333;
}
#box-table-e tr.footer { background: none !important; }
#box-table-e tr.footer:hover td { background: none !important;  }


h1,h2,h4,body{margin:0; padding:0;}
#header
{
	text-align:center;
	background-color:#00F;
	color:#FFF;}
body{
	 D4D3D3}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="header">
Nama : Ahmad Sopian
    Kelas : IF - 6
<h2>Multiplicative Random Generator</h2>
<h4>a = 4 &nbsp; &nbsp; &nbsp; &nbsp;
m = 2305 &nbsp; &nbsp; &nbsp;&nbsp;
Z0 = 1755</h4>

	
</div>
<?php
	$z0 = 1755;
	$m = 2305;
	$a = 4;
	$zi = ($a * $z0) % $m;
	$ui = $zi / $m;
	$x = pow($ui, 1/3);
	?>
			<table width="100%"  id="box-table-a" >
            <thead>
              <tr>
                <th width="50" scope="col">i</th>
                <th width="50" scope="col">Zi</th>
                <th width="50" scope="col">Ui</th>
                <th width="200" scope="col">X</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo "1";?></td>
                <td><?php echo $zi ;?></td>
                <td><?php echo number_format($ui,3)?></td>
                <td><?php echo $x ?></td>              
              </tr>         
            </tbody>
            <?php
	for ($i=2 ; $i<=20 ; $i++)
	{
		$zi_1 = $zi;
		$zi = ($a * $zi_1) % $m;
		$ui = $zi / $m ;
		$x = pow($ui, 1/3);  
	?>  
             <tbody>
              <tr>
                <td><?php echo "$i";?></td>
                <td><?php echo $zi ;?></td>
                <td><?php echo number_format($ui,3)?></td> 
                <td><?php echo $x ?></td>              
              </tr>         
            </tbody>           
               
       <?php
	}
	   ?>     
	<table width="100%"  id="box-table-b" >
            <thead>
              <tr>
                <th width="50" scope="col">i</th>
                <th width="50" scope="col">Zi</th>
                <th width="50" scope="col">Ui</th>
                <th width="150" scope="col">X</th>
              </tr>
            </thead>
            
            <?php
	for ($i=21 ; $i<=40 ; $i++)
	{
		$zi_1 = $zi;
		$zi = ($a * $zi_1) % $m;
		$ui = $zi / $m ;
		$x = pow($ui, 1/3);  
	?>  
             <tbody>
              <tr>
                <td><?php echo "$i";?></td>
                <td><?php echo $zi ;?></td>
                <td><?php echo number_format($ui,3)?></td>
                <td><?php echo $x ?></td>              
              </tr>         
            </tbody>           
               
       <?php
	}
	   ?> 
		
	<table width="100%"  id="box-table-c" >
            <thead>
              <tr>
                <th width="50" scope="col">i</th>
                <th width="50" scope="col">Zi</th>
                <th width="50" scope="col">Ui</th>
                <th width="150" scope="col">X</th>
              </tr>
            </thead>
            
            <?php
	for ($i=41 ; $i<=60 ; $i++)
	{
		$zi_1 = $zi;
		$zi = ($a * $zi_1) % $m;
		$ui = $zi / $m ;
		$x = pow($ui, 1/3);  
	?>  
             <tbody>
              <tr>
                <td><?php echo "$i";?></td>
                <td><?php echo $zi ;?></td>
                <td><?php echo number_format($ui,3)?></td>
                <td><?php echo $x ?></td>              
              </tr>         
            </tbody>           
               
       <?php
	}
	   ?> 
	<table width="100%"  id="box-table-d" >
            <thead>
              <tr>
                <th width="50" scope="col">i</th>
                <th width="50" scope="col">Zi</th>
                <th width="50" scope="col">Ui</th>
                <th width="150" scope="col">X</th>
              </tr>
            </thead>
            
            <?php
	for ($i=61 ; $i<=80 ; $i++)
	{
		$zi_1 = $zi;
		$zi = ($a * $zi_1) % $m;
		$ui = $zi / $m ;
		$x = pow($ui, 1/3);  
	?>  
             <tbody>
              <tr>
                <td><?php echo "$i";?></td>
                <td><?php echo $zi ;?></td>
                <td><?php echo number_format($ui,3)?></td>
                <td><?php echo $x ?></td>              
              </tr>         
            </tbody>           
               
       <?php
	}
	   ?> 
       <table width="100%"  id="box-table-e" >
            <thead>
              <tr>
                <th width="50" scope="col">i</th>
                <th width="50" scope="col">Zi</th>
                <th width="50" scope="col">Ui</th>
                <th width="150" scope="col">X</th>
              </tr>
            </thead>
            
            <?php
	for ($i=81 ; $i<=100 ; $i++)
	{
		$zi_1 = $zi;
		$zi = ($a * $zi_1) % $m;
		$ui = $zi / $m ; 
		$x = pow($ui, 1/3); 
	?>  
             <tbody>
              <tr>
                <td><?php echo "$i";?></td>
                <td><?php echo $zi ;?></td>
                <td><?php echo number_format($ui,3)?></td>
                <td><?php echo $x ?></td>              
              </tr>         
            </tbody>           
               
       <?php
	}
	   ?> 
        

</table>
</body>
</html>