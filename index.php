<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="./styles.css">

        <title>Formulário</title>
    </head>

    <body>
        <form action="index.php" method="POST">
            <input type="text" name="nome" placeholder="Nome">
            <input type="number" name="idade" placeholder="Idade">
            <input type="text" name="email" placeholder="Email">

            <div class="dropdown-estados">
                <label for="estado_civil">Estados Civis</label>
                <select id="estado_civil" name="estados_civis">
                    <option value=""> --- </option>
                    <option value="0">Solteiro</option>
                    <option value="1">Casado</option>
                    <option value="2">Viúvo</option>
                </select>
            </div>

            <div class="checkbox-comidas">
                <p>O que gostaria de comer hoje?</p>
                <label>
                    <input type="checkbox" name="comidas[]" value="0">Peito de Frango
                </label>
                <label>
                    <input type="checkbox" name="comidas[]" value="1">Bife Alcatra
                </label>

                <label>
                    <input type="checkbox" name="comidas[]" value="2">Purê de batata
                </label>

                <label>
                    <input type="checkbox" name="comidas[]" value="3">Arroz
                </label>

                <label>
                    <input type="checkbox" name="comidas[]" value="4">Batata-Frita
                </label>

                <label>
                    <input type="checkbox" name="comidas[]" value="5">Salada Verde
                </label>
            </div>

            <div class="radio-forma">
                <p>Forma de entrega?</p>

                <div class="radio-group-input">
                    <div class="radio-input">
                        <input type="radio" name="forma" id="entrega" value="0">
                        <label for="entrega">Entrega</label>
                    </div>

                    <div class="radio-input">
                        <input type="radio" name="forma" id="busca" value="1">
                        <label for="busca">Busca</label>
                    </div>
                </div>
            </div>

            <div class="buttons">
                <button name="entrar">Entrar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>

        <div class="menssagens-resposta">
            <?php
                if(isset($_POST['entrar'])){
                    if (isset($_POST['nome'])) {
                        $nome = $_POST['nome'];
                        if (empty($nome) || $nome === "0") {
                            echo (
                                "<div class='card-resposta-erro'>
                                    <h4 class='header-erro'>Erro</h4>
                                    <p>O valor de <b> nome</b><i> está vazio!</i></p>
                                </div>");
                        } else {
                            if (strlen($nome) < 4) {
                                echo (
                                    "<div class='card-resposta-erro'>
                                        <h4 class='header-erro'>Erro</h4>
                                        <p>O valor de <b> nome</b><i> está com tamanho abaixo de 4 caracteres!</i></p>
                                    </div>");
                            } else if (strlen($nome) > 10) {
                                echo (
                                    "<div class='card-resposta-erro'>
                                        <h4 class='header-erro'>Erro</h4>
                                        <p>O valor de <b> nome</b><i> está com o tamanho acima de 10 caracteres!</i></p>
                                    </div>"
                                );
                            } else {
                                echo (
                                    "<div class='card-resposta-sucesso'>
                                        <h4 class='header-sucesso'>OK</h4>
                                        <p>O valor de <b> nome</b><i> está OK!</i></p>
                                    </div>"
                                );
                            };
                        }
                    }
        
                    if (isset($_POST['idade'])) {
                        $idade = $_POST['idade'];
                        if (empty($idade) || $idade === "0") {
                            echo (
                                "<div class='card-resposta-erro'>
                                    <h4 class='header-erro'>Erro</h4>
                                    <p>O valor de <b> idade</b><i> está vazio!</i></p>
                                </div>");
                        } else {
                            if ($idade < 18) {
                                echo (
                                    "<div class='card-resposta-erro'>
                                        <h4 class='header-erro'>Erro</h4>
                                        <p>O valor de <b> idade</b><i> está com valor inferior a 18!</i></p>
                                    </div>");
                            } else if ($idade > 60) {
                                echo (
                                    "<div class='card-resposta-erro'>
                                        <h4 class='header-erro'>Erro</h4>
                                        <p>O valor de <b> idade</b><i> está com valor acima de 60!</i></p>
                                    </div>");
                            } else {
                                echo (
                                    "<div class='card-resposta-sucesso'>
                                        <h4 class='header-sucesso'>OK</h4>
                                        <p>O valor de <b> idade</b><i> está OK!</i></p>
                                    </div>"
                                );
                            }
                        }
                    }
        
                    if (isset($_POST["email"])) {
                        $email = $_POST["email"];
                        if (empty($email) || $email === "0") {
                            echo (
                                "<div class='card-resposta-erro'>
                                    <h4 class='header-erro'>Erro</h4>
                                    <p>O valor de <b> email</b><i> está vazio!</i></p>
                                </div>");
                        } else {
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo (
                                    "<div class='card-resposta-erro'>
                                        <h4 class='header-erro'>Erro</h4>
                                        <p>O valor de <b> email</b><i> não  é um email válido!</i></p>
                                    </div>");
                            } else {
                                echo (
                                    "<div class='card-resposta-sucesso'>
                                        <h4 class='header-sucesso'>OK</h4>
                                        <p>O valor de <b> email</b><i> está OK!</i></p>
                                    </div>"
                                );
                            }
                        }
                    }
        
                    if (isset($_POST["estados_civis"])) {
                        $estados_civis = $_POST["estados_civis"];
                        if ($estados_civis === "") {
                            echo (
                                "<div class='card-resposta-erro'>
                                    <h4 class='header-erro'>Erro</h4>
                                    <p>O valor de <b> estado civis</b><i> está vazio!</i></p>
                                </div>");
                        } else {
                            if ($estados_civis < 0 || $estados_civis > 2) {
                                echo (
                                    "<div class='card-resposta-erro'>
                                        <h4 class='header-erro'>Erro</h4>
                                        <p>O valor de <b> estado</b><i> não está com um valor válido!</i></p>
                                    </div>");
                            } else {
                                echo (
                                    "<div class='card-resposta-sucesso'>
                                        <h4 class='header-sucesso'>OK</h4>
                                        <p>O valor de <b> estado</b><i> está OK!</i></p>
                                    </div>"
                                );
                            }
                        }
                    }
        
                    if (!isset($_POST['comidas'])) {
                        echo (
                            "<div class='card-resposta-erro'>
                                <h4 class='header-erro'>Erro</h4>
                                <p>O valor de <b> comida</b><i> não foi enviado!</i></p>
                            </div>");
                    } else {
                        $comidas = $_POST['comidas'];
                        if (count($comidas) < 3) {
                            echo (
                                "<div class='card-resposta-erro'>
                                    <h4 class='header-erro'>Erro</h4>
                                    <p>O valor de <b> comida</b><i> não possui exatamente 3 itens!</i></p>
                                </div>");
                        } else {
                            foreach ($comidas as $indice => $comida) {
                                if ($comida < 0 || $comida > 5) {
                                    echo (
                                        "<div class='card-resposta-erro'>
                                            <h4 class='header-erro'>Erro</h4>
                                            <p>O valor de <b> comida</b><i> está inválido!</i></p>
                                        </div>");
                                    return;
                                }
                            };

                            echo (
                                "<div class='card-resposta-sucesso'>
                                    <h4 class='header-sucesso'>OK</h4>
                                    <p>O valor de <b> estado</b><i> está OK!</i></p>
                                </div>"
                            );
                        }
                    }

                    if (!isset($_POST['forma'])) {
                        echo (
                            "<div class='card-resposta-erro'>
                                <h4 class='header-erro'>Erro</h4>
                                <p>O valor de <b> forma</b><i> não foi enviado!</i></p>
                            </div>");
                    } else {
                        $forma = $_POST["forma"];
                        if ($forma < 0 || $forma > 1) {
                            echo (
                                "<div class='card-resposta-erro'>
                                    <h4 class='header-erro'>Erro</h4>
                                    <p>O valor de <b> forma</b><i> não está com um valor válido!</i></p>
                                </div>");;
                        } else {
                            if ($forma === "0" || $forma === "1") {
                                echo (
                                    "<div class='card-resposta-sucesso'>
                                        <h4 class='header-sucesso'>OK</h4>
                                        <p>O valor de <b> forma</b><i> está OK!</i></p>
                                    </div>"
                                );
                            }
                        }
                    }
                }
            ?>
        </div>

        <div class="footer">

        </div>
    </body>
</html>