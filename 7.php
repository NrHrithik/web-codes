<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>DIGITAL CLOCK</title>
  <style>
    body {
      background-color: sandybrown;
    }

    table {
      border: 1px solid black;
      margin: 0 auto;
    }

    td {
      padding: 10px;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <center>
    <h1>HARSHARAJ B - 4JK20IS019</h1>
    <h2>DIGITAL CLOCK</h2>
    <table>
      <tr>
        <td>
          <?php
          date_default_timezone_set('Asia/Kolkata');
          echo date("D:M:Y h:i:s A");
          ?>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
