<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
<form action="thankyou.php" method="get">
            <label for="titre"> Just Some Quick Details </label>
            <br><br>
            <label for="email"> Email : </label>
            <input type="email" name="email" id="email" placeholder=" Your Email ">
            <br><br>
            <label for="location"> Location : </label>
            <select name="location" id="location">
                    <option value=""> Select </option>
                    <option value="moncton">Moncton</option>
                    <option value="halifax">Halifax</option>
                    <option value="sydney">Sydney</option>
                    <option value="montreal">Montreal</option>
            </select>
           
            <br><br>
            <label for="datetrip"> Trip Date : </label>
            <input type="date" name="datetrip" id="datetrip" placeholder=" mm/dd/yyyy ">
            <br><br>
            <input type="submit" value="Submit">
          </form>

</body>
</html>