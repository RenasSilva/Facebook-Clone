<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Login Facebook</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <link href = "style.css" rel = "stylesheet"/>
</head>
<body>
    <header>
        <div class = "center">
            <div class = "logo">
                <h2>facebook</h2>
            </div><!--logo-->

            <form method = "post" class = "form-login">
                <div class = "form-element">
                    <p>E-mail ou telefone:</p>
                    <input type = "email"/>
                </div><!--form-element-->
                
                <div class = "form-element">
                    <p>Senha:</p>
                    <input type = "password"/>
                </div><!--form-element-->
               
                <div class = "form-element">
                    <input type = "submit" name = "acao" value = "Entrar" />
                </div><!--form-element-->
            </form><!--form-login-->
            
            <div class = "clear"></div>
            
            <div class = "esqueceu">
                <p>Esqueceu a conta?</p>
            </div><!--esqueceu-->
        </div><!--center-->

    </header><!--header-->

    <section class = "main">
        <div class = "center">
            
            <div class = "img-pessoas">
                <p>O Facebook ajuda você a se conectar e</p>
                <p> compartilhar com as pessoas que fazem parte</p>
                <p>da sua vida.</p>
                <img src = "img-family.png"/>
            </div><!--img-pessoas-->

            <div class = "abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É gratuito e sempre será.</h3>

                <form class = "criar-conta">
                    <div class = "w50">
                        <input placeholder="Nome" type = "text"/>
                    </div><!--w50-->

                    <div class = "w50">
                        <input placeholder="Sobrenome" type = "text"/>
                    </div><!--w50-->

                    <div class = "w100">
                        <input placeholder="Celular ou email" type = "email"/>
                    </div><!--w100-->

                    <div class = "w100">
                        <input placeholder="Nova senha" type = "password"/>
                    </div><!--w100-->

                    <div class = "w100">
                        <h2>Data de nascimento</h2>
                        <select name = "nascimento-dia" class = "nascimento">
                        <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value = "<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select><!--nascimento-->

                        <select name = "nascimento-mes" class = "nascimento">
                            <option value = "1">Janeiro</option>
                            <option value = "2">Fevereiro</option>
                            <option value = "3">Março</option>
                            <option value = "4">Abril</option>
                            <option value = "5">Maio</option>
                            <option value = "6">Junho</option>
                            <option value = "7">Julho</option>
                            <option value = "8">Agosto</option>
                            <option value = "9">Setembro</option>
                            <option value = "10">Outubro</option>
                            <option value = "11">Novembro</option>
                            <option value = "12">Dezembro</option>
                        </select><!--nascimento-->

                        <select name = "nascimento-ano" class = "nascimento">
                        <?php
                                for($i = 1940; $i <= 2023; $i++){
                            ?>
                            <option value = "<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select><!--nascimento-->

                        <div class = "p-select">
                            <p>Porque preciso informar<br/>minha data de nascimento?</p>
                        </div><!--span-select-->    
                        <div class = "clear"></div>
                    </div><!--w100-->

                    <div class = "w100">
                        <div class = "input-radio">
                            <input type = "radio" name = "sexo" value = "feminino"/>
                            <h2>Feminino</h2>
                        </div><!--input-radio-->

                        <div class = "input-radio">
                            <input type = "radio" name = "sexo" value = "masculino"/>
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                    </div><!--w100-->

                    <div class = "w100">
                            <div class = "termos">
                                    <p>Ao clicar em Cadastre-se, você concorda com nossos <a href = "#">Termos Política de Dados e Política de Coockies.</a> Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
                            </div><!--termos-->
                    </div><!--w100-->

                    <div class = "w100">
                        <input type = "submit" name = "acao" value = "Cadastre-se" />
                    </div><!--w100-->

                    <div class = "w100">
                        <div class = "criar">
                                <a href = "#">Criar uma Página</a><span> para uma celebridade, banda ou empresa.</span>
                        </div><!--criar-->
                    </div>
                </form><!--criar-conta-->
            </div><!--abrir-conta-->
            <div class = "clear"></div>
        </div><!--center-->
    </section><!--main-->

    <section class = "linguas">
        <div class = "center">
            <a class = "selected-lingua" href = "#">Português (Portugal)</a>
            <a href = "/indexen.php">English (US)</a>
            <a href = "#">Français (France)</a>
            <a href = "#">Español</a>
            <a href = "#">Русский</a>
            <a href = "#">Deutsch</a>
            <a href = "#">Italiano</a>
            <a href = "#">لعربية</a>
            <a href = "#">हिन्दी</a>
            <a href = "#">中文(简体)</a>
            <input type = "button" value = "+" />
        </div><!--center-->

        <div style = "border:0; padding-top: 10px;" class = "center">
            <a href = "#">Regista-te</a>
            <a href = "#">Iniciar sessão</a>
            <a href = "#">Messenger</a>
            <a href = "#">Facebook Lite</a>
            <a href = "#">Vídeo</a>
            <a href = "#">Locais</a>
            <a href = "#">Jogos</a>
            <a href = "#">Marketplace</a>
            <a href = "#">Meta Pay</a>
            <a href = "#">Loja Meta</a>
            <a href = "#">Meta Quest</a>
            <a href = "#">Instagram</a>
            <a href = "#">Threads</a>
            <a href = "#">Angariações de fundos</a>
            <a href = "#">Serviços</a>
            <a href = "#">Centro de informação sobre eleições</a>
            <a href = "#">Política de Privacidade</a>
            <a href = "#">Centro de Privacidade</a>
            <a href = "#">Grupos</a>
            <a href = "#">Sobre</a>
            <a href = "#">Criar anúncio</a>
            <a href = "#">Criar Página</a>
            <a href = "#">Programadores</a>
            <a href = "#">Empregos</a>
            <a href = "#">Cookies</a>
            <a href = "#">AdChoices</a>
            <a href = "#">Termos</a>
            <a href = "#">Ajuda</a>
            <a href = "#">Carregamento de contactos e não utilizadores</a>
        </div><!--center-->
    </section><!--linguas-->
</body>
</html>