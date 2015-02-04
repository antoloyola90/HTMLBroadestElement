
<html>

	<head>
		 <script data-require="jquery@1.10.1" data-semver="1.10.1" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
 	
 		    
		<script type="text/javascript">
			function getBroadest(){
				
				webAddr = document.getElementById("webAddr").value;
				toChange = document.getElementById("changeThis");
				alert(webAddr);
				urlStr = "http://www.ajax-cross-domain.com/cgi-bin/ACD/ACD.js?uri=("+ webAddr +")";
				$.get(urlStr, function(data, status){
        			alert("Data: " + data + "\nStatus: " + status);
    			});
				//httpGet(webAddr);
				 //toChange.innerHTML = ACD.responseText;
				
			}
		</script>
	</head>
	<body>
		<input id="webAddr" type="text" name="webAddr" value="http://www.google.com"><br>
		<button type="button" onclick="getBroadest()">Submit</button>
		<br><br>
		<p id="changeThis">hello1</p>
	</body>
</html>
