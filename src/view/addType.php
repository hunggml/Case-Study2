<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">Home Type</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</head>
<body>
<style>
    table {
        margin: 0 auto;
        border: 1px;
        background-color: #0e84b5;
        border-radius: 10px;
    }

    td {
        padding-top: 10px;
        color: white;
    }

    button {
        align-content: center;
        width: 600px;
    }

    input {
        width: 400px;
    }
    #header{
        margin: 0 auto;
    }
    #main{
        font-size: 20px;
        background-color: #0e84b5;
        border-radius: 10px;
        color: white;
    }
    textarea{
        width: 400px;
    }

</style>
<br>

<table id="header">
    <tr>
        <th id="main">ADD TYPE</th>
    </tr>
</table>
<br>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Product Type :
            </td>
            <td>
                <input type="text" name="name" placeholder="Enter  Type">
            </td>
        </tr>
        <tr>
            <td>
                Description :
            </td>
            <td>
                <textarea type="text" name="des" placeholder="Enter Description"></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-success">ADD</button>
            </td>

        </tr>
    </table>

</form>
</body>
</html>
