<?php


$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);
$mensagem = $_POST['$mensagem'];



$para = "andrestanoga12@gmail.com";

$assunto = "Entrando em contato - Portfolio";

$corpo = "Nome: ".$nome."\n"."email: ".$email."\n"."celular: ".$celular."\n"."mensagem: ".$mensagem;

$cabeca = "From andrestanogagn@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if (mail($para, $assunto, $corpo, $cabeca)){
    echo("E-mail enviado com sucesso!");

}else{
    echo("Houve um erro ao enviar o email");
}




?>