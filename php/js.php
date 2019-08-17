<!DOCTYPE html>
<html>
<head>
    <title>Client Side Image Preview</title>
</head>
<body style="background: lightgrey">
<center>
    <br/><br/><br/>
    <img id="preview" src="noimage.jpg" width="350px" height="320px"/><br/>
    <input type="file" id="image" style="display: none;"/>
    <!--<input type="hidden" style="display: none" value="0" name="remove" id="remove">-->
    <a href="javascript:changeProfile()">Change</a> |
    <a style="color: red" href="javascript:removeImage()">Remove</a>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function changeProfile() {
        $('#image').click();
    }
    $('#image').change(function () {
        var imgPath = this.value;
        var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
            readURL(this);
        else
            alert("Please select image file (jpg, jpeg, png).")
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
//              $("#remove").val(0);
            };
        }
    }
    function removeImage() {
        $('#preview').attr('src', 'noimage.jpg');
//      $("#remove").val(1);
    }
</script>
</body>
</html>