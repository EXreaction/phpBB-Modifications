<?php
/***************************************************************************
 *          lang_anti_spam_acp.php
 * 			 -------------------
 *   copyright	: (C) 2006 EXreaction
 *   email		: exreaction@lithiumstudios.org
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

// Common
	$lang['Spam_Attempt']								= 'Intento de Spam en ';
	$lang['Not_Test_Email_Header']						= 'Un usuario ha intentado algo no permitido (mientras estaban %s) en';

// Admin Control Panel
	// Common
		$lang['Anti_Spam']								= 'Anti Spam';
		$lang['Anti_Spam_ACP']							= 'Anti-Spam ACP';
		$lang['Anti_Spam_ACP_Created_By']				= 'Creado por: <a href="http://www.lithiumstudios.org" style="text-decoration:none" target="_blank">EXreaction</a>';
		$lang['version_check_disabled']					= 'Tienes desactivada la opcion de chequeo de actualizaciones de Anti-Spam ACP.  Es recomendable que actives la opcion "¿Chequear automaticamente si hay actualizaciones de lithiumstudios.org?" a Si.';
		$lang['AS_ACP_up_to_date']						= 'Tu version de Anti-Spam ACP esta actualizada.';
		$lang['AS_ACP_not_up_to_date']					= 'No estas ejecutando la version mas estable de Anti-Spam ACP.  La última version esta disponible en  <a href="http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=25&t=4">Lithium Studios</a>.';
		$lang['AS_ACP_Latest_Version']					= 'La ultima version mas estable es %s.';
		$lang['AS_ACP_Current_Version']					= 'Tu estas ejecutando %s.';

		$lang['Click_return_AS_ACP']					= 'Clic %sAqui%s para regresar a la configuracion de Anti-Spam';
		$lang['AS_ACP_Update_Error']					= 'Se han reportado errores, el resto del ';
		$lang['Failed_Update']							= 'Ha fallado la actualizacion de la configuracion general de %s';

		$lang['User_id']								= 'ID de usuario';
		$lang['Always_Off']								= 'Siempre desactivado';
		$lang['Always_On']								= 'Siempre activado';
		$lang['By_Post_Count']							= 'De acuerdo a la cantidad de mensajes';
		$lang['Post_Count']								= 'Mensaje(s)';

		$lang['Constants_Update']						= 'el archivo includes/constants.php no ha sido actualizado correctamente.  Debes realizar los cambios necesarios a este archivo para que este mod trabaje correctamente.';

	// General Options
		$lang['General_Settings']						= 'Configuracion General';
		$lang['Check_Version']							= '¿Buscar actualizaciones?';
		$lang['Check_Version_Explain']					= 'Acceder automaticamente a lithiumstudios.org y verificar si estas corriendo la ultima version (asi como phpBB lo hace).';
		$lang['Acct_Activation_Explain']				= 'Debe estar configurado a Usuario para obtener los mejores resultados y la mejor proteccion.';
		$lang['Hide_Inactive_Users']					= 'Esconder a usuarios inactivos.';
		$lang['Hide_Inactive_Users_Explain']			= 'Esconder a usuarios inactivos del estado y lista de miembros del foro.';

		$lang['Captcha_Settings']						= 'Configuracion de la confirmacion Captcha/Visual';
		$lang['Captcha_Version']						= 'Seleccione la version de Captcha que deseas usar:';
		$lang['Captcha_Version_Explain']				= 'Asegurate qde que la configuracion de arriba es correcta (si lo deseas activado o desactivado).<br/>Si la version que has seleccionado es incompatible con la configuracion de tu servidor, se va a usar la opcion por defecto.';
		$lang['Demo']									= 'Demo';
		$lang['Demo_Noise']								= 'Demo Con Ruido';

		$lang['Random_Captcha']							= 'Escoge un captcha a usar aleatoreamente.';
		$lang['Default_Captcha']						= 'Usar el estilo captcha phpBB2 por defecto.<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;%s';
		$lang['Better_Captcha']							= 'Usar una version modificada de <a href="http://www.phpbb.com/phpBB/viewtopic.php?t=473222" target="_blank">Better Captcha</a>.<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;%s';

		$lang['Captcha_Noise']							= '¿Es posible añadir ruido al Captcha?';
		$lang['Captcha_Noise_Explain']					= 'Hace que el texto sea mucho mas dificil de leer por bots y humanos.<br/>Nota, esta opcion no esta disponible para todos los captchas.';
		$lang['Captcha_Case_Sensitive']					= 'Captcha es sensible a minusculas y mayusculas:';
		$lang['Captcha_Case_Sensitive_Explain']			= 'Ejemplo: Con Si, \'asdfghkj\' no coincidira con \'ASDFGHKJ\'.  Con No \'asdfghjk\' coincidira con \'ASDFGHKJ\'.';

		$lang['Posting_Settings']						= 'Configuracion de posteo';
		$lang['Posting_Url']							= 'URL/Enlaces en los mensajes';
		$lang['Posting_Url_Explain']					= '¿Cuando se deben permitir los URL/Enlaces? <br/>Siempre estaran habilitados para Administradores y Mpderadores.';
		$lang['Url_Off']								= 'URL/Enlaces Nunca Permitidos';
		$lang['Url_On']									= 'URL/Enlaces Siempre Permitidos';
		$lang['Posting_Url_Guest']						= 'URL/Enlaces No permitido para posteo de invitados';
		$lang['Url_By_Post_Count']						= 'Configurar de acuerdo al numero de mensajes posteados';

		$lang['Log_Settings']							= 'Configuracion del Log & Email';
		$lang['Log_Captcha']							= 'Registro de Confirmaciones Visuales';
		$lang['Log_Captcha_Explain']					= 'Registra la informacion de un usuario cuando este intenta ingresar un codigo incorrecto en la Confirmacion Visual.';
		$lang['Log_Profile']							= 'Registro de Perfiles';
		$lang['Log_Profile_Explain']					= 'Registra en el Log el intento de un usario de colocar informacion no permitida en su perfil.';
		$lang['Log_Url_Posts']							= 'registro de url\'s en mensajes';
		$lang['Log_Url_Posts_Explain']					= 'Cuando alguien incluye un url cuando no lo tiene permitido.';
		$lang['Log_Show']								= 'Numero de registros a mostrar en el Log';
		$lang['Log_Show_Explain']						= 'Cuantos registros se van a mostrar an la pagina de logs.';
		$lang['Logs']									= 'Log(s)';

		$lang['Email_Address']							= 'Direccion de Email';
		$lang['Email_Address_Explain']					= 'La direccion de Email a la cual se van a enviar las notificaciones de spam y que va a ser mostrada si habilita el Show Email.<br/>Si desea agregar mas de una direccion de email, solo separelas por comas.';
		$lang['Send_Email']								= 'Enviar email de alerta';
		$lang['Send_Email_Explain']						= 'Envia un email de alerta cuando algo se ha registrado en el Log.';
		$lang['L_Test_Mail']							= 'Probar Email y Procesar';
		$lang['L_Test_Mail_Explain']					= 'Envia un correo de prueba a si mismo.';

		$lang['Test_Occupation']						= 'Verificador de Email';
		$lang['Test_Interests']							= 'Enviando Email';
		$lang['Test_Signature']							= 'Gracias por probar la opcion de correo del mod Anti-Spam ACP.  Por favor, visita http://www.lithiumstudios.org por si necesitas ayuda.';
		$lang['Test_Email_Header']						= 'Enviaste un correo de prueba desde';
		$lang['Test_Username']							= 'Usuario de prueba';
		$lang['Test_Email']								= 'test@%s';
		$lang['Test_Message_Sent']						= 'El correo de prueba ha sido enviado.';

	// Inactive Userlist
		$lang['Inactive_Userlist']						= 'Lista de usuarios inactivos';
		$lang['Anti_Spam_ACP_Userlist_Original_By']		= 'Creado por: Milkboy31, wGEric';
		$lang['Anti_Spam_ACP_Userlist_Modified_By']		= 'Modificado por: <a href="http://www.lithiumstudios.org" style="text-decoration:none">EXreaction</a>';
		$lang['Show']									= 'Mostrar';
		$lang['Group']									= 'Grupo(s)';
		$lang['Find_all_posts']							= 'Buscar todo los mensajes';
		$lang['User_manage']							= 'Administrar';
		$lang['Select_All']								= 'Seleccionar todos';
		$lang['Deselect_All']							= 'Deseleccionar todos';
		$lang['Select_one']								= 'Seleccionar uno';
		$lang['Ban']									= 'Prohibir';
		$lang['UnBan']									= 'Permitir';
		$lang['Activate']								= 'Activar';

		$lang['Confirm_user_deleted']					= '¿Estas seguro de querer borrar los usuarios seleccionados(s)?';
		$lang['User_deleted_successfully']				= '¡Usuario(s) borrado satisfactoriamente!';
		$lang['Click_return_userlist']					= 'Clic %saqui%s para regresar a la Lista de usuarios inactivos';
		$lang['Confirm_user_ban']						= 'Estas seguro que deseas prohibir el acceso a los usuarios seleccionados?';
		$lang['User_banned_successfully']				= '¡Usuaruo(s) bloqueado satisfactoriamente!';
		$lang['Confirm_user_un_ban']					= '¿Estas segundo de que deseas admitir el acceso a estos usuarios?';
		$lang['User_un_banned_successfully']			= '¿Usuario admitido satisfactoriamente?';
		$lang['User_status_updated']					= '¡Estado de usuario actualizado satisfactoriaente!';

		$lang['All']									= 'Todos';
		$lang['Last_activity']							= 'Ultima actividad';
		$lang['User_level']								= 'Nivel de usuario';
		$lang['Rank']									= 'Rank';
		$lang['Ascending']								= 'Ascendente';
		$lang['Descending']								= 'Descendente';
		$lang['Is_Banned']								= '¡Prohibido!'; 
		$lang['Never']									= 'Nunca';

	// Profile Options
		$lang['Profile_Options']						= 'Opciones de perfil';
		$lang['Profile_Settings']						= 'Opciones del campo perfil';
		$lang['Reg_Off']								= 'Desactivado para registro';
		$lang['Required']								= 'Requerido';
		$lang['Sync']									= 'Sincronizar y Procesar';
		$lang['Sync_Explain']							= 'sincroniza la informacion de los usuarios existentes para que se adecuen a las reglas de perfil.';
		$lang['Config_updated_users_synced']			= 'La informacion del usuario ha sido sincronizada correctamente';
		$lang['AS_ACP_Update_Error_synced']				= 'La informacion del usuario ha sido sincronizada correctamente<br/>Se han reportado errores en la actualizacion de configuracion, el resto de la configuracion se actualizo correctamente.';

	// Log
		$lang['Spam_Log']								= 'Log de spam';
		$lang['Confirm_Log_Clear']						= '¿Estas seguro que deseas limpiar el log?';
		$lang['Log_Cleared']							= '¡El log ha sido limpiado correctamente!';
		$lang['Clear_Log']								= 'Limpiar log';
		$lang['Log_ID']									= 'ID Log';
		$lang['Date']									= 'Fecha';
		$lang['No_Entries_In_Log']						= 'No hay registros en el log.';

	// admin_users.php
		$lang['User_Topics_Deleted']					= 'Se han borrado los topicos publicados por este usuario';
		$lang['User_Posts_Deleted']						= 'Se han borrado los posts publicados por este usuario';
		$lang['User_delete_topics']						= '¿Borrar los topicos de este usuario?';
		$lang['User_delete_topics_explain']				= 'Clic aqui para borrar cualquier topico iniciado por este usuario; esta accion no puede deshacerse.';
		$lang['User_delete_posts']						= '¿Borrar los posts de este usuario?';
		$lang['User_delete_posts_explain']				= 'Clic aqui para borrar cualquier post iniciado por este usuario; esta accion no puede deshacerse.';


// registration check(includes/anti_spam_acp.php and includes/usercp_register.php)
	$lang['Profile_Error']								= 'Has llenado incorrectamente el campo %s .';
	$lang['Profile_Error_Email']						= 'Han llenado incorrectamente el campo %s con "%s".';
	$lang['Profile_Error_Email_Required']				= 'No han llenado los campos obligatorios %s .';
	$lang['Registering']								= 'registrando';
	$lang['Editing_Profile']							= 'editando su perfil';
	$lang['During_Registration']						= 'Registro';
	$lang['No_Captcha_Code']							= 'El usuario no ha ingresado ningun codigo Captcha.  El codigo en la imagen era "%s".';
	$lang['Wrong_Captcha_Code']							= 'El usuario ha ingresado un codigo Captcha incorrecto.  El codigo en la imagen era "%s".  Ellos ingresaron "%s".';
	$lang['New_Confirm_Code_Explain']					= 'Ingrese el codigo exactamente como lo ve (sin espacios). Recuerde que todas las letras en el codigo estan en  mayusculas.  No hay ningun 0 (cero).';

// posting check(includes/functions_post.php)
	$lang['Url_Not_Allowed']							= 'URL\'s/Enlaces no permitidos.';
	$lang['Url_Not_Allowed_Guests']						= 'URL\'s/Enlaces no permitidos para invitados.';
	$lang['Url_Not_Allowed_Count']						= 'Debes tener como minimo %s mensajes para poder publicar URL\'s/enlaces.';
	$lang['During_Posting']								= 'Posteando';
	$lang['Posting']									= 'Posteando';
?>