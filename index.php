<!-- index.php -->
<!DOCTYPE html>
<html>
<head><title>PPE Detection Upload</title></head>
<body>
<h2>Upload an Image for PPE Detection</h2>
<form action="result.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <br><br>
    <input type="submit" value="Upload & Detect">
</form>
</body>
</html>
