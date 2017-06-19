<!DOCTYPE html>
<html>
    <body>
        <div id="load_content"></div>
        <button type="button" onclick="loadDoc()">Change Content</button>
        <script>
            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("load_content").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "http://127.0.0.1/dating/u/", true);
                xhttp.send();
            }
        </script>
    </body>
</html>