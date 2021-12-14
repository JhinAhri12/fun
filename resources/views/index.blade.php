<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fun & useless</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="fun.css" rel="stylesheet"/>
        
    </head>
    <body>
    <header>
            <div class="header-bar">
                <div class="logo">2FAUT</div>            
                <nav>
                    <ul class="list-inline">
                        <li class="nav-item list-inline-item"><a href="./home.blade.php">Accueil</a></li>
                        <li class="nav-item list-inline-item"><a href="./index.blade.php">Reccueil</a></li>
                        <li class="nav-item list-inline-item"><a href="./contact.blade.php">Contact</a></li>
                        <li class="nav-item list-inline-item"><a href="./auth/login.blade.php">Connexion</a></li>
                    </ul>            
                </nav>
            </div>
            <div class="text-box">
                <h1>FUN FACTS ABOUT (USELESS) THINGS</h1>
                <h1>FUN FACTS ABOUT (USELESS) THINGS</h1>
            </div>    
        </header>
        <main>
            <article> 
                <section class="article-section">
                        <p>Tootsie Roll how I love your chocolatey chew, Tootsie Roll I think I'm in 
                        love with you. Whatever it is I think I see, becomes a Tootsie Roll to 
                        me!</p>
                        <p>Posté par ...</p>
                    <div class="note-home">
                        <p>Nombre de votants : ...</p>
                        <p>Note : ...</p>
                    </div>     
                </section>
                <section class="article-section">
                        <p>Tootsie Roll how I love your chocolatey chew, Tootsie Roll I think I'm in 
                        love with you. Whatever it is I think I see, becomes a Tootsie Roll to 
                        me!</p>
                        <p>Posté par ...</p>
                    <div class="note-home">
                        <p>Nombre de votants : ...</p>
                        <p>Note : ...</p>
                    </div>     
                </section><section class="article-section">
                        <p>Tootsie Roll how I love your chocolatey chew, Tootsie Roll I think I'm in 
                        love with you. Whatever it is I think I see, becomes a Tootsie Roll to 
                        me!</p>
                        <p>Posté par ...</p>
                    <div class="note-home">
                        <p>Nombre de votants : ...</p>
                        <p>Note : ...</p>
                    </div>     
                </section><section class="article-section">
                        <p>Tootsie Roll how I love your chocolatey chew, Tootsie Roll I think I'm in 
                        love with you. Whatever it is I think I see, becomes a Tootsie Roll to 
                        me!</p>
                        <p>Posté par ...</p>
                    <div class="note-home">
                        <p>Nombre de votants : ...</p>
                        <p>Note : ...</p>
                    </div>     
                </section>
                <section class="article-section">
                    <form class="contribution" action="">                        
                        <textarea class="proposition" rows="2" placeholder="Entrez votre proposition ici."></textarea>
                        <div class="div-btn-contribution">
                            <button type="button" class="btn btn-info btn-contribute">Valider</button>
                        </div>
                    </form>
                </section>
                
            </article>
            <aside>
                <section class="aside-section">
                    <h4>Informations</h4>
                </section>
            </aside>
        </main>
        <footer>
        Copyright 2FAUT©
        </footer>
    </body>
</html>