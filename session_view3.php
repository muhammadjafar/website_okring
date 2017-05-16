<html>
<head>
	<title> Demo Session </title>
</head>
<body>
<h2> Demo Session Halaman 2 </h2>
<p>
<a href="http://localhost\ci\index.php\demo_session\halaman1">Halaman 1</a>&nbsp;
<a href="http://localhost\ci\index.php\demo_session\halaman2">Halaman 2</a>&nbsp;
</p>

<p> Username : <?php echo $this->session->userdata['username']; ?></p>

</body>
</html>