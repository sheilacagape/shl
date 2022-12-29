
$(document).ready(function(){
	$("#updateCov").hide();
	$("#covSave").hide();
	$("#covCancel").hide();
	$image_crop = $('#updateCov').croppie({
		enableExif: true,
		viewport: {
			width: 800,
			height: 400,
			type: 'square'
		},
		boundary: {
			width:850,
			height:450
		}
	});

	$('#file').on('change', function(){
		var reader = new FileReader();
		reader.onload = function(event){
			$image_crop.croppie('bind',{ 
				url:event.target.result
			}).then(function(){
				// console.log('jQuery bind complete');
			});
			// console.log('pashnea');
		}
		reader.readAsDataURL(this.files[0]);
		$(".cover").hide();
		$("#updateCov").show();	
		$("#covSave").show();	
		$("#covCancel").show();	

	})

	// $('.crop-image').click(function(event){
		
	// })

	$( "#covCancel" ).click(function() {
		// alert( "Handler for cancel called." );
		$(".cover").show();
		$("#updateCov").hide();
		$("#covSave").hide();
		$("#covCancel").hide();
	});


	$( "#covSave" ).click(function() {
		// alert( "Handler for save called." );
		var id = document.getElementById("thisisID").value;
		$image_crop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(response){
			// $('#canvas').html(response);
			$.ajax({
				// url: "http://localhost/dot/upload.php",
				url: "http://farmhunt.tk/upload.php",
				type: "POST",
				data: {"image":response},
				success: function(data){
					saveToDb(data,id);
				}
			})
		})
	});
})

function saveToDb(data,id){
	$.ajax({
	    
	    type: 'GET',
	    // url: 'http://localhost/dot/admin/updateCover?link='+data+'&id='+id,
	    url: 'http://farmhunt.tk/admin/updateCover?link='+data+'&id='+id,

	    success: function(data) {
	    	// alert(data);
			// window.location = "http://localhost/dot/admin/redirected?msg="+"Successfully Updated Cover Photo!"+"&id="+data;	   
			window.location = "http://farmhunt.tk/admin/redirected?msg="+"Successfully Updated Cover Photo!"+"&id="+data;	   
		},
    })
}

$(document).ready(function(){
	$("#updateProf").hide();
	$("#profSave").hide();
	$("#profCancel").hide();
	$image_cropp = $('#updateProf').croppie({
		enableExif: true,
		viewport: {
			width: 200,
			height: 200,
			type: 'square'
		},
		boundary: {
			width:250,
			height:250
		}
	});

	$('#my_file').on('change', function(){
		var readerr = new FileReader();
		readerr.onload = function(event){
			$image_cropp.croppie('bind',{
				url:event.target.result
			}).then(function(){
				// console.log('jQuery bind complete');
			});
			// console.log('pashnea');
		}
		readerr.readAsDataURL(this.files[0]);
		$(".image").hide();
		$("#updateProf").show();	
		$("#profSave").show();
		$("#profCancel").show();	
	});

	$( "#profCancel" ).click(function() {
		// alert( "Handler for cancel called." );
		$(".image").show();
		$("#updateProf").hide();
		$("#profSave").hide();
		$("#profCancel").hide();
	});


	$( "#profSave" ).click(function() {
		// alert( "Handler for save called." );
		var id = document.getElementById("thisisID").value;
		$image_cropp.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(response){
			// $('#canvas').html(response);
			$.ajax({
				// url: "http://localhost/dot/upload.php",
				url: "http://farmhunt.tk/upload.php",
				type: "POST",
				data: {"profimage":response},
				success: function(data){
					// alert(data);
					saveToDbLogo(data,id);
				}
			})
		})
	});

	function saveToDbLogo(data,id){
		// alert(data);
		$.ajax({
		    type: 'GET',
		    // url: 'http://localhost/dot/admin/updateLogo?link='+data+'&id='+id,
		    url: 'http://farmhunt.tk/admin/updateLogo?link='+data+'&id='+id,
		    success: function(data) {
		    	// alert(data);
				// window.location = "http://localhost/dot/admin/redirected?msg="+"Successfully Updated Logo!"+"&id="+data;	
				window.location = "http://farmhunt.tk/admin/redirected?msg="+"Successfully Updated Logo!"+"&id="+data;	

			},
	    })
	}

});


$(document).ready(function(){
	$cropp = $('#addFeaturedPic').croppie({
		enableExif: true,
		viewport: {
			width: 700,
			height: 400,
			type: 'square'
		},
		boundary: {
			width:750,
			height:450
		}
	});

	$('#newFeaturedPics').on('change', function(){
		var read = new FileReader();
		read.onload = function(event){
			$cropp.croppie('bind',{
				url:event.target.result
			}).then(function(){
				// console.log('jQuery bind complete');
			});
			// console.log('pashnea');
		}
		read.readAsDataURL(this.files[0]);
		// $(".image").hide();
		$("#addFeaturedPic").show();	
		$("#featSave").show();
		$("#featCancel").show();	
	});

	$( "#featCancel" ).click(function() {
		// alert( "Handler for cancel called." );
		// $(".image").show();
		$("#addFeaturedPic").hide();
		$("#featSave").hide();
		$("#featCancel").hide();
	});


	$( "#featSave" ).click(function() {
		// alert( "Handler for save called." );
		var id = document.getElementById("thisisID").value;
		$cropp.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(response){
			// $('#canvas').html(response);
			$.ajax({
				// url: "http://localhost/dot/upload.php",
				url: "http://farmhunt.tk/upload.php",
				type: "POST",
				data: {"featimage":response},
				success: function(data){
					// alert(data);
					saveToDbFeat(data,id);
				}
			})
		})
	});

	function saveToDbFeat(data,id){
		// alert(data);
		$.ajax({
		    type: 'GET',
		    // url: 'http://localhost/dot/admin/addFeatPic?link='+data+'&id='+id,
		    url: 'http://farmhunt.tk/admin/addFeatPic?link='+data+'&id='+id,
		    success: function(data) {
		    	// alert(data);
				// window.location = "http://localhost/dot/admin/redirected?msg="+"Successfully Added a New Featured Photo!"+"&id="+data;	   
				window.location = "http://farmhunt.tk/admin/redirected?msg="+"Successfully Added a New Featured Photo!"+"&id="+data;	   
			},
	    })
	}
});