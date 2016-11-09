<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","search.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
  <form action="search.php">
       Title:
        <br>
        <input type="text" name="Code" value="Code" onKeyup="showUser(this.value,)">
        
    </form>
    <br>
    <div id="txtHint"><b>Verhalen</b></div>
</body>
</html>