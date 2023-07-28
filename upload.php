<?php
$targetFolder = '/C:/Users/Tanishqa/Desktop/project2'; // The folder where the uploaded files will be saved
$uploadedFile = $_FILES['fileUpload']['tmp_name'];
$destination = 'C:/Users/Tanishqa/Desktop/project2/' . $_FILES['fileUpload']['name'];
$fileType = pathinfo($destination, PATHINFO_EXTENSION);

// Check if the uploaded file is an Excel file
if ($fileType !== 'xlsx' && $fileType !== 'xls') {
    echo 'Please upload a valid Excel file.';
} else {
    if (move_uploaded_file($uploadedFile, $destination)) {
        echo 'File uploaded successfully!';
    } else {
        echo 'Error uploading the file.';
    }
}
?>
