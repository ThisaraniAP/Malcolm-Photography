<!DOCTYPE html>
<html>
<head>
    <?php include('db_connect.php') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Photographs</title>

    <style type="text/css">
        :root {
            --bg-color: #dfe2d9; /*blue*/
            --text-color: #dfe2d9; /*white*/
            --second-bg-color: #3f2e22; /*brown*/
            --main-color: #1e2d37; /*dark blue*/
            --header-footer: #1e2d37bf; /*transparent*/ 
        }
        *{
            font-family: 'Bookman Old Style';
        }
        body {
            background-image: url('images/dash.jpg');
            color: var(--main-color);
            font-size: 16px;
        }

        h1 {
            color: var(--text-color);
            font-size: 40px;
            text-align: center;
        }

        table.photos {
            border-collapse: collapse;
            margin-top: 30px;
            width: 100%;
            margin-bottom: 50px;
        }

        table.photos th,
        table.photos td {
            background-color: var(--bg-color);
            border: 2px solid var(--main-color);
            padding: 8px;
            text-align: center;
        }

        table.photos th {
            color: var(--main-color);
            font-weight: bold;
        }

        .btn {
            border: var(--main-color) solid 2px;
            background-color: var(--text-color);
            color: var(--main-color);
            width: 100px;
            margin-top: 5px;
        }

        .btn:hover {
            color: var(--text-color);
            background-color: var(--main-color);
            border: var(--main-color) solid 2px;
            transition: .7s;
        }
        #btnback{
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="main.php"><button class="btn" id="btnback">< Back</button></a>
        <h1>EDIT PHOTOGRAPHS</h1>

        <table class="photos">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Description</th>
                <th>Action</th>
            </tr>

            <?php
                $sql = "SELECT * FROM tbl_photographs";
                $run = mysqli_query($con, $sql);

                if (mysqli_num_rows($run) > 0) {
                    foreach ($run as $data) {
            ?>

                    <tr>
                        <td><?= $data['ID'] ?></td>
                        <td><?= $data['Name'] ?></td>
                        <td><?= $data['Cat'] ?></td>
                        <td><img src="upload/<?= $data['Image'] ?>" width='100px'></td>
                        <td><?= $data['Description'] ?></td>
                        <td>
						    <a href="update.php?ID=<?=$data['ID']?>" class="btn btn-primary">EDIT</a>

                        <form action="function.php" method="POST">
                            <button class="btn btn-danger" name="delete" value="<?=$data['ID']?>">DELETE</button>
                        </form>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
