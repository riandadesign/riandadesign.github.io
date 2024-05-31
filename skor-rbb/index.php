<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator in php and bootstrap</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!-- build structure of calculator in bootstrap -->

  <div class="container">

    <div class="row">
      <div class="col-md-4 offset-md-4">
        <h1 class="mt-4 mb-3 text-center">Calculator</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <form action="index.php" method="post">
          <div class="form-group">
            <label for="first_number">First Number</label>
            <input type="number" name="first_number" id="first_number" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="second_number">Second Number</label>
            <input type="number" name="second_number" id="second_number" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="operator">Operator</label>
            <select name="operator" id="operator" class="form-control" required>
              <option value="">Select Operator</option>
              <option value="add">Add</option>
              <option value="subtract">Subtract</option>
              <option value="multiply">Multiply</option>
              <option value="divide">Divide</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" name="calculate" class="btn btn-primary btn-block my-3">Calculate</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  /* build calculator logic in php */

  if(isset($_POST['calculate'])){
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];
    $operator = $_POST['operator'];

    switch($operator){
      case 'add':
        $result = $first_number + $second_number;
        break;
      case 'subtract':
        $result = $first_number - $second_number;
        break;
      case 'multiply':
        $result = $first_number * $second_number;
        break;
      case 'divide':
        $result = $first_number / $second_number;
        break;
      default:
        $result = 0;
    }
  }

  ?>

  <!-- display result in bootstrap -->

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card">
          <div class="card-header">
            Result
          </div>
          <div class="card-body">
            <p>
              <?php
              if(isset($result)){
                echo $result;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>