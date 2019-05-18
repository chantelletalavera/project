<?php
		
		include '../../connection.php';
		include 'patientmanagement.php';


		if (isset($_GET['delete_id'])){

			$delete = $conn->query("DELETE FROM tbl_patientpersonalrecords WHERE fld_patientID = '" .$_GET['delete_id']. "'");

		if($delete){

		echo '<script>
        setTimeout(function() {
            swal({
                title: "Successful!",
                text: "Record Deleted!",
                type: "success"
            }, function() {
                window.location = "patientmanagement.php";
            });
           }, 100);
        </script>';         
			}else{
				 echo '<script>
        setTimeout(function() {
            swal({
                title: "Alert!",
                text: "Record Deletion Failed!",
                type: "error"
            }, function() {
                window.location = "patientmanagement.php";
            });
           }, 100);
        </script>';         
			}
		}


		?>
