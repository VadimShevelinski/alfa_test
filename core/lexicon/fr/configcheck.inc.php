<?php
/**
 * Config Check English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['configcheck_admin'] = 'Veuillez contacter l\'administrateur du système et le prévenir de ce message!';
$_lang['configcheck_allowtagsinpost_context_enabled'] = 'Paramètre de contexte allow_tags_in_post activé pour un contexte autre que `mgr`';
$_lang['configcheck_allowtagsinpost_context_enabled_msg'] = 'Le paramètre de contexte allow_tags_in_post est activé. MODX recommande de désactiver ce paramètre à moins que vous n\'ayez besoin que vos utilisateurs puissent poster des tags MODX, des entitées numériques ou encore de tags HTML script via POST. En général, ce paramètre doit être désactivé, sauf pour le contexte « mgr ».';
$_lang['configcheck_allowtagsinpost_system_enabled'] = 'Paramètre allow_tags_in_post activé';
$_lang['configcheck_allowtagsinpost_system_enabled_msg'] = 'Le paramètre système allow_tags_in_post est activé. MODX recommande de désactiver ce paramètre à moins que vous n\'ayez besoin que vos utilisateurs puissent poster des tags MODX, des entitées numériques ou encore de tags HTML script via POST. Il est préférable d\'activer ce paramètre juste pour les contextes concernés.';
$_lang['configcheck_cache'] = 'Répertoire de cache non accessible en écriture';
$_lang['configcheck_cache_msg'] = 'MODX ne peut pas écrire dans le répertoire de cache. MODX fonctionnera malgré tout comme attendu, mais sans la possibilité de mettre en cache. Pour résoudre ceci, veuillez rendre le répertoire /_cache/ accessible en écriture.';
$_lang['configcheck_configinc'] = 'Fichier de configuration toujours accessible en écriture!';
$_lang['configcheck_configinc_msg'] = 'Votre site est vulnérable aux pirates qui peuvent l\'endommager sérieusement. Veuillez mettre votre fichier de configuration en lecture seule! Si vous n\'êtes pas l\'administrateur du site, veuiller le contacter et l\'informer de ce message! Le fichier en question est situé dans [[+path]]';
$_lang['configcheck_default_msg'] = 'Une erreur non spécifiée a été trouvée. Ce qui est bizarre.';
$_lang['configcheck_errorpage_unavailable'] = 'La page d\'erreur de votre site n\'est pas disponible.';
$_lang['configcheck_errorpage_unavailable_msg'] = 'Cela signifie que votre page d\'erreur n\'est pas accessible pour les visiteurs ou qu\'elle n\'existe pas. Ceci peut mener à une condition de boucle récursive et générer des erreurs dans vos fichiers de log. Veuillez vérifier qu\'il n\'y a aucun groupe d\'utilisateurs web assigné à cette page.';
$_lang['configcheck_errorpage_unpublished'] = 'La page d\'erreur de votre site n\'est pas publiée ou n\'existe pas.';
$_lang['configcheck_errorpage_unpublished_msg'] = 'Cela signifie que votre page d\'erreur n\'est pas accessible pour les visiteurs. Publiez la page ou assurez-vous qu\'elle soit assignée à un document existant dans l\'arborescence de votre site dans le menu Système &gt; Paramètres du système.';
$_lang['configcheck_htaccess'] = 'Le dossier "Core" est accessible depuis le web';
$_lang['configcheck_htaccess_msg'] = 'MODX detected that your core folder is (partially) accessible to the public.
<strong>This is not recommended and a security risk.</strong>
If your MODX installation is running on a Apache webserver
you should at least set up the .htaccess file inside the core folder <em>[[+fileLocation]]</em>.
This can be easily done by renaming the existing ht.access example file there to .htaccess.
<p>There are other methods and webservers you may use, please read the <a href="https://docs.modx.com/current/en/getting-started/maintenance/securing-modx">Hardening MODX Guide</a>
for further information about securing your site.</p>
If you setup everything correctly, browsing e.g. to the <a href="[[+checkUrl]]" target="_blank">Changelog</a>
should give you a 403 (permission denied) or better a 404 (not found). If you can see the changelog
there in the browser, something is still wrong and you need to reconfigure or call an expert to solve this.';
$_lang['configcheck_images'] = 'Répertoire d\'images non accessible en écriture';
$_lang['configcheck_images_msg'] = 'Le répertoire d\'images n\'est pas accessible en écriture ou n\'existe pas. Cela signifie que les fonctions du gestionnaire d\'images dans l\'éditeur ne fonctionneront pas!';
$_lang['configcheck_installer'] = 'Répertoire d\'installation toujours présent';
$_lang['configcheck_installer_msg'] = 'Le répertoire setup/ contient les scripts d\'installation de MODX. Imaginez ce qui se passerait si une personne mal intentionnée trouvait ce répertoire et lançait le processus d\'installation! Il n\'ira certainement pas loin puisqu\'il aura besoin des informations de connexion à la base de données, mais il est toujours préférable de supprimer ce répertoire de votre serveur. Le fichier en question est situé dans [[+path]]';
$_lang['configcheck_lang_difference'] = 'Nombre incorrect d\'entrées dans votre fichier de langue';
$_lang['configcheck_lang_difference_msg'] = 'La langue actuelle a un nombre différent d\'entrées par rapport à la langue par défaut. Bien que cela ne soit pas un problème, cela peut signifier que votre fichier de langue a besoin d\'être mis à jour.';
$_lang['configcheck_notok'] = 'Un ou plusieurs détails de configuration n\'ont pas été validés: ';
$_lang['configcheck_ok'] = 'Vérifications passées avec succès - pas d\'avertissement à signaler.';
$_lang['configcheck_phpversion'] = 'La version de PHP est obsolète';
$_lang['configcheck_phpversion_msg'] = 'Votre version de PHP [[+phpversion]] n\'est plus maintenue par les développeurs PHP, ce qui signifie qu\'aucune mise à jour de sécurité ne sera disponible. Il est également probable que MODX ou l\'une de ses extensions ne soit pas compatible. Afin de sécuriser votre site, veuillez mettre à jour votre environnement en PHP [[+phprequired]] dès que possible.';
$_lang['configcheck_register_globals'] = 'register_globals est fixé à ON dans votre fichier de configuration php.ini';
$_lang['configcheck_register_globals_msg'] = 'Cette configuration rend votre site plus vulnérable aux attaques Cross Site Scripting (XSS). Vous devriez contacter votre hébergeur afin de désactiver ce paramètre.';
$_lang['configcheck_title'] = 'Vérification de configuration';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'La page d\'accès non autorisé de votre site n\'est pas publiée ou n\'existe pas.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'Cela signifie que la page d\accès non autorisé n\'est pas accessible aux visiteurs ou n\'existe pas. Cela peut entrainer une condition de boucles récursive et générer des erreurs dans vos fichiers de log. Veuillez vérifier qu\'il n\'y a aucun groupe d\'utilisateurs web assigné à cette page.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'La page d\'accès non autorisé définie dans les options de configuration n\'est pas publiée.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'Cela signifie que votre page d\'accès non autorisé n\'est pas accessible aux visiteurs. Publiez la page ou assurez-vous qu\'elle soit assignée à un document existant dans l\'arborescence de votre site dans le menu Système &gt; Paramètres du système.';
$_lang['configcheck_warning'] = 'Avertissement de configuration:';
$_lang['configcheck_what'] = 'Qu\'est-ce que cela signifie?';
