<!-- Modules -->
	<script type="text/javascript" src="js/app.js"></script>

	<!-- Controllers -->
	<script type="text/javascript" src="js/controller/MainController.js"></script>

	<footer id="footer">
	<div class="container">
		<div class="pull-left">
			&copy; BEM KM Fasilkom Unsri 2016
		</div>
		<div class="pull-right">
			Created by PTI BEM KM Fasilkom Unsri
		</div>
	</div>
</footer>
<script type="text/javascript">
	var docHeight = $(window).height();
	var footerHeight = $('#footer').height();
	var footerTop = $('#footer').position().top + footerHeight;

	if (footerTop < docHeight) {
		$('#footer').css('margin-top', (docHeight - footerTop - 15) + 'px');
	}
	
	$("#topContainer").css("height", $(window).height());
	$(".contentContainer").css("min-height", $(window).height());

</script>		