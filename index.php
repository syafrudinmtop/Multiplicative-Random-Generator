<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Multiplicative Random Generator</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header">
            Nama : Ahmad Sopian Kelas : IF - 6
            <h2>Multiplicative Random Generator</h2>
            <h4>a = 4 &nbsp; &nbsp; &nbsp; &nbsp; m = 2305 &nbsp; &nbsp; &nbsp;&nbsp; Z0 = 1755</h4>
        </div>

        <?php
        	$z0 = 1755;
        	$m = 2305;
        	$a = 4;
        ?>
		
        <?php
        for ($i=0; $i <100 ; $i++) {
            if ($i == 0 || ($i % 20) == 0 ) {
                echo    '<table width="100%"  id="box-table" >
                            <thead>
                                <tr>
                                    <th width="50" scope="col">i</th>
                                    <th width="50" scope="col">Zi</th>
                                    <th width="50" scope="col">Ui</th>
                                    <th width="200" scope="col">X</th>
                                </tr>
                            </thead>
                            <tbody>';
            }
        	if ($i==0) {
        		$zi = $z0;
        		$ui = $zi / $m;
        		$x = pow($ui, 1/3);
        		echo "<tr>
                        <td>".($i+1)."</td>
                        <td>".$zi ."</td>
                        <td>".number_format($ui,3)."</td>
                        <td>".$x."</td>
                      </tr>";
        	}
        	else
        	{
        		$zi = ($a * $zi) % $m;
        		$ui = $zi / $m;
        		$x = pow($ui, 1/3);
        		echo "<tr>
                        <td>".($i+1)."</td>
                        <td>".$zi ."</td>
                        <td>".number_format($ui,3)."</td>
                        <td>".$x."</td>
                      </tr>";
        	} //END IF
            if ($i == 19 || $i == 39 || $i == 59 || $i == 79 || $i == 99) {
                echo        '</tbody>
                        </table>';
            }
		} //END FOR
         ?>
            
    </body>
</html>