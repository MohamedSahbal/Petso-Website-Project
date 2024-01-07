<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$day = $_POST['d'];
$time = $_POST['t'];
$select = $_POST['Select'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="cksendStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .yes{
        text-decoration: none;
    color: white;
    font-size: 17px;
    background-color:  #65C178;
    border: 2px solid;
    border-radius: 50px;
    padding: 10px 10px;
    margin-top: 10px;
    margin-right: 370px;
    padding-left: 320px;
    }
</style>
<body>
<div class="form">
    <h1>Is That The Info You've Entred?......If Not Edit It And Resubmit. </h1>
                <div class="acform">
                    <form action="cof.html" method="post">
                        <input type="text" required  name="Name" value= <?php echo "$name" ?>>
                        <input type="email" required name="Email" value= <?php echo "$email" ?> >
                        <input type="date" required name="d" value= <?php echo "$day" ?> >
                        <input type="time" required  name="t" value= <?php echo "$time" ?> >
                        <select name="Select" required id="" value= <?php echo "$select" ?> >
                            <option value="Service 1">medical check</option>
                            <option value="Service 2">Groming</option>
                            <option value="Service 3">Training</option>
                        </select>
                        <input type="submit" value="Submit" placeholder="Submit" class="yes">

                    </form>
                </div>
            </div>
</body>
</html>