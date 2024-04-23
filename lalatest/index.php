<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quotation Generator</title>
  </head>
  <body>
    <h1>Quotation Generator</h1>
    <form method="post" action="save_quotation.php">
      <label for="date">Date:</label>
      <input type="text" name="date" id="date" /><br /><br />

      <label for="client">Client:</label>
      <input type="text" name="client" id="client" /><br /><br />

      <label for="item">Item:</label>
      <input type="text" name="item" id="item" /><br /><br />

      <label for="quantity">Quantity:</label>
      <input type="text" name="quantity" id="quantity" /><br /><br />

      <label for="unit_price">Unit Price:</label>
      <input type="text" name="unit_price" id="unit_price" /><br /><br />

      <label for="vat">VAT:</label>
      <input type="text" name="vat" id="vat" /><br /><br />

      <label for="conditions">Conditions:</label>
      <input type="text" name="conditions" id="conditions" /><br /><br />

      <input type="submit" value="Save Quotation" />
    </form>
  </body>
</html>
