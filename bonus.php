<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Online compiler made by SHAUNAK DESHPANDE (19BCE1310)">
        <meta name="author" content="Shaunak Deshpande">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Online Compiler | 19BCE1310
        </title>
        <?php
            echo '<link href="bonus.css" rel="stylesheet" type="text/css" />';
        ?>
        <style>
            .res{
                color:white!important;
                z-index: 100;
                text-align: center;
                padding:10px 20px;
                border: 0.5px solid orange;
                border-radius:20px;
            }
            #me{
                margin-top:10px;
            }
            ::-webkit-scrollbar {
                width: 15px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background-image: linear-gradient(#000000,#4b4b4b);
            }


            /* Handle */
            ::-webkit-scrollbar-thumb {
                background-color: orange;
            }

        </style>
    </head>
    <body>
        <h1><span id="or"><\</span>Code<span id="or">.</span>io<span id="or">\></span></h1>
        <div id="code">
            <form method="POST">
                <select name="language" id="lang">
                    <option value="none">Please select a language</option>
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                    <option value="Python">Python</option>
                  </select>
                  <textarea class="codearea" name="code" placeholder="Type code here" rows="100"></textarea>
                  <textarea class="inputarea" name="input" placeholder="Enter input variables here" rows="2"></textarea>
                  <div class="butt">
                    <input type="submit" id="submit" value="Compile" onclick="exec()">
                    <input type="reset" id="reset" value="Clear" >
                  </div>
            </form>   
            
            <div class="res">
            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") 
                {
                    $input=$_POST ["input"];
                    $code=$_POST["code"];
                    $lang=$_POST["language"];
                    echo $input;
                    if ($lang=="C++")
                    {
                        $myfile = fopen("code.cpp", "w");
                        fwrite($myfile, $code);
                        $output=shell_exec("g++ code.cpp && a.exe && 20");
                        echo $output;
                    }
                    if ($lang=="C")
                    {
                        $myfile = fopen("code.c", "w");
                        fwrite($myfile, $code);
                        $output=shell_exec("g++ code.c && a.exe");
                        echo $output;
                    }
                    if ($lang=="Python")
                    {
                        $myfile = fopen("code.py", "w");
                        fwrite($myfile, $code);
                        $output=shell_exec("code.py 2>&1");
                        echo $output;
                    }
                }
                ?>
            </div>
    </div>
    </body>
</html>