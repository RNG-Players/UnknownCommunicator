<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <div id="head">
            <a id="logo" href="index.html">
                ?
            </a>
            <h1>Unknown Communicator</h1>
        </div>
        <div id="logging">
            <form action="login.php" method="POST">
                login/e-mail
                <br/>
                <input type="text" name="login"/>
                hasło
                <br/>
                <input type="password" name="password"/>  
                <button type="submit" class="button">
                    Zaloguj się
                </button> 
            </form>  
            </br>
            <a id="registry_ref" href="registry.php">
                Nie masz hasła? Zarejestruj się
            </a>      
        </div>
        <div id="grafic">
            grafika + linki do stron : (o stronie, rejestracji)
        </div>
        <footer id="footer">
            stopka
        </footer>

    </div>
</body>

</html>