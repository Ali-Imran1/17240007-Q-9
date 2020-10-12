<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">

<title>Add Photo</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center text-primary">
                    Photo Upload
                </h1>
                <form action="photo_upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="title">Photographer Name</label>
                        <input type="text"  required name="name" id="name" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <label for="image">Photograph</label>
                        <input type="file" required class="form-control-file" name="upload" id="upload" accept="image/*">
                    </div>
                    <input type="submit" value="Upload Photo" class="btn btn-primary" name="submit">
                </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>