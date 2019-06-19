<!DOCTYPE html>
<html>
<body>

<form action="/action_page.php">
  Enter a date before 1980-01-01:
  <input type="date" name="bday" max="1979-12-31"><br>

  Enter a date after 2000-01-01:
  <input type="date" name="bday" min="2000-01-02"><br>

  Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"><br>

  <input type="submit">
</form>

<p><strong>Note:</strong> The max and min attributes of the input tag is not supported in Internet Explorer 9 and earlier versions.</p>

</body>
</html>
