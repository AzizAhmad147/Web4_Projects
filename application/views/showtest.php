 

<select>
<?php  foreach($Category as $cat){ ?>
<option value="<?php echo $cat['Id']; ?>">

<?php echo $cat['Category']; ?>


</option>
<?php  } ?>

</select>
 
</table>