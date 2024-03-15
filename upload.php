<?php 
$tempName = $_FILES['upload']['tmp_name'];
$fileName = uniqid() . $_FILES['upload']['name'];
$uploadPath = '/uploads/' . $fileName;
$imageUrl = 'http://localhost/skills/uploads/' . $fileName;

$success = move_uploaded_file($tempName, $uploadPath);

$html = '<script>window.parent.CKEDITOR.tools.callFunction(%s, "%s", "%s");</script>';
$message = $success ? 'Uploaded successfully.' : 'Upload failed.';
echo sprintf($html, $_GET['CKEditorFuncNum'], $imageUrl, $message);