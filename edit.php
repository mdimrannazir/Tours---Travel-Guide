<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tours & Travel Guide</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootsrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Bootstrap JS & Poppers -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/style.css">    -->
    <style>
        body {
            background-image: url(photography.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            }

        .section1{
            display: flex;
        }
        .cancle_save{
            padding-top: 31px;
            padding-left: 785px;
        }
        .container{
            display: flex;
            

        }
        .Stay{
            margin-right: 20px;
        }
        .Activities{
            margin-right: 20px;
        }
        .button{
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="section1">
        <div class="edit">
            <h1>Edit:</h1>
        </div>
        <div class="cancle_save">
            <button class="button" style="margin-right: 8px">Cancle</button>
            <button class="button" style="margin-left: 8px">Save</button>
        </div>

    </div>


<form action="new2.html">
    <label for="name">Enter Place:</label>
    <input type="text" class="search-input" placeholder="name">
    <br><br>
    <label for="name">Upload Image:</label>
    <input type="file" id="myFile" name="filename">
    <br><br>
    <label for="name">Details:</label>
    <br>
    <textarea rows="4" cols="50" name="comment" placeholder="Details....."></textarea>
        <br><br>
        <div class="container">
            <div class="Stay">
                <h2>Stay</h2>
                <label for="name">Upload Image:</label>
                <input type="file" id="myFile" name="filename">
                <br><br>
                <textarea rows="4" cols="50" name="comment" placeholder="Details....."></textarea>
                <br><br>
                <button class="button" type="submit">Add more</button>
            </div>
            <div class="Activities">
                <h2>Activities</h2>
                <label for="name">Upload Image:</label>
                <input type="file" id="myFile" name="filename">
                <br><br>
                <textarea rows="4" cols="50" name="comment" placeholder="Details....."></textarea>
                <br><br>
                <button class="button" type="submit">Add more</button>
            </div>
            <div class="Foods">
                <h2>Foods</h2>
                <label for="name">Upload Image:</label>
                <input type="file" id="myFile" name="filename">
                <br><br>
                <textarea rows="4" cols="50" name="comment" placeholder="Details....."></textarea>
                <br><br>
                <button class="button" type="submit">Add more</button>
            </div>
        </div>

  </form>
</body>
</html>