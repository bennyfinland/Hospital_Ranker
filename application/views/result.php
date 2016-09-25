<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<tr>
  <?php echo $rank_grid;?>
  <td><?php echo $data["hospital_name"];?></td>
  <td><?php echo $data["state"];?></td>
  <td><?php echo $data["catagory_value"];?></td>
  <td><a class="detail-btn" onclick="viewDetail('<?php echo $data["provider_number"];?>', '<?php echo $data["hospital_name"];?>');">Detail</a></td>
</tr>