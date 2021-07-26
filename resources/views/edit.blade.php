<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" class="form-control" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="address" class="form-control" placeholder="Enter address" name="address">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="price" class="form-control" placeholder="Enter price" name="price">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="description" class="form-control" placeholder="Enter description" name="description">
        </div>
        <div class="form-group">
            <label for="details">Details:</label>
            <input type="details" class="form-control" placeholder="Enter details" name="details">
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail:</label>
            <input type="thumbnail" class="form-control" placeholder="Enter thumbnail" name="thumbnail">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="status" class="form-control" placeholder="Enter status" name="status">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
