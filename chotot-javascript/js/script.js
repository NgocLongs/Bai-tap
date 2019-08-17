//<!-- Click Image To Open File -->
	$("#img").css('opacity', 0);
	$('#select_img').click(function(event) {
		event.preventDefault();
		$("#img").trigger('click');
	});
	// $("#img").change(function(){
	// 	var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
	// 	$("#filePath").html("<b>Selected File: </b>" + fileName);
	// });

//<!-- Remove Image Preview -->
	function removeImage(btnstate) {
		var remove = document.getElementById("imagePreview");
		remove.parentNode.removeChild(remove);
		var close = document.getElementById("icon-close");
		close.parentNode.removeChild(close);
	}

// <!-- Check And Upload File -->
	// $('#preview').css('opacity', 0);
	$("#img").change(function() {
		var file_data = $('#img').prop('files')[0];
		var type = file_data.type;
		var math = ["image/png", "image/jpeg", "image/jpg"];
		// var size = $("#img")[0].files[0].size;
		var size = file_data.size;
		console.log(file_data);
		console.log(type);
		console.log(size);
		if (type == math[0] || type == math[1]) {
			if(size <= 5000000) {
				var form_data = new FormData();
				form_data.append('file', file_data);
				$.ajax({
					url: 'upload.php',
					dataType: 'text',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					type: 'POST',
					success: function(res) {
						$('.status').text(res);
						$('#img').val('');
						// $('#filePath').remove();
						// $('#preview').css('opacity', 100);
					}
				});
			} else {
				alert("File có dung lượng lớn hơn 5Mb");
				$('.status').text("File có dung lượng lớn hơn 5Mb.");
				$('#img').val('');
			}
		} else {
			alert("Chỉ được upload file ảnh có đuôi: jpg, png, jpeg");
			$('.status').text("Chỉ được upload file ảnh có đuôi: jpg, png, jpeg");
			$('#img').val('');
		}
		return false;
	});
	//// Show Image Preview
	// function readURL(input) {
	// 	if(input.files && input.files[0]) {
	// 		var reader = new FileReader();

	// 		reader.onload = function(e) {
	// 			$('#imagePreview').attr('src', e.target.result);
	// 		}

	// 		reader.readAsDataURL(input.files[0]);
	// 	}
	// }

	// $('#img').change(function() {
	// 	readURL(this);
	// });

	

	// Show Multiple Image Preview
	$(function () {
    $("#img").change(function () {
        if (typeof (FileReader) != "undefined") {

            var preview = $("#preview");
            preview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;

            $($(this)[0].files).each(function () {

                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img id='imagePreview' />");
                        img.attr("style", "height:150px;width: 150px");
                        img.attr("src", e.target.result);
                        preview.append(img);
                        preview.append('<i class="fa fa-times-circle" id="icon-close" onclick="removeImage(this)"></i>');
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    alert(file[0].name + " is not a valid image file.");
                    preview.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});