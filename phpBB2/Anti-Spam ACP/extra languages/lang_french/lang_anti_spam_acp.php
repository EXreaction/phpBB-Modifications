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
	$lang['Spam_Attempt']								= 'Tentative de pollution sur ';
	$lang['Not_Test_Email_Header']						= 'Un utilisateur a effectué une opération non consentie (au moment de %s) sur';

// Admin Control Panel
	// Common
		$lang['Anti_Spam_ACP']							= 'Anti-Spam ACP, contrôle de la pollution';
		$lang['Anti_Spam_ACP_Created_By']				= 'Créé par: <a href="http://www.lithiumstudios.org" style="text-decoration:none" target="_blank">EXreaction</a>';
		$lang['version_check_disabled']					= 'Vous n\'avez pas activé l\'option «Contrôler les mises à jour». Nous vous conseillons de le faire.';
		$lang['AS_ACP_up_to_date']						= 'Votre version de Anti-Spam ACP est à jour.';
		$lang['AS_ACP_not_up_to_date']					= 'Vous n\'utilisez pas la dernière version de Anti-Spam ACP.  Vous pouvez télécharger la dernière version stable de Anti-Spam ACP depuis <a href="http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=25&t=4">Lithium Studios</a>.';
		$lang['AS_ACP_Latest_Version']					= 'La dernière version stable est la %s.';
		$lang['AS_ACP_Current_Version']					= 'Vous utilisez la version %s.';

		$lang['Click_return_AS_ACP']					= 'Cliquer %sici%s pour revenir à Configuration Anti-Spam';
		$lang['AS_ACP_Update_Error']					= 'Des erreurs ont été détectées, le reste du ';
		$lang['Failed_Update']							= 'Mise à jour de la configuration générale de %s a échoué';

		$lang['User_id']								= 'Identification de l\'utilisateur';
		$lang['Always_Off']								= 'Toujours désactivé';
		$lang['Always_On']								= 'Toujours activé';
		$lang['By_Post_Count']							= 'Désactivé pour les premiers';
		$lang['Post_Count']								= 'messages';

		$lang['Constants_Update']						= 'Le fichier includes/constants.php n\'a pas été mis à jour correctement. Effectuez manuellement les modifications requises par cette extension.';

	// General Options
		$lang['General_Settings']						= 'Paramètres généraux';
		$lang['Check_Version']							= 'Contrôler les mises à jour:';
		$lang['Check_Version_Explain']					= 'Accède automatiquement à lithiumstudios.org et contrôle si vous utilisez la dernière version de Anti-Spam ACP (exactement comme phpBB).';
		$lang['Acct_Activation_Explain']				= 'Sélectionner «Utilisateur» pour obtenir les meilleurs résultats et la meilleure protection.';
		$lang['Hide_Inactive_Users']					= 'Cacher les utilisateurs inactifs:';
		$lang['Hide_Inactive_Users_Explain']			= 'Cache les utilisateurs inactifs des statistiques du forum et de la Liste des utilisateurs.';

		$lang['Captcha_Settings']						= 'Paramètres de la confirmation visuelle';
		$lang['Captcha_Version']						= 'Choisir la version que vous voulez utiliser:';
		$lang['Captcha_Version_Explain']				= 'S\'assurer que les paramètres ci-dessus soient ceux que vous désirez. Si la version choisie est incompatible avec les paramètres de votre serveur, c\'est la version par défaut de phpBB2 qui sera utilisée.';
		$lang['Demo']									= 'Prévisualisation';
		$lang['Demo_Noise']								= 'Prévisualisation avec bruit';

		$lang['Random_Captcha']							= 'Choisir chaque fois une version différente, au hasard';
		$lang['Default_Captcha']						= 'Utiliser la confirmation visuelle par défaut de phpBB2<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;%s';
		$lang['Better_Captcha']							= 'Utiliser une version modifiée de <a href="http://www.phpbb.com/phpBB/viewtopic.php?t=473222">Better Captcha</a><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;%s';
		
		$lang['Captcha_Noise']							= 'Ajouter le bruit à la confirmation visuelle (si possible):';
		$lang['Captcha_Noise_Explain']					= 'Rend plus difficile la lecture du code aux robots et aux humains.<br />N.B. Cette option n\'est pas disponible pour toutes les versions.';
		$lang['Captcha_Case_Sensitive']					= 'Code de confirmation visuelle sensible à la casse:';
		$lang['Captcha_Case_Sensitive_Explain']			= 'S\'il est activé, une séquence du type \'asdfghkj\' ne sera pas considérée équivalente à \'ASDFGHKJ\', autrement oui.';

		$lang['Posting_Settings']						= 'Paramètres d\'envoi';
		$lang['Posting_Url']							= 'URL/liens dans les messages';
		$lang['Posting_Url_Explain']					= 'Détermine quand les URL/liens dans le corps d\'un message sont consentis.<br /> Ils sont toujours consentis pour les administrateurs et les modérateurs.';
		$lang['Url_Off']								= 'Toujours désactivés';
		$lang['Url_On']									= 'Toujours activés';
		$lang['Url_By_Post_Count']						= 'Désactivés pour les premiers';
		$lang['Posting_Url_Guest']						= 'Toujours désactivés pour les invités';

		$lang['Spam_Log']								= 'Registre de la pollution';
		$lang['Log_Settings']							= 'Paramètres du registre et du courrier électronique';
		$lang['Log_Captcha']							= 'Enregistrer la confirmation visuelle';
		$lang['Log_Captcha_Explain']					= 'Enregistre les données de chaque utilisateur qui tape un code de confirmation visuelle erroné ou qui n\'en tape aucun.';
		$lang['Log_Profile']							= 'Enregistrer le profil';
		$lang['Log_Profile_Explain']					= 'Enregistre les données de chaque utilisateur qui tente de remplir un champ du profil non consenti ou qui n\'en rempli pas un obligatoire.';
		$lang['Log_Url_Posts']							= 'Enregistrer les URL/liens';
		$lang['Log_Url_Posts_Explain']					= 'Enregistre les données de chaque utilisateur qui tente d\'insérer un URL/lien en violant les normes en vigueur sur les URL.';
		$lang['Log_Show']								= 'Nombre de rubriques par page';
		$lang['Log_Show_Explain']						= 'Nombre de rubriques par page de registre.';
		$lang['Logs']									= '';

		$lang['Email_Address']							= 'Adresse de courrier électronique';
		$lang['Email_Address_Explain']					= 'Adresse de courrier électronique à laquelle seront envoyées les notifications de tentatives de pollution (et qui sera montrée si l\'option «Toujours montrer son adresse e-mail» est activée).<br />Pour insérer plusieurs adresses, les séparer par une virgule.';
		$lang['Send_Email']								= 'Envoyer le message de notification';
		$lang['Send_Email_Explain']						= 'Envoie un message électronique de notification chaque fois qu\'une opération non consentie est enregistrée.';
		$lang['L_Test_Mail']							= 'Envoyer un message d\'essai';
		$lang['L_Test_Mail_Explain']					= 'Envoie un message d\'essai à vous-même.';

		$lang['Test_Occupation']						= 'Vérificateur de courrier électronique';
		$lang['Test_Interests']							= 'Envoyer des messages électroniques';
		$lang['Test_Signature']							= 'Merci d\'avoir testé la fonctionnalité de courriel d\'Anti-Spam ACP. Visitez http://www.lithiumstudios.org per toute assistance.';
		$lang['Test_Email_Header']						= 'Vous avez envoyé un message d\essai depuis';
		$lang['Test_Username']							= 'Utilisateur d\'essai';
		$lang['Test_Email']								= 'essai@%s';
		$lang['Test_Message_Sent']						= 'Le message d\'essai a été envoyé.';

	// Inactive Userlist
		$lang['Inactive_Userlist']						= 'Liste des utilisateurs inactifs';
		$lang['Anti_Spam_ACP_Userlist_Original_By']		= 'Créée par: Milkboy31, wGEric';
		$lang['Anti_Spam_ACP_Userlist_Modified_By']		= 'Modifiée par: <a href="http://www.lithiumstudios.org" style="text-decoration:none">EXreaction</a>';
		$lang['Show']									= 'Montrer';
		$lang['Group']									= 'Groupes';
		$lang['Find_all_posts']							= 'Trouver tous les messages';
		$lang['User_manage']							= 'Gérer';
		$lang['Select_All']								= 'Sélectionner tous';
		$lang['Deselect_All']							= 'Désélectionner tous';
		$lang['Select_one']								= 'Sélectionner';
		$lang['Ban']									= 'Bannir';
		$lang['UnBan']									= 'Débannir';
		$lang['Activate']								= 'Activer';

		$lang['Confirm_user_deleted']					= 'Êtes-vous sûr de vouloir éliminer les utilisateurs sélectionnés?';
		$lang['User_deleted_successfully']				= 'Utilisateurs éliminés avec succès!';
		$lang['Click_return_userlist']					= 'Cliquer %sici%s pour revenir à la Liste des utilisateurs inactifs';
		$lang['Confirm_user_ban']						= 'Êtes-vous sûr de vouloir bannir les utilisateurs sélectionnés?';
		$lang['User_banned_successfully']				= 'Utilisateurs bannis avec succès!';
		$lang['Confirm_user_un_ban']					= 'Êtes-vous sûr de vouloir débannir les utilisateurs sélectionnés?';
		$lang['User_un_banned_successfully']			= 'Utilisateurs débannis avec succès!';
		$lang['User_status_updated']					= 'État des utilisateurs mis à jour avec succès!';

		$lang['All']									= 'Tous';
		$lang['Last_activity']							= 'Dernière activité';
		$lang['User_level']								= 'Niveau de l\'utilisateur';
		$lang['Rank']									= 'Rang';
		$lang['Ascending']								= 'Croissant';
		$lang['Descending']								= 'Décroissant';
		$lang['Is_Banned']								= 'Banni'; 
		$lang['Never']									= 'Jamais';

	// Profile Options
		$lang['Profile_Options']						= 'Options du profil';
		$lang['Profile_Settings']						= 'Paramètres du profil';
		$lang['Reg_Off']								= 'Désactivé pour l\'enregistrement';
		$lang['Required']								= 'Obligatoire';
		$lang['Sync']									= 'Synchroniser et envoyer';
		$lang['Sync_Explain']							= 'Met à jour les données de tous les utilisateurs de telle sorte que les règles en vigueur sur le profil soient respectées.';
		$lang['Config_updated_users_synced']			= 'Synchronisation effectuée avec succès!';
		$lang['AS_ACP_Update_Error_synced']				= 'Les données des utilisateurs ont été mises à jour avec succès!<br/>Toutefois, des erreurs ont été détectées dans la mise à jour de la configuration: le reste de la configuration a été mis à jour avec succès.';

	// Log
		$lang['Confirm_Log_Clear']						= 'Êtes-vous sûr de vouloir réinitialiser le registre?';
		$lang['Log_Cleared']							= 'Le registre a réinitialisé avec succès!';
		$lang['Clear_Log']								= 'Réinitialiser le registre';
		$lang['Log_ID']									= 'Identification du registre';
		$lang['Date']									= 'Date';
		$lang['No_Entries_In_Log']						= 'Le registre est vide.';

	// admin_users.php
		$lang['User_Topics_Deleted']					= 'Les fils de cet utilisateur ont été supprimés!';
		$lang['User_Posts_Deleted']						= 'Les messages de cet utilisateur ont été supprimés!';
		$lang['User_delete_topics']						= 'Supprimer les fils de cet utilisateur?';
		$lang['User_delete_topics_explain']				= 'Sélectionner cette case pour supprimer tous les fils ouverts par cet utilisateur. Cette opération ne peut pas être annulée.';
		$lang['User_delete_posts']						= 'Supprimer les messages de cet utilisateur?';
		$lang['User_delete_posts_explain']				= 'Sélectionner cette case pour supprimer tous les messages envoyés par cet utilisateur. Cette opération ne peut pas être annulée.';


// registration check(includes/anti_spam_acp.php and includes/usercp_register.php)
	$lang['Profile_Error']								= 'Vous avez rempli le champ non consenti %s.';
	$lang['Profile_Error_Email']						= 'L\'utilisateur a rempli le champ non consenti %s avec « %s ».';
	$lang['Profile_Error_Email_Required']				= 'L\'utilisateur n\'a pas rempli le champ obligatoire %s.';
	$lang['Registering']								= 's\'enregistrer';
	$lang['Editing_Profile']							= 'modifier son profil';
	$lang['During_Registration']						= 'Enregistrement';
	$lang['No_Captcha_Code']							= 'L\'utilisateur n\'a pas inséré le code de confirmation visuelle. Le code de l\'image était : « %s ».';
	$lang['Wrong_Captcha_Code']							= 'L\'utilisateur a inséré un code de confirmation visuelle erroné.  Le code de l\'image était : « %s ». Le code inséré a été : « %s ».';
	$lang['New_Confirm_Code_Explain']					= 'Taper le code exactement comme il apparaît dans l\'image (il n\'y a pas d\'espaces). Le système distingue les majuscules et les minuscules, mais les lettres sont toutes des majuscules. Il n\'y a pas de 0 (zéros).';

// posting check(includes/functions_post.php)
	$lang['Url_Not_Allowed']							= 'Les URL/liens ne sont pas consentis.';
	$lang['Url_Not_Allowed_Guests']						= 'Les URL/liens ne sont pas consentis aux invités.';
	$lang['Url_Not_Allowed_Count']						= 'Vous devez avoir envoyé %s messages avant de pouvoir insérer des URL/liens.';
	$lang['During_Posting']								= 'Envoi d\'un message';
	$lang['Posting']									= 'envoyer un message';
?>