<?php

$nome 	= $_POST['nome'];
$email	= $_POST['email'];
$tel 	= $_POST['tel'];
$msg 	= nl2br($_POST['msg']);

$para	="vladimirmelo30@gmail.com";
$data 	= date('d/m/Y H:i:s');

$msg = "	
<table style=\"border:1px solid #d9d9d9\" width=\"640\" border=\"0\" align=\"center\" cellpadding=\"10\" cellspacing=\"0\">
  <tr>
    <td align=\"center\" bgcolor=\"#f4f4f4\"><a href=\"\"><img src=\"\" title=\"\" width=\"70\" height=\"70\" alt=\"BaldItConsulting\" border=\"0\" /></a></td>
  </tr>
  
  <tr>
    <td align=\"center\" bgcolor=\"#f4f4f4\">
    <table width=\"620\" border=\"0\" align=\"center\" cellpadding=\"10\" cellspacing=\"0\">
      <tr>
        <td bgcolor=\"#ffffff\"><table width=\"590\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

          <tr>
            <td align=\"left\" bgcolor=\"#ecf8ff\">
            <table width=\"100%\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\">
			
              <tr>
                <td style=\"color:#32323b;\"><strong>Nome:</strong> $nome</td>
              </tr>

			  <tr>
                <td style=\"color:#32323b;\"><strong>E-mail:</strong> $email</td>
              </tr>
			  
			  <tr>
                <td style=\"color:#32323b;\"><strong>Telefone:</strong> $tel</td>
              </tr>

			  <tr>
                <td style=\"color:#32323b;\"><strong>Mensagem:</strong> $msg<hr></td>
              </tr>
			  
            </table>
            </td>
          </tr>
		  
		  <tr>
            <td align=\"left\" bgcolor=\"#cccccc\">
            <table width=\"100%\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\">
              <tr>
                <td style=\"color:#32323b;\">Para garantir que nossos comunicados cheguem em sua caixa de entrada e voc&ecirc; fique por dentro de todas as novidades, adicione o e-mail <b>email@email.com</b> ao seu cat&aacute;logo de endere&ccedil;os.<br /><b>A <i>BaldItConsulting</i></b> respeita a sua privacidade e &eacute; contra o spam na rede.</td>
              </tr>
            </table>
            </td>
          </tr>
          
        </table>
        </td>
      </tr>
    </table>
	</td>
  </tr>
</table>
	
<p align=\"center\"><strong>Enviado:</strong> $data";

$header="From: BaldItConsulting <​vladimir.melo@endpro.com.br>\r\n";
$header.="Reply-to: vladimir.melo@endpro.com.br>\r\n";
$header.="Bc: $email\r\n";
$header.="Bcc: vladimir.melo@endpro.com.br>\r\n";
$header.="Content-Type: text/html; charset=\"utf-8";

$ok = mail($para, $tel, $msg, $header);
if($ok){
	echo '<div id="contato" class="alert alert-success text-center"><i class="fa fa-check-circle" aria-hidden="true"></i> Sr(a) <strong>'.$nome.'</strong>, seu e-mail foi enviado com sucesso!</div>';
}
else{
	echo '<div id="contato" class="alert alert-danger text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Desculpe-nos, mas houve uma falha no envio do e-mail.</div>';
}
  
?>
