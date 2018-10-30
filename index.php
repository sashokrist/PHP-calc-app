
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Starter Template for Bootstrap</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  body {
    padding-top: 5rem;
  }
  .starter-template {
    padding: 3rem 1.5rem;
    text-align: center;
  }
</style>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="arrayFunc.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Array</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="arrayFunc.php">Functions</a>
          <a class="dropdown-item" href="#">Another action</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main" class="container">

  <div class="starter-template" style="width: 50%;">
    <form action="calc.php" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Num 1</label>
            <input type="text" class="form-control" name="num1" id="formGroupExampleInput" placeholder="enter num 1">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Num 2</label>
            <input type="text" class="form-control" name="num2" id="formGroupExampleInput2" placeholder="enter num 2">
            <select name="cal" style="width: 200px;">
                <option value="add">Add</option>
                <option value="sub">Sub</option>
                <option value="mul">Mul</option>
                <option value="div">Div</option>
            </select>
            <input class="btn btn-primary btn-lg" type="submit" value="Calculate">
            </div>

        </div>
    </form>
  </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
