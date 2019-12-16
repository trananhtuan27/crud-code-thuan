<?php

$index = $_GET["index"];

$currentData = file_get_contents('../data.json');
$arr = json_decode($currentData, true);

$name = $arr[$index]["name"];
$age = $arr[$index]["age"];
$address = $arr[$index]["address"];
$group = $arr[$index]["group"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>
<form action="update.php" method="get">

        <div class="row">
            <div class="col-12 page-title mb-2">
                <tr>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" value="<?php echo $age ?>">
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address ?>">
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <label>Group</label>
                        <select class="form-control" name="group">
                            <option value="C0919K1" <?php echo $group == "C0919K1" ? " selected" : ""; ?>>C0919K1
                            </option>
                            <option value="C0919I1" <?php echo $group == "C0919I1" ? " selected" : ""; ?>>C0919I1
                            </option>
                            <option value="C1019K1" <?php echo $group == "C1019K1" ? " selected" : ""; ?>>C1019K1
                            </option>
                            <option value="C1019I1" <?php echo $group == "C1019I1" ? " selected" : ""; ?>>C1019I1
                            </option>
                        </select>
                    </div>
                </tr>
                <tr>
                    <td colspan="2"><input class=" btn-danger" type="submit" value="UPPDATE"</td>
                </tr>
            </div>
        </div>
    </div>
</form>
</body>
</html>
