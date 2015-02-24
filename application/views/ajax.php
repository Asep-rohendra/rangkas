<script type="text/javascript">
	$(document).ready(function() {
		$("#konten").load('<?php echo site_url('utama/allBarang') ;?>');
		
		//Login
		
		$("a#login").click(function() 
			{
				$("#konten").load('<?php echo site_url('utama/form_login') ;?>');
				$("#pencarian").hide("slow");
				return false;
			});
		$("a#daftar").click(function() 
			{
				$("#konten").load('<?php echo site_url('utama/form_daftar') ;?>');
				$("#pencarian").hide("slow");
				return false;
			});
		//still edan
		$("a#allBarang").click(function() 
			{
				$("#konten").load('<?php echo site_url('utama/allBarang') ;?>');
				$("#pencarian").show("slow");
				return false;
			});
		$("a#tentang").click(function() 
			{
				$("#konten").load('<?php echo site_url('utama/tentang') ;?>');
				$("#pencarian").hide("slow");
				return false;
			});
		});
</script>