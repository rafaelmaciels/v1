<?php
$dir = '.';
$folders = array_filter(scandir($dir), function($item) use ($dir) {
    return is_dir($dir . '/' . $item) && !in_array($item, ['.', '..', 'index.html', 'list.php']);
});
sort($folders);
?>
<!DOCTYPE html>
<html>
<head><title>Directory Listing</title></head>
<body>
<?php foreach($folders as $folder): ?>
<a href="<?php echo htmlspecialchars($folder); ?>/"><?php echo htmlspecialchars($folder); ?>/</a><br>
<?php endforeach; ?>
</body>
</html>