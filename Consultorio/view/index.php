<!DOCTYPE html>
<html lang="en">
<head>
    <FontAwesomeIcon icon="fa-solid fa-user-doctor" />
    <link rel="stylesheet" href="styleC.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <title>Consultório</title>
</head>
<body>
    <div class="header">

        <header>
                <div class="icon">
                    <!-- icone de medicina e titulo -->
                    <img height="40px" src="medicina.png"> 
                </div>
                <h1>Consultório dr. Murilo</h1>
            
        </header>

        <!-- botoes para navegar pelo site -->
        <nav>
            <div class="as">
            <a href="cliente.php">Cadastro</a>
            <a href="#contato">Contato</a>
            <a href="#info">Sobre</a>
            </div>
        </nav>

    </div>

    <!-- acabou o header começa o conteudo -->

    <div class="content">
        <div class="slides">
            <!-- coisa invisivel que faz tudo funcionar -->
            <input type="radio" name="slide" id="slide1" checked>
            <input type="radio" name="slide" id="slide2">
            <input type="radio" name="slide" id="slide3">
            <input type="radio" name="slide" id="slide4">

            <!-- imagens -->

            <div class="slide s1">
                <img src="1.jpg">
            </div>

            <div class="slide">
                <img src="2.jpg"> 
            </div>

            <div class="slide">
                <img src="3.jpeg"> 
            </div>

            <!-- esssa quarta imagem nao é mostrada, mas ta aqui so pros numeros la no css baterem certinho -->
            <div class="slide">
                <img src="4.jpg"> 
            </div>

            <!-- acaba a div do slides -->
        </div>
        <!-- div para navigation, é a barra que faz as coisas acontecerem pro usuario -->
        <div class="navigation">
            <label class="barra" for="slide1"></label>
            <label class="barra" for="slide2"></label>
            <label class="barra" for="slide3"></label>
            <label class="barra" for="slide4"></label>
        </div>
    </div>

    <div class="contato">
        <h1 class="h1c" id="contato">Contato</h1>
        <div class="csobre">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4895.492807428821!2d-51.14322798816942!3d-29.81705402491659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95196f2a593c6151%3A0xee0be7c4a3eba933!2sCol%C3%A9gio%20ULBRA%20S%C3%A3o%20Lucas!5e0!3m2!1spt-BR!2sbr!4v1719268673778!5m2!1spt-BR!2sbr" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="sobreparagrafos">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore consectetur incidunt corporis atque voluptate earum doloremque culpa et porro sequi! Tempore obcaecati ex, sunt totam necessitatibus eveniet ducimus aspernatur quaerat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae aspernatur perferendis nemo tempora est dicta, excepturi, voluptate fugit ullam aliquid cupiditate accusantium unde quo fugiat! Temporibus eius rem harum fugiat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, provident sequi. Sunt architecto illum dicta nesciunt odit et odio laudantium laboriosam doloremque, tenetur iure quos quas voluptatum, rem, consequatur repudiandae?</p>
            </div>
        </div>

    </div>

    <footer>
        <h1 class="sobre">Sobre</h1>
        <div class="info" id="info">
            <p> Copyright Murilo Torres</p>
            <br>
            <a href="https://github.com/devMuriloTS"> Github </a>
        </div>
    </footer>

</body>
</html>