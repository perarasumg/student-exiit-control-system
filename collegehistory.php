<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Form</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="date"] {
      /* additional styling for date input */
      appearance: none;
      padding: 10px;
    }

    .box {
      display: block;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-right: 10px;
    }

    button.restore {
      background-color: #3498db;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body id="body">

<div class="container">
  <h2>Student Form</h2>
  <form action="the.php" method="post">
    <label for="studentId">Student ID:</label>
    <input type="text" id="studentId" name="studentId" required>

    <div id="box">
      <label for="department">Department:</label>
      <select id="department" name="department" >
        <option value="" disabled selected>Select Department</option>
        <option value="computer-science">MCA</option>
        <option value="engineering">MBA</option>
        <option value="mathematics">BTECH</option>
        <!-- Add more options as needed -->
      </select>

      <label for="fromDate">From Date:</label>
      <input type="date" id="fromDate" name="fromDate" >

      <label for="toDate">To Date:</label>
      <input type="date" id="toDate" name="toDate" >
    </div>
    <button type="button" class="restore">Restore</button>
    <button type="submit">Submit</button>
  </form>
</div>

<script>
  $(document).ready(function() {
    // jQuery function to hide the element when the button is clicked
    $("#studentId").click(function() {
      $("#box").hide();
    });

    // jQuery function to show the hidden element when the restore button is clicked
    $(".restore").click(function() {
      $("#box").show();
    });
  });
</script>

</body>
</html>
