<?php
/*
ini_set('display_errors', 1);
error_reporting(E_ALL);
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';

if($_POST){

        if(empty($_POST['nome'])) {
            echo '<script>
			$(document).ready(function(){
				swal("Ops...","Preencha todos os campos obrigatórios!","warning");
			});
			</script>';
}else{

$nome = utf8_decode($_POST['nome']);
$email = utf8_decode($_POST['email']);
$phone = utf8_decode($_POST['phone']);
$cidade = utf8_decode($_POST['cidade']);
date_default_timezone_set('America/Sao_Paulo');
$data= utf8_decode(date('d/m/Y  H:i:s'));

    $mail = new PHPMailer();
    //Server settings
    $mail->SMTPDebug = 0;  
    $mail->isSMTP();                                            
    $mail->Host       = 'netpremios.nutricard.com.br';       //'smtp.hostinger.com';                     
    $mail->SMTPAuth   = true;                                     
    $mail->Username   = '';                                   //'djessica.giuliana@meuform.com.br';        
    $mail->Password   = '';                                   //'Djessica123';    
    $mail->SMTPSecure = "ssl"; 
    $mail->Port       = 8443;                   //465                   

    //Recipients
    $mail->SetFrom('atendimentobonuscred2021@gmail.com','Atendimento Marketing'); 
    $mail->addAddress('atendimentobonuscred2021@gmail.com','Marketing');  // destino
    $mail->addReplyTo("$email");          
    //$mail->addBCC('');

   
    $mail->isHTML(true);
    $mail->Subject = "Contato pelo Site, $data";
    $mail->Body ="    
    <html>
    <meta charset='utf-8'>
    <p><b><h3>Solicitação de contato.</h3> </b></p>
    <p><b>Nome: </b>$nome</p>
    <p><b>E-mail: </b>$email</p>
    <p><b>Telefone: </b>$phone</p>
    <p><b>Cidade: </b>$cidade</p>
    </html>";

    
    if(!$mail->send()){
    echo'
    <script>
      $(document).ready(function(){
        swal("Ops '.utf8_encode($nome).'...","Houve um erro ao enviar a mensagem, tente novamente!", "error");
       });
    </script>';
} else{
    echo'
    <script>
      $(document).ready(function(){
        swal("Sucesso '.utf8_encode($nome).'...", "Sua mensagem foi enviada. \n Obrigado pelo contato!", "success")
      });
    </script>';
           }
        } 
    }
 


