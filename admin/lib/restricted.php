<?php
if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION['IDUser'])) { ?>
		<script language="javascript"> alert("Maaf, Silahkan Login Dahulu!");
		document.location.href='index.php'; </script>
	  <?php
	}
?>