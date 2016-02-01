// lets hide the player 2 side, so they can do it without peeking
// lets also hide the RPSSL and results so we can show them more prettily
// we can show them off 1 by 1 with a simple jquery fade
$(document).ready(function()
{
	$('.player2, #results').hide();

	$(".actionName").hide();
	function fades($div, cb)
	{
		$div.fadeIn(500, function ()
		{
			$div.fadeOut(500, function ()
			{
				var $next = $div.next();
				if ($next.length > 0)
				{
					fades($next, cb);
				} else
				{
					$('#results').show();
				}
			});
		});
	}
	function startFading($firstDiv) {
		fades($firstDiv, function () {
			startFading($firstDiv);
		});
	}
	startFading($(".actionName:first-child"));

	$('.datatables').DataTable();
});


// we need to be able to toggle back and forth so they can change their actions
$('.toggle').on('click', function()
{
	$('.player2, .player1').toggle();
});
