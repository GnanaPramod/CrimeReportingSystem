<?php
include "connectdb.php";

$id=$_GET["id"];

mysqli_query($data,"delete from registration where id=$id");
?>

<script type="text/javascript">
    window.location="user.php";
</script>