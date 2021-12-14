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
            <article class="contact"> 
                <h2><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg> Pour nous contacter <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/></svg>
                </h2>
                <div class="contact-wrapper justify-content-center">
                    <div class="form-group">    
                        <label for="Pseudo">Pseudo</label>
                        <input type="pseudo" class="form-control" id="pseudo" placeholder="Pseudo" name="name" required>                    
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="email@mail.com" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie</label>
                        <select id="category" class="form-control" name="category">
                            <option value="default">Choisissez une catégorie</option>
                            <option value="help">Aide</option>
                            <option value="question">Question</option>
                            <option value="remark">Remarque</option>                
                        </select>             
                    </div>
                    <div class="form-group">
                        <label for="messge">Message</label>
                        <textarea rows="3" class="form-control" id="message" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                        <p>Souhaitez-vous recevoir notre newsletter ?</p>
                        <input type="radio" id="yes" name="news-question" value="yes" checked>
                        <label for="yes">Oui</label>
                        <input type="radio" id="no" name="news-question" value="no">
                        <label for="no">Non</label>
                    </div>
                    <button type="submit" class="btn btn-info">Envoyer</button>                    
                </div>
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