
<?php
 			require('db_connector.php'); 
      date_default_timezone_set('Asia/Dhaka'); 
      $dates=date("Y-m-d");
		//	echo date("Y-m-d");
		 // echo $dates;
     // echo $times;

?>

<?php
//Start:Rajshahi Zone Allotment Selection
 $results = mysqli_query($conn, "SELECT * FROM rajshahi_zone_gridwise_allot ORDER BY allot_id DESC LIMIT 1");
			    while ($row = mysqli_fetch_array($results)) {
$raj_allot_id=$row['allot_id'];
$raj_allot=$row['zone_allocation'];
$date_allot_raj=$row['date_allot'];
$time_allot_raj=$row['time_allot'];
$ldc_official_raj=$row['ldc_officials'];
$rajshahi=$row['rajshahi'];
$rajshahinew=$row['rajshahinew'];
$chapai=$row['chapai'];
$amnura=$row['amnura'];
$natore=$row['natore'];
$bogura=$row['bogura'];
$naogaon=$row['naogaon'];
$niamotpur=$row['niamotpur'];
$joypurhat=$row['joypurhat'];
$sherpur=$row['sherpur'];
$mohastan=$row['mohastangar'];
$pabna=$row['pabna'];
$ishwardi=$row['ishwardi'];
$ruppur=$row['ruppur'];
$shajadpur=$row['shahjadpur'];
$bangura=$row['bangura'];
$sirajgonj=$row['sirajgonj'];


//End
}
?>





<?php
//Start:Rangpur Zone Allotment Selection 
 $result = mysqli_query($conn, "SELECT * FROM rangpur_zone_gridwise_allot ORDER BY allot_id DESC LIMIT 1");
			   while ($row = mysqli_fetch_array($result)) {
					$rang_allot_id=$row['allot_id'];
					$rangpur_allot=$row['zone_allocation'];
					$ldc_officials=$row['ldc_officials'];
					$date_allot=$row['date_allot'];
					$time_allot=$row['time_allot'];
					$ponchogor=$row['Ponchoghar'];
					$thakurgaon=$row['Thakurgaon'];
					$purosadipur=$row['PurboSadipur'];
					$barapukuria=$row['Barapukuria'];
					$saidpur=$row['Saidpur'];
					$jaldhaka=$row['Jaldhaka'];
					$rangpur=$row['Rangpur'];
					$kurigram=$row['Kurigram'];
					$lalmonirhat=$row['Lalmonirhat'];
					$mithapukur=$row['Mithapukur'];
					$polashbari=$row['Polasbari'];
//End
			   } ?>

<?php
//Start:LS Time Input
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			if (isset($_POST['submit'])){
			$ls_raj_input_date=$dates;
		  $ls_raj_old=$_POST['ls_raj_old'];
			$ls_raj_new=$_POST['ls_raj_new'];
			$ls_chapai=$_POST['ls_chapai'];
			$ls_amnura=$_POST['ls_amnura'];
			$ls_natore=$_POST['ls_natore'];
			$ls_bogura=$_POST['ls_bogura'];
			$ls_naogaon=$_POST['ls_naogaon'];
			$ls_niamotpur=$_POST['ls_niamotpur'];
			$ls_joypurhat=$_POST['ls_joypurhat'];
			$ls_sherpur=$_POST['ls_sherpur'];
			$ls_mohastan=$_POST['ls_mohastan'];
			$ls_pabna=$_POST['ls_pabna'];
			$ls_ishwardi=$_POST['ls_ishwardi'];
			$ls_ruppur=$_POST['ls_ruppur'];
			$ls_shajadpur=$_POST['ls_shajadpur'];
			$ls_bangura=$_POST['ls_bangura'];
			$ls_sirajgonj=$_POST['ls_sirajgonj'];
			$l_status="L/S Imposed";
			//$time_history=current_timestamp();


if( $ls_raj_old=="" and $ls_raj_new=="" and $ls_chapai=="" and $ls_amnura=="" and $ls_natore=="" and $ls_bogura=="" and $ls_naogaon=="" and $ls_niamotpur=="" and $ls_joypurhat=="" and $ls_sherpur=="" and $ls_mohastan=="" and $ls_pabna=="" and $ls_ishwardi=="" and $ls_ruppur=="" and $ls_shajadpur=="" and $ls_bangura=="" and $ls_sirajgonj=="")
{
	echo "No Entry";
}

else{

								$sql = "INSERT INTO rajshahi_z_ls_imposed_time_history (dates,rajshahi, rajshahinew, chapai, amnura, natore, bogura, naogaon, niamotpur, joypurhat, sherpur, mohastangar, pabna, ishwardi, ruppur, shahjadpur, bangura, sirajgonj, l_status)
					VALUES ('$ls_raj_input_date', '$ls_raj_old', '$ls_raj_new', '$ls_chapai', '$ls_amnura', '$ls_natore','$ls_bogura', '$ls_naogaon', '$ls_niamotpur', '$ls_joypurhat', '$ls_sherpur', '$ls_mohastan', '$ls_pabna', '$ls_ishwardi', '$ls_ruppur', '$ls_shajadpur', '$ls_bangura', '$ls_sirajgonj', '$l_status')";


					if ($conn->query($sql) === TRUE) {
					  //header('location: add_grid_info.php');
					} else {
					  echo "Error: " . $sql . "<br>" . $conn->error;
					}

}
		}
			}
//End: Rajshahi LS Time Input
		?>	

		<?php
//Start:LS withdraw Time Input
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			if (isset($_POST['submit'])){
			$lw_raj_input_date=$dates;
		  $lw_raj_old=$_POST['lw_raj_old'];
			$lw_raj_new=$_POST['lw_raj_new'];
			$lw_chapai=$_POST['lw_chapai'];
			$lw_amnura=$_POST['lw_amnura'];
			$lw_natore=$_POST['lw_natore'];
			$lw_bogura=$_POST['lw_bogura'];
			$lw_naogaon=$_POST['lw_naogaon'];
			$lw_niamotpur=$_POST['lw_niamotpur'];
			$lw_joypurhat=$_POST['lw_joypurhat'];
			$lw_sherpur=$_POST['lw_sherpur'];
			$lw_mohastan=$_POST['lw_mohastan'];
			$lw_pabna=$_POST['lw_pabna'];
			$lw_ishwardi=$_POST['lw_ishwardi'];
			$lw_ruppur=$_POST['lw_ruppur'];
			$lw_shajadpur=$_POST['lw_shajadpur'];
			$lw_bangura=$_POST['lw_bangura'];
			$lw_sirajgonj=$_POST['lw_sirajgonj'];
			$l_status="L/S Withdraw";
			//$time_history=current_timestamp();


if( $lw_raj_old=="" and $lw_raj_new=="" and $lw_chapai=="" and $lw_amnura=="" and $lw_natore=="" and $lw_bogura=="" and $lw_naogaon=="" and $lw_niamotpur=="" and $lw_joypurhat=="" and $lw_sherpur=="" and $lw_mohastan=="" and $lw_pabna=="" and $lw_ishwardi=="" and $lw_ruppur=="" and $lw_shajadpur=="" and $lw_bangura=="" and $lw_sirajgonj=="")
{
	echo "No Entry";
}

else{

								$sql = "INSERT INTO rajshahi_z_ls_imposed_time_history (dates,rajshahi, rajshahinew, chapai, amnura, natore, bogura, naogaon, niamotpur, joypurhat, sherpur, mohastangar, pabna, ishwardi, ruppur, shahjadpur, bangura, sirajgonj, l_status)
					VALUES ('$lw_raj_input_date', '$lw_raj_old', '$lw_raj_new', '$lw_chapai', '$lw_amnura', '$lw_natore','$lw_bogura', '$lw_naogaon', '$lw_niamotpur', '$lw_joypurhat', '$lw_sherpur', '$lw_mohastan', '$lw_pabna', '$lw_ishwardi', '$lw_ruppur', '$lw_shajadpur', '$lw_bangura', '$lw_sirajgonj', '$l_status')";


					if ($conn->query($sql) === TRUE) {
					  //header('location: add_grid_info.php');
					} else {
					  echo "Error: " . $sql . "<br>" . $conn->error;
					}

}
		}
			}
//End: Rajshahi LS Time Input
		?>	
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
          <style type="text/css">
          table tr:nth-child(odd) {
           background-color: #C3B8B7;
           }   

           table th{

           background-color: #E9EBEC;
           padding: 2px;
           } 

          table, th, td {
  			border: 1px solid;
  			border-color: #000000;
  			text-align: center;}

  			.tab a{
  				text-decoration: none;
  				border: 1px solid;
  				border-color: #4E8239;
  				border-radius: 3px;
  				background-color: #98B97D;
  				padding: 3px;
  				margin: 0px;
  			}

      </style>
          <script type="text/javascript">
      	function timeNow(i) {
  			var d = new Date(),
    		h = (d.getHours()<10?'0':'') + d.getHours(),
   			m = (d.getMinutes()<10?'0':'') + d.getMinutes();
  			i.value = h + ':' + m;
}

		function clearStorage(){ 
    localStorage.clear()
    console.log("clear records");
		}

   



			 function lvalidateForm() {
               let z_name = document.forms["lss"]["status"].value;

               if (status == ""){
                alert("LLLLLLL");
                 return false;
                }
                else
                  return true;
        }



         </script>
  </head>
  <body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="save-later-form"  name="lss">
 <div class="row" style="margin:10px">
 			<div class="col-3">	
				<table>
					<tr>
						<th></th>
						<th colspan="3">LoadShed Imposed
									<input type="radio" id="ls_imposed" name="status" value="1">
						</th>
					</tr>
					<tr>
						<th colspan="2" style="background-color:#4E8239 ">Rajshahi</th>
						<th colspan="2"><?php echo $raj_allot; ?></th>
					</tr>
					<tr>
						<th colspan="2" style="background-color:#4E8239 "><?php echo $date_allot_raj; ?></th>
						<th colspan="2"> 
							<?php echo $time_allot_raj; ?>
    				</th>
					</tr>

					<tr>
						<th>Allot</th>
						<th>Allot</th>
						<th>Inform</th>
						<th>Time</th>
					</tr>
					<tr>
						<td>Rajshahi</td>
						<td><?php echo $rajshahi; ?></td>
						<td   class="tab" ><a onclick="timeNow(ls_raj_old)" href="#">Imposed</a></td>
						<td><input id="ls_raj_old" type="time" name="ls_raj_old" value="" /></td>
					</tr>
					<tr>
						<td >Rajshahi 2</td>
						<td><?php echo $rajshahinew; ?></td>
						<td class="tab"><a onclick="timeNow(ls_raj_new)" href="#">Imposed</a></td>
						<td><input id="ls_raj_new" type="time"  name="ls_raj_new" value="" /></td>
					</tr>
					<tr>
						<td>Chapai N.G</td>
						<td><?php echo $chapai; ?></td>
						<td class="tab"><a onclick="timeNow(ls_chapai)" href="#">Imposed</a></td>
						<td><input id="ls_chapai" type="time" name="ls_chapai" value="" /></td>
					</tr>
					<tr>
						<td>Amnura</td>
						<td><?php echo $amnura; ?></td>
						<td class="tab"><a onclick="timeNow(ls_amnura)" href="#">Imposed</a></td>
						<td><input id="ls_amnura" type="time" name="ls_amnura" value="" /></td>
					</tr>
					<tr>
						<td>Natore</td>
						<td><?php echo $natore; ?></td>
						<td class="tab"><a onclick="timeNow(ls_natore)" href="#">Imposed</a></td>
						<td><input id="ls_natore" type="time" name="ls_natore" value="" /></td>
					</tr>
					<tr>
						<td>Bogura</td>
						<td><?php echo $bogura; ?></td>
						<td class="tab"><a onclick="timeNow(ls_bogura)" href="#">Imposed</a></td>
						<td><input id="ls_bogura" type="time" name="ls_bogura" value="" /></td>
					</tr>
					<tr>
						<td>Naogaon</td>
						<td><?php echo $naogaon; ?></td>
						<td class="tab"><a onclick="timeNow(ls_naogaon)" href="#">Imposed</a></td>
						<td><input id="ls_naogaon" type="time" name="ls_naogaon" value="" /></td>
					</tr>
					<tr>
						<td>Niamotpur</td>
						<td><?php echo $niamotpur; ?></td>
						<td class="tab"><a onclick="timeNow(ls_niamotpur)" href="#">Imposed</a></td>
						<td><input id="ls_niamotpur" type="time" name="ls_niamotpur" value="" /></td>
					</tr>
					<tr>
						<td>Joypurhat</td>
						<td><?php echo $joypurhat; ?></td>
						<td class="tab"><a onclick="timeNow(ls_joypurhat)" href="#">Imposed</a></td>
						<td><input id="ls_joypurhat" type="time" name="ls_joypurhat" value="" /></td>
					</tr>
					<tr>
						<td>Sherpur</td>
						<td><?php echo $sherpur; ?></td>
						<td class="tab"><a onclick="timeNow(ls_sherpur)" href="#">Imposed</a></td>
						<td><input id="ls_sherpur" type="time" name="ls_sherpur" value="" /></td>
					</tr>
					<tr>
						<td>Mohastangar</td>
						<td><?php echo $mohastan; ?></td>
						<td class="tab"><a onclick="timeNow(ls_mohastan)" href="#">Imposed</a></td>
						<td><input id="ls_mohastan" type="time" name="ls_mohastan" value="" /></td>
					</tr>
					<tr>
						<td>Pabna</td>
						<td><?php echo $pabna; ?></td>
						<td class="tab"><a onclick="timeNow(ls_pabna)" href="#">Imposed</a></td>
						<td><input id="ls_pabna" type="time" name="ls_pabna" value="" /></td>
					</tr>
					<tr>
						<td>Ishwardi</td>
						<td><?php echo $ishwardi; ?></td>
						<td class="tab"><a onclick="timeNow(ls_ishwardi)" href="#">Imposed</a></td>
						<td><input id="ls_ishwardi" type="time" name="ls_ishwardi" value="" /></td>
					</tr>
					<tr>
						<td>Ruppur</td>
						<td><?php echo $ruppur; ?></td>
						<td class="tab"><a onclick="timeNow(ls_ruppur)" href="#">Imposed</a></td>
						<td><input id="ls_ruppur" type="time" name="ls_ruppur" value="" /></td>
					</tr>
					<tr>
						<td>Shahjazpur</td>
						<td><?php echo $shajadpur; ?></td>
						<td class="tab"><a onclick="timeNow(ls_shajadpur)" href="#">Imposed</a></td>
						<td><input id="ls_shajadpur" type="time" name="ls_shajadpur" value="" /></td>
					</tr>
					<tr>
						<td>Bhangura</td>
						<td><?php echo $bangura; ?></td>
						<td class="tab"><a onclick="timeNow(ls_bangura)" href="#">Imposed</a></td>
						<td><input id="ls_bangura" type="time" name="ls_bangura" value="" /></td>
					</tr>
					<tr>
						<td>Sirajgonj</td>
						<td><?php echo $sirajgonj; ?></td>
						<td class="tab"><a onclick="timeNow(ls_sirajgonj)" href="#">Imposed</a></td>
						<td><input id="ls_sirajgonj" type="time" name="ls_sirajgonj" value="" /></td>
					</tr>

				</table>
</div>
<div class="col-2">
	<table>
				<tr>
						<th colspan="2">
									<input type="radio" id="ls_withdraw" name="status" value="0">
									LoadShed Withdraw
						</th>
					</tr>
					<tr>
						<th colspan="2" style="background-color:#4E8239 ">Rajshahi</th>
					</tr>
					<tr>
						<th colspan="2" style="background-color:#4E8239 ">Rajshahi</th>
					</tr>
	
					<tr>
						<th>Inform</th>
						<th>Time</th>
					</tr>
					<tr>
						<td  class="tab" ><a onclick="timeNow(lw_raj_old)" href="#">Withdraw</a></td>
						<td><input id="lw_raj_old" type="time" name="lw_raj_old" value="" /></td>
					</tr>
					<tr>
						<td class="tab"><a onclick="timeNow(lw_raj_new)" href="#">Withdraw</a></td>
						<td><input id="lw_raj_new" type="time"  name="lw_raj_new" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_chapai)" href="#">Withdraw</a></td>
						<td><input id="lw_chapai" type="time" name="lw_chapai" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_amnura)" href="#">Withdraw</a></td>
						<td><input id="lw_amnura" type="time" name="lw_amnura" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_natore)" href="#">Withdraw</a></td>
						<td><input id="lw_natore" type="time" name="lw_natore" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_bogura)" href="#">Withdraw</a></td>
						<td><input id="lw_bogura" type="time" name="lw_bogura" value="" /></td>
					</tr>
					<tr>
						<td class="tab"><a onclick="timeNow(lw_naogaon)" href="#">Withdraw</a></td>
						<td><input id="lw_naogaon" type="time" name="lw_naogaon" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_niamotpur)" href="#">Withdraw</a></td>
						<td><input id="lw_niamotpur" type="time" name="lw_niamotpur" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_joypurhat)" href="#">Withdraw</a></td>
						<td><input id="lw_joypurhat" type="time" name="lw_joypurhat" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_sherpur)" href="#">Withdraw</a></td>
						<td><input id="lw_sherpur" type="time" name="lw_sherpur" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_mohastan)" href="#">Withdraw</a></td>
						<td><input id="lw_mohastan" type="time" name="lw_mohastan" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_pabna)" href="#">Withdraw</a></td>
						<td><input id="lw_pabna" type="time" name="lw_pabna" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_ishwardi)" href="#">Withdraw</a></td>
						<td><input id="lw_ishwardi" type="time" name="lw_ishwardi" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_ruppur)" href="#">Withdraw</a></td>
						<td><input id="lw_ruppur" type="time" name="lw_ruppur" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_shajadpur)" href="#">Withdraw</a></td>
						<td><input id="lw_shajadpur" type="time" name="lw_shajadpur" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_bangura)" href="#">Withdraw</a></td>
						<td><input id="lw_bangura" type="time" name="lw_bangura" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lw_sirajgonj)" href="#">Withdraw</a></td>
						<td><input id="lw_sirajgonj" type="time" name="lw_sirajgonj" value="" /></td>
					</tr>
				
				</table>
</div>
	<div class="col-3">	
				<table>
					<tr>
						<th colspan="2">Rangpur</th>
						<th colspan="2"><?php echo $rangpur_allot; ?></th>
					</tr>
					<tr>
						<th colspan="2"><?php echo $date_allot; ?></th>
						<th colspan="2"><?php echo $time_allot; ?></th>
					</tr>
					<tr>
						<th>Allot</th>
						<th>Allot</th>
						<th>Inform</th>
						<th>Time</th>
					</tr>
					<tr>
						<td>Ponchogar</td>
						<td><?php echo $ponchogor; ?></td>
						<td class="tab"><a onclick="timeNow(ponchogor)" href="#">Imposed</a></td>
						<td><input id="ponchogor" type="time" name="ponchogor" value="" /></td>
					</tr>
					<tr>
						<td>Thakurgaon</td>
						<td><?php echo $thakurgaon; ?></td>
						<td class="tab"><a onclick="timeNow(thakurgaon)" href="#">Imposed</a></td>
						<td><input id="thakurgaon" type="time"  name="thakurgaon" value="" /></td>
					</tr>
					<tr>
						<td>P.Sadipur</td>
						<td><?php echo $purosadipur; ?></td>
						<td class="tab"><a onclick="timeNow(purbosadipur)" href="#">Imposed</a></td>
						<td><input id="purbosadipur" type="time" name="purosadipur" value="" /></td>
					</tr>
					<tr>
						<td>Barapukuria</td>
						<td><?php echo $barapukuria; ?></td>
						<td class="tab"><a onclick="timeNow(barapukuria)" href="#">Imposed</a></td>
						<td><input id="barapukuria" type="time" name="barapukuria" value="" /></td>
					</tr>
					<tr>
						<td>Saidpur</td>
						<td><?php echo $saidpur; ?></td>
						<td class="tab"><a onclick="timeNow(saidpur)" href="#">Imposed</a></td>
						<td><input id="saidpur" type="time" name="saidpur" value="" /></td>
					</tr>
					<tr>
						<td>Jaldhaka</td>
						<td><?php echo $jaldhaka; ?></td>
						<td class="tab"><a onclick="timeNow(jaldhaka)" href="#">Imposed</a></td>
						<td><input id="jaldhaka" type="time" name="jaldhaka" value="" /></td>
					</tr>
					<tr>
						<td>Rangpur</td>
						<td><?php echo $rangpur; ?></td>
						<td class="tab"><a onclick="timeNow(rangpur)" href="#">Imposed</a></td>
						<td><input id="rangpur" type="time" name="rangpur" value="" /></td>
					</tr>
					<tr>
						<td>Kurigram</td>
						<td><?php echo $kurigram; ?></td>
						<td class="tab"><a onclick="timeNow(kurigram)" href="#">Imposed</a></td>
						<td><input id="kurigram" type="time" name="kurigram" value="" /></td>
					</tr>
					<tr>
						<td>Lalmonirhat</td>
						<td><?php echo $lalmonirhat; ?></td>
						<td class="tab"><a onclick="timeNow(lalmonirhat)" href="#">Imposed</a></td>
						<td><input id="lalmonirhat" type="time" name="lalmonirhat" value="" /></td>
					</tr>
					<tr>
						<td>Mithapukur</td>
						<td><?php echo $mithapukur; ?></td>
						<td class="tab"><a onclick="timeNow(mithapukur)" href="#">Imposed</a></td>
						<td><input id="mithapukur" type="time" name="mithapukur" value="" /></td>
					</tr>
					<tr>
						<td>Polasbari</td>
						<td><?php echo $polashbari; ?></td>
						<td class="tab"><a onclick="timeNow(polashbari)" href="#">Imposed</a></td>
						<td><input id="polashbari" type="time" name="polashbari" value="" /></td>
					</tr>
				
				</table>

 	</div>

	<div class="col-2">		
			<table>

					<tr>
						<th colspan="2" style="background-color:#4E8239 ">Rangpur</th>
					</tr>
					<tr>
						<th colspan="2" style="background-color:#4E8239 ">Rangpur</th>
					</tr>
					<tr>
						<th>Inform</th>
						<th>Time</th>
					</tr>
					<tr>
						<td  class="tab" ><a onclick="timeNow(ponchogors)" href="#">Withdraw</a></td>
						<td><input id="ponchogors" type="time" name="ponchogors" value="" /></td>
					</tr>
					<tr>
						<td class="tab"><a onclick="timeNow(thakurgaons)" href="#">Withdraw</a></td>
						<td><input id="thakurgaons" type="time"  name="thakurgaons" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(purbosadipurs)" href="#">Withdraw</a></td>
						<td><input id="purbosadipurs" type="time" name="purbosadipurs" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(barapukurias)" href="#">Withdraw</a></td>
						<td><input id="barapukurias" type="time" name="barapukurias" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(saidpurs)" href="#">Withdraw</a></td>
						<td><input id="saidpurs" type="time" name="saidpurs" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(jaldhakas)" href="#">Withdraw</a></td>
						<td><input id="jaldhakas" type="time" name="jaldhakas" value="" /></td>
					</tr>
					<tr>
						<td class="tab"><a onclick="timeNow(rangpurs)" href="#">Withdraw</a></td>
						<td><input id="rangpurs" type="time" name="rangpurs" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(kurigrams)" href="#">Withdraw</a></td>
						<td><input id="kurigrams" type="time" name="kurigrams" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(lalmonirhats)" href="#">Withdraw</a></td>
						<td><input id="lalmonirhats" type="time" name="lalmonirhats" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(mithapukurs)" href="#">Withdraw</a></td>
						<td><input id="mithapukurs" type="time" name="mithapukurs" value="" /></td>
					</tr>
					<tr>

						<td class="tab"><a onclick="timeNow(polashbaris)" href="#">Withdraw</a></td>
						<td><input id="polashbaris" type="time" name="polashbaris" value="" /></td>
					</tr>
					
				
				</table>
 	</div>	
<div class="col-2">
 		<button type="submit" id="submit" onclick="clearStorage()" class="btn btn-danger">Clear</button>
 		<button type="submit" id="save" class="btn btn-info"> SAVE</button>
 		<input type="submit" name="submit" class="btn btn-success" value="Save Time">
 	</div>
</div>
</form>
<script src="form.js"></script>
<script src="form1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
  </body>
</html>