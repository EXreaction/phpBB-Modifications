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
	$lang['Spam_Attempt']								= 'Tentativo d\'inquinamento su ';
	$lang['Not_Test_Email_Header']						= 'Un utente ha effettuato un\'operazione non consentita (al momento di %s) su';

// Admin Control Panel
	// Common
		$lang['Anti_Spam_ACP']							= 'Anti-Spam ACP, controllo spazzatura';
		$lang['Anti_Spam_ACP_Created_By']				= 'Creato da: <a href="http://www.lithiumstudios.org" style="text-decoration:none" target="_blank">EXreaction</a>';
		$lang['version_check_disabled']					= 'Non hai abilitato l\'opzione «Controlla aggiornamenti». Ti consigliamo di farlo.';
		$lang['AS_ACP_up_to_date']						= 'La tua versione di Anti-Spam ACP è aggiornata.';
		$lang['AS_ACP_not_up_to_date']					= 'Non stai usando l\'ultima versione di Anti-Spam ACP.  Puoi scaricare l\'ultima versione stabile di Anti-Spam ACP da <a href="http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=25&t=4">Lithium Studios</a>.';
		$lang['AS_ACP_Latest_Version']					= 'L\'ultima versione stabile è la %s.';
		$lang['AS_ACP_Current_Version']					= 'Sta usando la versione %s.';

		$lang['Click_return_AS_ACP']					= 'Clicca %squi%s per tornare a Configurazione Anti-Spam';
		$lang['AS_ACP_Update_Error']					= 'Sono stati rilevati errori, il resto del ';
		$lang['Failed_Update']							= 'Aggiornamento della configurazione generale di %s non riuscito';

		$lang['User_id']								= 'Identificativo utente';
		$lang['Always_Off']								= 'Sempre disabilitato';
		$lang['Always_On']								= 'Sempre abilitato';
		$lang['By_Post_Count']							= 'Disabilitato per i primi';
		$lang['Post_Count']								= 'interventi';

		$lang['Constants_Update']						= 'L\'archivio includes/constants.php non è stato aggiornato correttamente. Effettua manualmente le modifiche richieste da questa estensione.';

	// General Options
		$lang['General_Settings']						= 'Impostazioni generali';
		$lang['Check_Version']							= 'Controlla aggiornamenti:';
		$lang['Check_Version_Explain']					= 'Accede automaticamente a lithiumstudios.org e controlla se stai usando l\'ultima versione di Anti-Spam ACP (esattamente come phpBB).';
		$lang['Acct_Activation_Explain']				= 'Seleziona «Utente» per ottenere i migliori risultati e la migliore protezione.';
		$lang['Hide_Inactive_Users']					= 'Nascondi utenti inattivi:';
		$lang['Hide_Inactive_Users_Explain']			= 'Nasconde gli utenti inattivi dalle statistiche del forum e dalla Lista utenti.';

		$lang['Captcha_Settings']						= 'Impostazioni conferma visuale';
		$lang['Captcha_Version']						= 'Scegli la versione che vuoi usare:';
		$lang['Captcha_Version_Explain']				= 'Assicúrati che l\'impostazione di cui sopra sia quella desiderata. Se la versione prescelta è incompatibile con le impostazioni del tuo serviente, verrà usata la versione predefinita di phpBB2.';
		$lang['Demo']									= 'Anteprima';
		$lang['Demo_Noise']								= 'Anteprima con rumore';

		$lang['Random_Captcha']							= 'Scegli ogni volta una versione diversa, in modo casuale';
		$lang['Default_Captcha']						= 'Usa la conferma visuale predefinita di phpBB2<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;%s';
		$lang['Better_Captcha']							= 'Usa una versione modificata di <a href="http://www.phpbb.com/phpBB/viewtopic.php?t=473222">Better Captcha</a><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;%s';
		
		$lang['Captcha_Noise']							= 'Aggiungi rumore alla conferma visuale (se possibile):';
		$lang['Captcha_Noise_Explain']					= 'Rende piú difficile la lettura del codice ad automi e umani.<br />N.B. Quest\'opzione non è disponibile per tutte le versioni.';
		$lang['Captcha_Case_Sensitive']					= 'Il sistema fa distinzione tra maiuscole e minuscole per il codice di conferma visuale:';
		$lang['Captcha_Case_Sensitive_Explain']			= 'Se abilitato, una stringa del tipo \'asdfghkj\' non sarà considerata equivalente a \'ASDFGHKJ\', altrimenti sí.';

		$lang['Posting_Settings']						= 'Impostazioni invio';
		$lang['Posting_Url']							= 'URL/collegamenti negli interventi';
		$lang['Posting_Url_Explain']					= 'Determina quando sono consentiti gli URL/collegamenti nel corpo di un intervento.<br /> Sono sempre consentiti per amministratori e moderatori.';
		$lang['Url_Off']								= 'Sempre disabilitati';
		$lang['Url_On']									= 'Sempre abilitati';
		$lang['Url_By_Post_Count']						= 'Disabilitati per i primi';
		$lang['Posting_Url_Guest']						= 'Sempre disabilitati per gli ospiti';

		$lang['Spam_Log']								= 'Registro spazzatura';
		$lang['Log_Settings']							= 'Impostazioni registro e posta elettronica';
		$lang['Log_Captcha']							= 'Registra conferma visuale';
		$lang['Log_Captcha_Explain']					= 'Registra gli estremi di ogni utente che digiti un codice di conferma visuale errato o non ne digiti alcuno.';
		$lang['Log_Profile']							= 'Registra profilo';
		$lang['Log_Profile_Explain']					= 'Registra gli estremi di ogni utente che tenti di completare un campo del profilo non consentito o non non ne completi uno obbligatorio.';
		$lang['Log_Url_Posts']							= 'Registra URL/collegamenti';
		$lang['Log_Url_Posts_Explain']					= 'Registra gli estremi di ogni utente che tenti d\'inserire un URL/collegamento in violazione delle norme vigenti sugli URL.';
		$lang['Log_Show']								= 'Numero di voci per pagina';
		$lang['Log_Show_Explain']						= 'Numero di voci di registro per pagina.';
		$lang['Logs']									= '';

		$lang['Email_Address']							= 'Indirizzo di posta elettronica';
		$lang['Email_Address_Explain']					= 'Indirizzo di posta elettronica cui saranno inviate le notifiche di tentato inquinamento (e che sarà mostrato se l\'opzione «Mostra sempre il mio indirizzo di posta elettronica» è abilitata).<br />Per inserire piú indirizzi, separali con una virgola.';
		$lang['Send_Email']								= 'Invia messaggio di notifica';
		$lang['Send_Email_Explain']						= 'Invia un messaggio di posta elettronica di notifica ogniqualvolta viene registrata un\'operazione non consentita.';
		$lang['L_Test_Mail']							= 'Invia messaggio di prova';
		$lang['L_Test_Mail_Explain']					= 'Invia un messaggio di prova a te stesso.';

		$lang['Test_Occupation']						= 'Collaudatore di posta elettronica';
		$lang['Test_Interests']							= 'Inviare messaggi di posta elettronica';
		$lang['Test_Signature']							= 'Grazie di aver saggiato la funzionalità di posta elettronica di Anti-Spam ACP. Visita http://www.lithiumstudios.org se hai bisogno di assistenza.';
		$lang['Test_Email_Header']						= 'Hai inviato un messaggio di prova da';
		$lang['Test_Username']							= 'Utente di prova';
		$lang['Test_Email']								= 'prova@%s';
		$lang['Test_Message_Sent']						= 'Il messaggio di prova è stato inviato.';

	// Inactive Userlist
		$lang['Inactive_Userlist']						= 'Lista utenti inattivi';
		$lang['Anti_Spam_ACP_Userlist_Original_By']		= 'Creata da: Milkboy31, wGEric';
		$lang['Anti_Spam_ACP_Userlist_Modified_By']		= 'Modificata da: <a href="http://www.lithiumstudios.org" style="text-decoration:none">EXreaction</a>';
		$lang['Show']									= 'Mostra';
		$lang['Group']									= 'Gruppi';
		$lang['Find_all_posts']							= 'Trova tutti gli interventi';
		$lang['User_manage']							= 'Gestisci';
		$lang['Select_All']								= 'Seleziona tutti';
		$lang['Deselect_All']							= 'Deseleziona tutti';
		$lang['Select_one']								= 'Seleziona';
		$lang['Ban']									= 'Disabilita';
		$lang['UnBan']									= 'Abilita';
		$lang['Activate']								= 'Attiva';

		$lang['Confirm_user_deleted']					= 'Sei sicuro di voler eliminare gli utenti selezionati?';
		$lang['User_deleted_successfully']				= 'Utenti eliminati con successo.';
		$lang['Click_return_userlist']					= 'Clicca %squi%s per tornare alla Lista utenti inattivi';
		$lang['Confirm_user_ban']						= 'Sei sicuro di voler disabilitare gli utenti selezionati?';
		$lang['User_banned_successfully']				= 'Utenti disabilitati con successo.';
		$lang['Confirm_user_un_ban']					= 'Sei sicuro di voler riabilitare gli utenti selezionati?';
		$lang['User_un_banned_successfully']			= 'Utenti riabilitati con successo.';
		$lang['User_status_updated']					= 'Lo stato degli utenti selezionati è stato aggiornato con successo.';

		$lang['All']									= 'Tutti';
		$lang['Last_activity']							= 'Ultima attività';
		$lang['User_level']								= 'Livello utente';
		$lang['Rank']									= 'Grado';
		$lang['Ascending']								= 'Crescente';
		$lang['Descending']								= 'Decrescente';
		$lang['Is_Banned']								= 'Disabilitato'; 
		$lang['Never']									= 'Mai';

	// Profile Options
		$lang['Profile_Options']						= 'Opzioni profilo';
		$lang['Profile_Settings']						= 'Impostazioni profilo';
		$lang['Reg_Off']								= 'Disabilitato per la registrazione';
		$lang['Required']								= 'Obbligatorio';
		$lang['Sync']									= 'Sincronizza e invia';
		$lang['Sync_Explain']							= 'Aggiorna i dati di tutti gli utenti in modo che vengano rispettate le regole vigenti sul profilo.';
		$lang['Config_updated_users_synced']			= 'Sincronizzazione effettuata con successo!';
		$lang['AS_ACP_Update_Error_synced']				= 'I dati degli utenti sono stati aggiornati con successo!<br/>Tuttavia, sono stati rivelati errori nel\'aggiornamento della configurazione: il resto della configurazione è stato aggiornato con successo.';

	// Log
		$lang['Confirm_Log_Clear']						= 'Sei sicuro di voler azzerare il registro?';
		$lang['Log_Cleared']							= 'Il registro è stato azzerato con successo!';
		$lang['Clear_Log']								= 'Azzera registro';
		$lang['Log_ID']									= 'Identificativo registro';
		$lang['Date']									= 'Data';
		$lang['No_Entries_In_Log']						= 'Il registro è vuoto.';

	// admin_users.php
		$lang['User_Topics_Deleted']					= 'I filoni di questo utente sono stati cancellati!';
		$lang['User_Posts_Deleted']						= 'Gli interventi di questo utente sono stati cancellati!';
		$lang['User_delete_topics']						= 'Cancella i filoni di questo utente?';
		$lang['User_delete_topics_explain']				= 'Seleziona questa casella per cancellare tutti i filoni aperti da questo utente. Questa operazione non può essere annullata.';
		$lang['User_delete_posts']						= 'Cancella gli interventi di questo utente?';
		$lang['User_delete_posts_explain']				= 'Seleziona questa casella per cancellare tutti i gli interventi inviati da questo utente. Questa operazione non può essere annullata.';


// registration check(includes/anti_spam_acp.php and includes/usercp_register.php)
	$lang['Profile_Error']								= 'Hai completato il campo non consentito %s.';
	$lang['Profile_Error_Email']						= 'L\'utente ha completato il campo non consentito %s con «%s».';
	$lang['Profile_Error_Email_Required']				= 'L\'utente non ha completato il campo obbligatorio %s.';
	$lang['Registering']								= 'registrarsi';
	$lang['Editing_Profile']							= 'modificare il profilo';
	$lang['During_Registration']						= 'Registrazione';
	$lang['No_Captcha_Code']							= 'L\'utente non ha inserito il codice di conferma visuale. Il codice dell\'imagine era: «%s».';
	$lang['Wrong_Captcha_Code']							= 'L\'utente ha inserito un codice di conferma visuale errato.  Il codice dell\'imagine era: «%s». Il codice inserito è stato: «%s».';
	$lang['New_Confirm_Code_Explain']					= 'Digita il codice esattamente come appare nell\'immagine (non ci sono spazi). Il sistema fa distinzione tra maiuscole e minuscole, ma le lettere sono tutte maiuscole. Non ci sono 0 (zeri).';

// posting check(includes/functions_post.php)
	$lang['Url_Not_Allowed']							= 'Gli URL/collegamenti non sono consentiti.';
	$lang['Url_Not_Allowed_Guests']						= 'Gli URL/collegamenti non sono consentiti agli ospiti.';
	$lang['Url_Not_Allowed_Count']						= 'Devi aver inviato %s interventi prima di poter inserire URL/collegamenti.';
	$lang['During_Posting']								= 'Invio intervento';
	$lang['Posting']									= 'inviare un intervento';
?>