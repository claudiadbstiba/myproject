<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe to Newsletter</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
  <form action="action_page.php">
    <div class="container">
        <h1>Claudenne</h1>
</div>
<div class="container">
    
    <label for="email">E-mail:</label>
    <input type="email" placeholder="mary@gmail.com" name="email" required>
   
    <label for="name">Name:</label>
    <input type="text" placeholder="John" name="name" required>
   
    <label for="surname">Surname:</label>
    <input type="text" placeholder="Smith" name="surname" required>
   
    <label for="date-of-birth">Date of birth:</label>
    <input type="date" name="date-of-birth" required>
    
    <label for="city">City</label>
    <input type="text" placeholder="Dublin" name="city" required>
    
    <label for="checkbox"></label>
    <h2>Marketing Permissions</h2>
    Claudenne International Ltd will use this informations with your completed details to keep you updated with our news and marketing campaigns.
    Please check the box to agree. <br>
    Receive marketing content: 

<input class="checkbox" type="checkbox" checked="checked" name="subscribe" value="yes">
</label>
<p>
If you change your mind and you don't want to receive our emails
you can undo this accesing the link from every email you reveive from us or
you can email us to cdbs@gmail.com
</p>
<button class="container" type="submit">Subscribe</button>
</div>
  </form>
</body>
</html>