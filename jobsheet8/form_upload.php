<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Unggah File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Pilih file untuk diunggah:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <input type="submit" value="Unggah File" name="submit">
    </form>
</body>
</html>
