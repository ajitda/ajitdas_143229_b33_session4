<?php

$str = "
<html>
<head></head>
<body>
<br> is a html tag
</body>
</html>
";
echo '<pre>';
echo htmlentities($str);
echo '</pre>';

