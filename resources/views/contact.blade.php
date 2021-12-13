<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fun & useless</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="fun1.css" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <div class="logo">2FAUT</div>            
            <nav>
                <ul>
                    <li><a href="./home.blade.php">Accueil</a></li>
                    <li><a href="./index.blade.php">Reccueil</a></li>
                    <li><a href="./contact.blade.php">Contact</a></li>
                    <li><a href="./auth/register.blade.php">Inscription</a></li>
                    <li><a href="./auth/login.blade.php">Connexion</a></li>
                </ul>            
            </nav>    
        </header>
        <div class="text-box">
            <h1>FUN FACTS ABOUT (USELESS) THINGS</h1>
            <h1>FUN FACTS ABOUT (USELESS) THINGS</h1>
        </div>
        <main>
            <article class="contact"> 
                <h2>Pour nous contacter</h2>
                <form class="form-contact" action="">    
                <label for="name">Nom</label>
<input type="text" id="name" placeholder="nom" name="name">
 
<label for="email">E-mail</label>
<input type="email" id="email" placeholder="email@mail.com" name="email">
<label for="message">Message</label>
<textarea rows="10" id="message" name="message"></textarea>




                </form>
            </article>
            <aside>
                <section class="aside-section">
                    <h4>Informations</h4>
                </section>
            </aside>
        </main>
        <footer>
        Copyright 2FFAUT©
        </footer>
    </body>
</html>