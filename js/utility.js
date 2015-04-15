$(document).ready(function() {
	//	Purpose: Loads uploaded image file to canvas. 
	//	PreCondition: User has uploaded a new image file.
	//	PostCondiiton: Image file will be drawn to canvas.
	$("#upload").change(function(){
	    readURL(this);
	});

	function readURL(input) {
	    if (input.files && input.files[0]) {	//	check if input file
	        var reader = new FileReader();		//	create new file reader
	        reader.onload = function (e) {		//	when the file loads
	            $('#img').attr('src', e.target.result);	//	attach image to img tag to display img 
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}

	//	Purpose: Changes filter when user selects new filter.
	//	PreCondition: User selects new filter.
	//	PostCondition: Applies new filter to Image canvas.
	$('#filterSelect').change(function() {
		applyOriginal();
		switch($('#filterSelect option:selected').val()) {
			case 'original': applyOriginal();
			break;
			case '1977': apply1977();
			break;
			case 'Amaro': applyAmaro();
			break;
			case 'Brannan': applyBrannan();
			break;
			case 'Earlybird': applyEarlybird();
			break;
			case 'Grayscale': applyGrayscale();
			break;
			case 'Hefe': applyHefe();
			break;
			case 'Hudson': applyHudson();
			break;
			case 'Inkwell': applyInkwell();
			break;
			case 'Kelvin': applyKelvin();
			break;
			case 'LoFi': applyLoFi();
			break;
			case 'Mayfair': applyMayfair();
			break;
			case 'NashVille': applyNashVille();
			break;
			case 'Nostalgia': applyNostalgia();
			break;
			case 'Rise': applyRise();
			break;
			case 'Sierra': applySierra();
			break;
			case 'Sutro': applySutro();
			break;
			case 'Toaster': applyToaster();
			break;
			case 'Valencia': applyValencia();
			break;
			case 'Walden': applyWalden();
			break;
			case 'Willow': applyWillow();
			break;
			case 'XPro2': applyXPro2();
			break;
		}
	});
});