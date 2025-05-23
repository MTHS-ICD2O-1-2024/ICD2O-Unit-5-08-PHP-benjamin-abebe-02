<!DOCTYPE html>
<!-- ICS2O-Unit5-08-PHP-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Doing division with while loops, With PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <title>Division Result</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Division Results</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        <h4>Results:</h4>
        <br />
        <?php
        // Store original values before modifying them
        $original_dividend = $_GET["dividend"];
        $original_divisor = $_GET["divisor"];
        $dividend = $original_dividend;
        $divisor = $original_divisor;
        $quotient = 0;

        // if statement and the whole process
        if ($dividend <= 0 || $divisor <= 0) {
          echo "Please enter positive integers.";
        } else {
          while (true) {
            if ($dividend >= $divisor) {
              $dividend = $dividend - $divisor;
              $quotient = $quotient + 1;
            } else {
              break;
            }
          }
          echo "If the dividend number is $original_dividend and the divisor is $original_divisor, then ";
          echo "Quotient: " . $quotient . ", Remainder: " . $dividend;
        }
        ?>
        <br />
        <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="./index.php">
          Go back to form
        </a>
      </div>
    </main>
  </div>
</body>

</html>