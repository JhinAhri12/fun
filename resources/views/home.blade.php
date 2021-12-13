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
            <article> 
                <h2 class="h2-home"> Vos meilleures propositions </h2>
                <section class="article-section">
                    <h3>Pseudo</h3>
                    <p>The world looks mighty good to me, cause Tootsie Rolls are all I see. 
                        Whatever it is I think I see, becomes a Tootsie Roll to me!</p>
                    <div class="note-home">
                        <p>Nombre de votants : ...</p>
                        <p>Note : ...</p>
                    </div>                
                    </section>       
                <section class="article-section">
                    <h3>Pseudo</h3>
                    <p>Tootsie Roll how I love your chocolatey chew, Tootsie Roll I think I'm in 
                        love with you. Whatever it is I think I see, becomes a Tootsie Roll to 
                        me!</p>
                    <div class="note-home">
                        <p>Nombre de votants : ...</p>
                        <p>Note : ...</p>
                    </div>
                </section>
                <section class="article-section">
                    <h3>Pseudo</h3>
                    <p>Baby if you've ever wondered, wondered what ever became of me. I'm living on 
                        the air in Cincinnati, Cincinnati WKRP. Got time and tired of packing and 
                        unpacking.</p>
                    <div class="note-home">
                        <p>Nombre de votants : ...</p>
                        <p>Note : ...</p>
                    </div>
                </section>
                <section class="article-section">
                    <h3>Pseudo</h3>
                    <p>Town to town, up and down the dial. Maybe you and me were never meant to be, 
                        But baby think of me once in a while. I'm in WKRP in Cincinnati.</p>
                    <div class="note-home">
                        <p>Nombre de votants : ...</p>
                        <p>Note : ...</p>
                    </div>
                    </section>
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