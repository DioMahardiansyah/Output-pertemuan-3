<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
</head>
<style>
    form{
        text-align: center;
    }
</style>
<body bgcolor="#97D2EC">
    <center><h1>Upload Gambar</h1></center><hr size=10px color=black>
<form action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="userfile" />
                    <input type="submit" value="upload" name="submit" />
                </form>
<?php
    if(isset($_POST['submit'])){
            $fileName = basename($_FILES['userfile']['name']); 
            $fileTmpName = $_FILES['userfile']['tmp_name'];
            $path = "files/".$fileName; 
            
            move_uploaded_file($fileTmpName,$path);
            echo "success";
    }
?>

    <img src="<?php echo $path?>" alt="">
</body>
</html>