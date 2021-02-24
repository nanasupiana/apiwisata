<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>

<body>
<div class="container">
<h1>Lokasi Data</h1>
	<br />	
	<div class="row">
	<div class="col-md-12">
	<form method="post" action="<?php echo base_url('lokasidata/add_detail') ?>">
		<div class="form-group">			
		<input type="text" class="form-control" id="id" name="id" placeholder="Nama Lokasi" value="{id}" readonly>
		</div>				
		<div class="form-group">
              <label>Foto Profile</label>
                  <input id="foto" name="foto" type="file" style="width: 100%;" onchange="readFile(this);" />                
              </div>
              <div class="form-group">                
              <img src="http://nakertrans.sumbarprov.go.id/images/noimage.jpg" id="Urlfoto" name="Urlfoto" alt=" " width="90" height="80" />                
              </div>			                 
              <input type="hidden" name="urlimagebase64" id="urlimagebase64" class="form-control">              
            </div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	</div>
</div>
	
</body>

</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable({
			"paging": false,
			"searching": false
		});
	});

	function readFile(evt) {
    var ProfileImage = document.getElementById(evt.id);
    var f = ProfileImage.files[0]
    var obj = evt.id;
    if (f) {
      if (/(jpe?g|png|gif)$/i.test(f.type)) {
        var r = new FileReader();
        r.onload = function(e) {
          var base64Img = e.target.result;
          var binaryImg = convertDataURIToBinary(base64Img);
          var blob = new Blob([binaryImg], {
            type: f.type
          });
          blobURL = window.URL.createObjectURL(blob);
          fileName = f.name;
          document.getElementById('Urlfoto').src = base64Img;
          document.getElementById('urlimagebase64').value = base64Img;
        }
        r.readAsDataURL(f);
      } else {
        alert("Failed file type");
      }
    } else {
      alert("Failed to load file");
    }
  }

  function convertDataURIToBinary(dataURI) {
    var BASE64_MARKER = ';base64,';
    var base64Index = dataURI.indexOf(BASE64_MARKER) + BASE64_MARKER.length;
    var base64 = dataURI.substring(base64Index);
    var raw = window.atob(base64);
    var rawLength = raw.length;
    var array = new Uint8Array(new ArrayBuffer(rawLength));

    for (i = 0; i < rawLength; i++) {
      array[i] = raw.charCodeAt(i);
    }
    return array;
  }
</script>