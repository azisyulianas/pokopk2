	$(document).ready(function(){
		load_data();
		function load_data(tipe1,tipe2,keyword){
			$.ajax({
				method:"POST",
				url:"data.php",
				data: {tipe1: tipe1,tipe2: tipe2, keyword: keyword},
				success:function(hasil)
				{
					$('.data').html(hasil);
				}
			});
	 	}
		$('#NamaPokemon').keyup(function(){
			var tipe1 = $("#Tipe1").val();
            var tipe2 = $("#Tipe2").val();
    		var keyword = $("#NamaPokemon").val();
			load_data(tipe1,tipe2,keyword);
		});
		$('#Tipe1').change(function(){
			var tipe1 = $("#Tipe1").val();
            var tipe2 = $("#Tipe2").val();
    		var keyword = $("#NamaPokemon").val();
			load_data(tipe1,tipe2, keyword);
		});
        $('#Tipe2').change(function(){
			var tipe1 = $("#Tipe1").val();
            var tipe2 = $("#Tipe2").val();
    		var keyword = $("#NamaPokemon").val();
			load_data(tipe1,tipe2,keyword);
		});
		// $("#Mega").click(function() {		
		// });
	});