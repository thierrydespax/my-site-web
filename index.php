<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8"/>
    <!--[if lt IE 9]>
    <script src="./node_modules/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
      <link rel="stylesheet" type="text/css"  
          href="node_modules/font-awesome/css/font-awesome.css"/>
       <link rel="stylesheet" type="text/css"  
          href="node_modules/bootstrap-social/bootstrap-social.css"/>
      <link rel="stylesheet" type="text/css"  
          href="node_modules/bootstrap/dist/css/bootstrap.css"/>
     
     <link rel="stylesheet" type="text/css"  
          href="assets/stylesheets/main.css"/>
     
    </head>
    <body>
        <nav>
            <a href ="./" class ="logo">
                <img src="/Formation-HTML/assets/images/logo.jpg"/>
            </a>
            <a href="#about">About</a>
            <a href="#skill">Skill</a>
            <a href="#contact">Contact</a>
        </nav>
        <header>
            <h1>Thierry Despax</h1>  
            <p>Developpeur Junior</p>
            <div>
                <img src="/Formation-HTML/assets/images/php.png" class="php language" />
            </div> 
            <div>
                <img src="/Formation-HTML/assets/images/java.png" class="java language"/>
            </div>
            <div>
                <img src="/Formation-HTML/assets/images/android.png" class="android language"/>
            </div>
            <div>
                <img src="/Formation-HTML/assets/images/js.png" class="js language"/>
            </div>
            <div>
                <img src="/Formation-HTML/assets/images/html.png" class="html language"/>
            </div>
        </header>
        <section id="about" class="container-fluid">
            <h2>About</h2>
<!--            <ul>
                <li>Liste item 1</li>
                <ul>
                    <li>Sub liste item 1</li>
                    <li>Sub liste item 2</li>
                    <li>Sub liste item 3</li>
                </ul>
                <li>Liste item 2</li>
                <li>Liste item 3</li>
                <li>Liste item 4</li>      
            </ul>-->     
            
        </section>
         <section id="skill" class="container-fluid">
            <h2>Skill</h2>
        </section>
        <footer id="contact" class="container-fluid">
            <h2>Contact</h2>
            <br />
            <div class ="col-xs-12 col-md-6">
                <a href ="https://www.facebook.com/" target="_blank" class="btn btn-social-icon btn-google">
                    <span class="fa fa-facebook"></span>
                </a>
                <a href ="https://fr.linkedin.com/" target="_blank" class="btn btn-social-icon btn-linkedin" >
                 <span class="fa fa-linkedin"></span>
                </a>
            </div>
            <div class="row"> 
                <form action = "http://localhost/Formation-HTML/traitement.php" method="POST"
                        class="col-xs-12 col-md-8"
                        > 
                <?php
                   echo "Veuillez nous contacter via le formulaire";
                ?>
<!--                  <div>
                      
                    <input name="name" placeholder="Nom"
                       required ="required"
                       pattern ="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" /> 
                  </div>-->
                  <div class="input-group">
                      <span class="input-group-addon glyphicon glyphicon-user"></span>
                      <input class="form-control" placeholder="Nom" >
                  </div>
                  <br />
                  <div class="input-group">
                      <span class="input-group-addon glyphicon glyphicon-user"></span>
                      <input class="form-control" placeholder="Prenom" >
                  </div>
                  <br />
                  <div class="input-group">
                      <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                      <input class="form-control" placeholder="Tel *" >
                  </div>
                  <br />
                  <div class="input-group">
                      <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                      <input class="form-control" placeholder="Email" >
                  </div>
                  <br />
                  <div class="input-group">
                      <span class="input-group-addon glyphicon glyphicon-pencil"></span>
                      <textarea class="form-control" placeholder="Message" ></textarea>
                  </div>    
                  <br />
                  <button type="submit" class="btn btn-primary">Submit</button>                 
                </form>
            </div>   
        </footer>
    </body>
</html>
    