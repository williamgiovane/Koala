<?php
	insert into usuario (id_usuario, nm_usuario, email, senha, celular, atualiza_celular, atualiza_email, TIPO_USUARIO_id_tipo_usuario, foto)
				values (id_usuario.nextval, $nmUsuario, $email, $senha, $celular, $atualizaCel,	$atualizaEmail,	3, null);
?>