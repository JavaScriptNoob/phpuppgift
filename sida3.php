<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/styles/a11y-dark.min.css">
    <script src="./node_modules/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <title>Document</title>
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
<!--Code snippet for highlight.js-->
    &lt;?php
       function standard_array_compare($op1, $op2)
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
                    <!--Code snippet for highlight.js-->
                </code>
                </pre>
        </div>

        <div class="code-snippet"></div>
    </div>
</main>
<div class="code">
    <p>Denna text är genererad med utskriftskommandot i PHP</p>
    <form method="get" action="">
        <label>
            <input type="text" name="first-name">
        </label>
        <label>
            <input type="text" name="second-name">
        </label>
        <input type="submit" value="Sent">
    </form>
    <?php
    if (isset($_GET['first-name']) && !empty($_GET['first-name'])) {
        //Om användare skickar tomt förmulär isset ==  true pga det jag kontrollerar att value inmattad med empty
       $containerArr = explode(" ", $_GET['first-name']); //seperator agerar på mellanslag
        print_r($containerArr) ;
       $checkWord =  $_GET['second-name'];
       $counter = 0;
       $indexArr=[];
        for ($x = 0; $x <= count($containerArr)-1; $x++) { //vanligt for loop
            if ($containerArr[$x] == $checkWord){
                // Om value lika med checkword  vi lägger  den i array
                array_push($indexArr,$x+1);
                $counter+=1;

            }

        }
        echo "<br> Ordet $checkWord  finns på plats: ";
        echo implode(", ",$indexArr); // typ array.Join
        echo "<br> Ordet $checkWord hittades ".$counter." gånger ";
    }
    ?>
</div>
<footer>
    <?php include_once 'footer.php' ?>
</footer>
</body>
</html>