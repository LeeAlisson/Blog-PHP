<?php
include_once "templates/header.php";
?>

<main id="contact-container">
    <div class="contact-form">
        <h1>Contato</h1>
        <p>Deixe seus meios de contato para te encontrarmos:</p>
        <form action="contato.php" method="POST">
            <input type="text" name="nome" placeholder="Nome e Sobrenome">
            <input type="email" name="email" placeholder="E-mail">
            <textarea name="mensagem-usuario" placeholder="Digite uma mensagem" rows="7" cols="60"></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div class="contact-blog">
        <div>
            <h2>Contato</h2>
            <span>email@email.com.br</span>
        </div>
        <div>
            <h2>Localização</h2>
            <span>Jundiaí - São Paulo - Brasil</span>
        </div>
        <div class="img-contact-blog">
            <img src="img/foto-criador-blog.jpg" alt="Foto do Criador do Blog">
        </div>
    </div>
</main>

<?php
include_once "templates/footer.php";
?>