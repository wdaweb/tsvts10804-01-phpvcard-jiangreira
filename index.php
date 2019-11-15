<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Source+Code+Pro&display=swap" rel="stylesheet">
    <title>vCard產生器</title>
    <style>
        .main-location {
            width: 500px;
            margin: 0 auto;
            margin-top: 10px;
            text-align: center;
        }

        .main-location h1 {
            font-family: 'Source Code Pro', monospace;
            /* font-family: 'Noto Sans TC', sans-serif; */
        }

        .main-content {
            width: 450px;
            margin: 5px auto;
            text-align: left;
        }

        table {
            margin: auto;
        }

        tr td:nth-child(odd) {
            font-family: 'Source Code Pro', monospace;
        }
    </style>
</head>

<body>
    <div class="main-location">
        <h1>vCard產生器</h1>
        <div class="main-content">
            <form action="api.php" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Name </td>
                        <td><input type="text" name="Name" placeholder="Name"></td>
                    </tr>
                    <tr>
                        <td>Position </td>
                        <td><input type="text" name="Position" placeholder="ex:資深工程師"></td>
                    </tr>
                    <tr>
                        <td>Skills </td>
                        <td><textarea name="Skills" id="" cols="22" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td>Contact Phone </td>
                        <td><input type="text" name="Phone" placeholder="0912-345-678"></td>
                    </tr>
                    <tr>
                        <td>E-mail </td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr></tr>
                    <td>Choose Template</td>
                    <td><select name="Template" id="Template">
                            <option value="T1">--粉色</option>
                            <option value="T2">--藍色</option>
                            <option value="T3">--咖啡色</option>
                            <option value="T4">--靛藍色</option>
                            <option value="T5">--芥末黃</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Photo </td>
                        <td><input type="file" name="photo"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="預覽"></td>
                    </tr>
                </table>
        </div>
        </form>
    </div>
</body>

</html>