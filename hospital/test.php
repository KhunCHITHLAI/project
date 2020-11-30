<?php
require("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>blood registration</title>
    <link href="css/bootstrap.css" rel="stylesheet">

</head>
<body>
<div class="row">
		<div class="col-md-12">
			<label>Gender<span style="color: red;">*</span></label>
			<div id="input5">
			<input type="radio" name="gender" value="male" class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male'): ?>checked='checked'<?php endif; ?> > Male
			<input type="radio" name="gender" value="female"  class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] ==  'female'): ?>checked='checked'<?php endif; ?> > Female

		</div>
		<span style="color: red" id="span5"></span>
		</div>

	</div>

    <div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" id="booking" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">SUBMIT
		</button>
		</div>
    <script>
    $(document).ready(function(){

$("#booking").click(function(){
    if ($("#input5").val()=="") {
		$("#span5").text("!require gender");
	}
	else{
		$("#span5").text("");
    }
});
    });
    
    </script>
  <script src="jquery.min.js"></script>

    </body>
</html>

<?php
require("footer.php");
?>