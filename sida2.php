<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/styles/a11y-dark.min.css">
    <script src="./node_modules/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <title>Title</title>
</head>
<body>
<header>
    <div class="header-nav-container">

        <img class="logo" src="media/logo_LTU50_sedan1971_vit.svg" alt="">


        <ul>
            <li><a href="sida1.php">PHP-sida 1</a></li>
            <li><a href="sida2.php">PHP-sida 2</a></li>
            <li><a href="sida3.php">PHP-sida 3</a></li>
            <li><a href="sida4.php">PHP-sida 4</a></li>
            <li><a href="sida5.php">PHP-sida 5</a></li>
            <li><a href="index6.html">PHP-sida 6</a></li>

        </ul>
    </div>
</header>
<main>
    <div class="main-container">
        <div class="main-text">
            <h1>
                What is PHP and why is it needed.
            </h1>
            <h3>PHP är en hypertext preprocessor (HTML).<br>
                PHP är ett programmeringsspråk på serversidan.<br>
                PHP är ett skript, tolkat programmeringsspråk.</h3>

        </div>
        <img src="media/php.png" alt="" class="php-ill">
    </div>
    <div class="examples">
        <div class="code-snippet">
            <p>PHP (recursive acronym of the phrase PHP: Hypertext Preprocessor) is a common general-purpose
                programming language with open source code. PHP is specially designed for web development and its
                code can be embedded directly into HTML.</p>
            <p>Instead of the routine output of HTML code by language commands (as happens, for example, in Perl or C),
                the PHP script contains HTML with embedded code (in our case, this is the output of the text "Hello, I'm
                a PHP script!"). PHP code is separated by special start and end tags ,
                which allow you to
                "switch" to "PHP mode" and exit it.</p>

        </div>
        <div class="snippet">
                <pre>
                <code>
    &lt;?php
       function standard_array_compare($op1, $op2)
       {
          if (count($op1) &lt; count($op2))
           {
            return -1; // $op1 &lt; $op2
            }
            elseif (count($op1) &gt; count($op2)) {
            return 1; // $op1 &gt; $op2
            }
            foreach ($op1 as $key =&gt; $val)                    {
               if (!array_key_exists($key, $op2)) {
                   return 1;
               }
               elseif ($val &lt; $op2[$key]) {
               return -1;
               }
               elseif ($val &gt; $op2[$key]) {
               return 1;
               }
            }
          return 0; // $op1 == $op2
        }
     ?&gt;
                </code>
                </pre>
        </div>

        <div class="code-snippet"></div>
    </div>
</main>
<div class="code">
    <p>Denna text är genererad med utskriftskommandot i PHP</p>
    <form method="get" action="">


        <select name="first-name">
            <option value="Ko">Ko</option>
            <option value="Gris">Gris</option>
            <option value="Kyckling">Kyckling</option>
        </select>
        <select name="second-name">
            <option value="Ko">Ko</option>
            <option value="Gris">Gris</option>
            <option value="Kyckling">Kyckling</option>
        </select>
        <select name="third-name">
            <option value="Ko">Ko</option>
            <option value="Gris">Gris</option>
            <option value="Kyckling">Kyckling</option>
        </select>
        <input type="submit" value="Sent">
    </form>
    <?php
    $farmAnimals = array();
    $arrValue = array("Ko", "Gris", "Kyckling");
    if (isset($_GET['first-name']) && !empty($_GET['first-name'])) { // Det är ganska irrelevant här


        $farmAnimals = array(0 => $_GET["first-name"], 1 => $_GET["second-name"], 2 => $_GET["third-name"]);
        print_r($farmAnimals);
        echo "<br>";
        $farmAnimals[2] = "Struts";
        echo "<br>";
        array_push($farmAnimals, "Alpacka"); //Lägger värde i array
        echo "<br>";
        array_shift($farmAnimals); // kastar bort  första värde
        echo "<br>";
        print_r($farmAnimals);
        echo "<br>";
        echo "<br>";
        echo $farmAnimals[1];
    }
    ?>
</div>
<footer>
    <?php include_once 'footer.php' ?>
</footer>
</body>
</html>