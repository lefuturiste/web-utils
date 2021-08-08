<?php

$path = __DIR__ . '/../../tmp/quickupload';

if (!file_exists($path)) {
  mkdir($path);
}
$path = realpath($path);

function slugify($string){
  return strtolower(trim(preg_replace('/[^.A-Za-z0-9-]+/', '-', $string), '-'));
}

if (isset($_FILES['file'])) {
  $f = $_FILES['file'];
  copy($f['tmp_name'], $path . '/' . uniqid() . '_' . slugify($f['name']));
  ?>
  <div style="padding: 20px; border: 1px solid green; background: green; color: white">
    File uploaded!
  </div>
  <?php
}
?>
<h3>QuickUpload</h3>
<form enctype="multipart/form-data" method="POST">
  <input type="hidden" name="name" value="wow" />
  <input type="file" name="file" />
  <input type="submit" value="Submit">
</form>