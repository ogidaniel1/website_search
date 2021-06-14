<!DOCTYPE html>
<html>
<head>
	<title>Search User</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
	<script>
		function showSuggestion(str){
			if(str.length == 0){
				document.getElementById('output').innerHTML = '';
			
		  // console.log(str);
		}
		else{
			//AJAX REQUEST

			// xhttp.open("GET", "ajax_info.txt", true);
            // xhttp.send();


			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('output').innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET", "suggestion.php?q="+str, true);
			xmlhttp.send();
		}
	}
	</script>

</head>
<body>
	<div class="container">
		<h1>Search users</h1>
		<form>
			Search User: <input type="text" name="" class="form-control" onkeyup="showSuggestion(this.value)">
		</form>
		 <p>Suggestions: <span id="output" style="font-weight:bold"><span></p>
	</div>

</body>
</html>