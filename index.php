<!DOCTYPE html>
<!-- ICS2O-Unit5-06-PHP-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Doing multiplication with while loops, With JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <title>Doing multiplication with while loops, With JS</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Doing multiplication with while loops, With JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">Enter the number that you want to multiply! </div>
      <br />
<!--- Submitting the form -->
      <form action="./answer.php" method="get">
        <!-- My MDL-textfield mdl-js-textfield-->
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" name="dividend" id="dividend" required />
          <label class="mdl-textfield__label" for="dividend">Enter the dividend here...</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <!-- My MDL-textfield mdl-js-textfield-->
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" name="divisor" id="divisor" required />
          <label class="mdl-textfield__label" for="divisor">Enter the divisor here...</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        </br>
        <!-- My MDL-button mdl-js-button  -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          See results!
        </button>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="answer"></div>
      </div>
    </main>
  </div>
</body>

</html>
