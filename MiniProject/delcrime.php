<?php
include "connectdb.php";

$id=$_GET["id"];

mysqli_query($data,"delete from report where id=$id");
?>

<script type="text/javascript">
    window.location="crimereports.php";
</script>