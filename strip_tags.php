<?php

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#">Other text</a>';

echo strip_tags($text);
echo strip_tags($text, '<p><a>');