<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Activity5.php" method="post">
      Name: <input type="text" name="yourName"/>  <br /> 
      User Name: <input type="text" name="user_name"/>  <br /> 
      Password: <input type="text" name="password"/>  <br /> 
      Address: <input type="text" name="address"/>  <br /> 
    
      Country: 

      <select id="country" name="country">
                <option value="">Select a country</option>
                <option value="">Turkey</option>
                <option value="">USA</option>
                <option value="">Russia</option>
                <option value="">Germany</option>
                <br\>
</select>
<br />
<label for="zip_code">Zip Code:</label>
        <input type="text" id="zip_code" name="zip_code"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        Sex: 
          <input type="radio" name="female" value = "female"/>Female
        <input type="radio" name="male" value = "male"/>  Male <br /> 
        
        <label for="language">Language:</label>
        <input type="checkbox" id="language" name="language[]" value="Engslish"> English
        <input type="checkbox" id="language" name="language[]" value="French">French
        <input type="checkbox" id="language" name="language[]" value="Germany">Germany
        <br /> 

        <label for="about">About: </label><textarea name="about"></textarea><br> <br /> <br />



      <input type="submit" value="Submit" />




    </form>


</body>
</html>