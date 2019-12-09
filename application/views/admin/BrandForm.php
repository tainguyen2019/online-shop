<?php
foreach ($brands as $brand) { ?>
  <option value="<?php echo $brand['brand_id'] ?>"><?php echo $brand['brand_name'] ?></option>
<?php } ?>