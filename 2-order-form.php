<!DOCTYPE html>
<html>
  <head>
    <title>Order Form Example</title>
    <link href="2-theme.css" rel="stylesheet">
  </head>
  <body>
    <?php
    // (A) PROCESS ORDER FORM
    if (isset($_POST['name'])) { 
      require "3-process.php"; 
      echo $result == "" 
        ? "<div class='notify'>Thank You! We have received your order</div>" 
        : "<div class='notify'>$result</div>" ;
    }
    ?>

    <!-- (B) ORDER FORM -->
    <form id="orderform" method="post" target="_self">
      <h1>Order Form</h1>
      <label for="name">Name:</label>
      <input type="text" name="name" /> 
      <label for="email">Email:</label>
      <input type="email" name="email" /> 
      <label for="tel">Telephone:</label>
      <input type="text" name="tel" /> 
      <label for="qty">Quantity Needed:</label>
      <input type="number" name="qty" /> 
      <label for="notes">Additional Notes (if any):</label>
      <textarea name="notes"></textarea>
      <input type="submit" value="Place Order"/>
    </form>
  </body>
</html>