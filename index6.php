<?php
if (isset($_GET["first-name"])  ){
    echo $_GET["first-name"];

} else if ( isset($_POST["first-name"])){
    echo $_POST["first-name"];

}
else if(count($_GET) < 1 && count($_POST)< 1){echo "Värdet saknas";

    echo "<a href=\"index6.html\">Back</a>";
}

