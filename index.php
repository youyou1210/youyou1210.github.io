<?php
$url = 'https://ringme-ai-receptionist.lovable.app/';
$content = file_get_contents($url);
// Rewrite links to go through your proxy
$content = str_replace('href="/', 'href="/proxy.php?url=/', $content);
echo $content;
?>
