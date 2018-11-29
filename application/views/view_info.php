	<table>
    	<?php
			foreach($results as $row){
			$fname = $row->first_name;
			$lname = $row->last_name;
			$address = $row->address;
			
		?>
        	<tr>
            	<td width="175"><?php echo $fname; ?></td>
                <td width="175"><?php echo $lname; ?></td>
                <td width="230"><?php echo $address; ?></td>
            </tr>
  
       <?php } ?>
        </table>