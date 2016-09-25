<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</tbody>
</table>
<div id="bottom_anchor"></div>
<div class="bg-primary back" onclick="back();"><strong>Back to Main Page</strong></div>
<script>
function viewDetail($id, $name) {
	layer.open({
      type: 2,
      title: 'Details of ' + $name,
      shade: [0.8, '#393D49'],
      shadeClose: true,
      maxmin: true,
      area: ['90%', '90%'],
      content: 'http://115.29.108.74/hospital/detail/' + $id
    });
}

function moveScroll() {
    var scroll = $(window).scrollTop();
    var anchor_top = $("table").offset().top;
    var anchor_bottom = $("#bottom_anchor").offset().top;
    if (scroll > anchor_top && scroll < anchor_bottom) {
		clone_table = $("#clone");
		if (clone_table.length == 0) {
			clone_table = $("table").clone();
			clone_table.attr('id', 'clone');
			clone_table.css({
				position:'fixed',
				'pointer-events': 'none',
				top:0
			});
			clone_table.width($("table").width());
			$("#table-container").append(clone_table);
			$("#clone").css({visibility: 'hidden'});
			$("#clone thead").css({visibility: 'visible'});
		}
    }
	else {
		$("#clone").remove();
    }
}

function back() {
	window.location.href = '<?php echo $mainpage;?>';
}
$(window).scroll(moveScroll);
</script>
</body>
</html>