<!DOCTYPE html>
<html>
<head>
	<title>Text To pdf </title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({ 
			selector: '#textarea',
			plugins: 'advlist autolink link image lists charmap print preview code textcolor colorpicker paste table insertdatetime imagetools emoticons charmap autosave autoresize advlist ' ,
			height: 450,
			inser_toolbar: 'quickimage quicktable',
			menubar: 'file edit insert view format table tools',
			statusbar: false
		});
	</script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<form method="post" name="pdfContent" action="textToPdf.php">
				<h3>Enter your text to convert to pdf :</h3>
				<div >
					<textarea id="textarea" class="form-control" name="content"></textarea>
				</div>	
				
				<div>
					<br>
					<input class="btn btn-primary"  type="submit" name="convert">
				</div>		
				
			</form>
		</div>
	</div>
</body>
</html>