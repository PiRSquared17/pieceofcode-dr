<?php
/**
 * @file PieceOfCode-dr.i18n.php
 *
 * Subversion
 *	- ID:  $Id$
 *	- URL: $URL$
 *
 * @copyright 2010 Alejandro Darío Simi
 * @license GPL
 * @author Alejandro Darío Simi
 * @date 2010-08-28
 */

$messages = array();
$messages['en'] = array(
	'pieceofcode'		=> 'PieceOfCode',
	'poc-anonymous'		=> 'anonymous',
	'poc-back'		=> 'back',
	'poc-cancel'		=> 'cancel',
	'poc-delete'		=> 'delete',
	'poc-disabled'		=> 'disabled',
	'poc-enabled'		=> 'enabled',
	'poc-none'		=> 'none',
	'poc-no'		=> 'no',
	'poc-not-present'	=> 'not present',
	'poc-open'		=> 'open',
	'poc-pieceofcode-desc'	=> 'This extension allows to connect several SVN repositories, import font-codes from them and paste pieces of those codes inside articles.<br/>Provides <tt>&lt;pieceofcode&gt;</tt> and <tt>&lt;/pieceofcode&gt;</tt> tags.<sup>[[Special:PieceOfCode|more]]</sup>',
	'poc-present'		=> 'present',
	'poc-seconds'		=> 'secs',
	'poc-send'		=> 'send',
	'poc-view-all'		=> 'View all',
	'poc-yes'		=> 'yes',

	'poc-errmsg-empty-tcode'	=> 'Files without extension are not allowed',
	'poc-errmsg-forbidden-tcode'	=> 'Forbidden font-code type (extension: *.$1)',
	'poc-errmsg-invalid-connection'	=> 'Invalid connection',
	'poc-errmsg-large-highlight'	=> 'Specific highlightning disable. Code is larger than $1 bytes',
	'poc-errmsg-large-showall'	=> 'Preview without styles. Code is larger than $1 bytes',
	'poc-errmsg-large-show'		=> 'Preview was truncated. Code is larger than $1 bytes',
	'poc-errmsg-no-connection'	=> 'No connection specified',
	'poc-errmsg-no-fileinfo'	=> 'Unable to retrieve file information ($1>$2:$3)',
	'poc-errmsg-no-insert'		=> 'Unable to perform the INSERT on database',
	'poc-errmsg-no-svn-file'	=> 'Unable to retrieve SVN file ($1>$2:$3)',
	'poc-errmsg-no-upload-rights'	=> 'Current user is not allowed to upload',
	'poc-errmsg-only-admin'		=> 'Your user is not allowed to perform this operation, only a system administrator is able to do it',
	'poc-errmsg-query-no-delete'	=> 'Unable to delete on database',
	'poc-errmsg-query-no-result'	=> 'Query returned no rows',
	'poc-errmsg-remove-file'	=> 'Unable to remove file \'$1\'',
	'poc-errmsg-stats-disabled'	=> 'Statistics are disabled',
	'poc-errmsg-stylecode-extension'=> 'The extension <a href="http://www.mediawiki.org/wiki/Extension:SyntaxHighlight">SyntaxHighlight</a> is required to show font-codes in the right way',
	'poc-errmsg-svn-file-exist'	=> 'This file already exists on the system (path: \'$1\')',
	'poc-errmsg-svn-no-file'	=> 'File does not exists (path: \'$1\')',
	'poc-errmsg-unknown-dbtype'	=> 'Unknown database type \'$1\'',
	'poc-errmsg-unknown-tcode'	=> 'Unknown font-code type (extension: *.$1)',

	'poc-sinfo-about-to-delete'		=> 'You are about to delete a file:<ul><li><b>connection</b>: $1</li><li><b>path</b>: $2</li><li><b>revision</b>: $3</li><li><b>language</b>: $4</li></ul>Are you sure?',
	'poc-sinfo-author'			=> 'Author',
	'poc-sinfo-cnf-empty-exts'		=> 'Allow empty extensions',
	'poc-sinfo-cnf-forbidden-exts'		=> 'Forbidden Extensions',
	'poc-sinfo-cnf-maxhighlight'		=> 'Highlightning limit',
	'poc-sinfo-cnf-maxshowing'		=> 'Code printing limit',
	'poc-sinfo-cnf-types-and-exts'		=> 'Code Styles and Extensions',
	'poc-sinfo-codes-cnf'			=> 'Font-codes Configuration',
	'poc-sinfo-configuration'		=> 'Configuration',
	'poc-sinfo-connection'			=> 'Connection',
	'poc-sinfo-db-stats-limited'		=> 'Statistics limitations',
	'poc-sinfo-db-stats-per-try'		=> 'Updates per page refresh',
	'poc-sinfo-db-stats-timelimit'		=> 'Statistics storage time limit',
	'poc-sinfo-db-tablename-ccounts'	=> 'Usage counts',
	'poc-sinfo-db-tablename-flags'		=> 'Flags table',
	'poc-sinfo-db-tablename'		=> 'Main table',
	'poc-sinfo-db-tablenames'		=> 'Table names',
	'poc-sinfo-db-tablename-texts'		=> 'Pages involved',
	'poc-sinfo-description'			=> 'Description',
	'poc-sinfo-enable-uploads'		=> 'Uploads',
	'poc-sinfo-extension-information'	=> 'Extension Information',
	'poc-sinfo-file-deleted'		=> 'The file was successfully deleted',
	'poc-sinfo-general'			=> 'General',
	'poc-sinfo-information'			=> 'Information',
	'poc-sinfo-installation-directory'	=> 'Installation Directory',
        'poc-sinfo-internal-css'		=> 'Internal stylesheet',
	'poc-sinfo-lang'			=> 'Language',
	'poc-sinfo-links'			=> 'Links',
	'poc-sinfo-miscellaneous'		=> 'Miscellaneous',
	'poc-sinfo-name'			=> 'Name',
	'poc-sinfo-page'			=> 'Page',
	'poc-sinfo-path'			=> 'Path',
	'poc-sinfo-pieceofcode-desc'		=> 'PieceOfCode special page. Visit [[Special:PieceOfCode]].',
	'poc-sinfo-revision'			=> 'Revision',
	'poc-sinfo-show-binarypaths'		=> 'Show binary paths',
	'poc-sinfo-show-flags'			=> 'Enabled Information',
	'poc-sinfo-show-installdir'		=> 'Show installation directory',
	'poc-sinfo-show-svnpasswords'		=> 'Show passwords',
	'poc-sinfo-show-svnusernames'		=> 'Show usernames',
	'poc-sinfo-show-tablenames'		=> 'Show tablenames',
	'poc-sinfo-show-updaloaddirs'		=> 'Show upload directories',
	'poc-sinfo-statistics'			=> 'Statistics',
	'poc-sinfo-stat-pages'			=> 'Pages per code',
	'poc-sinfo-stat'			=> 'Statistics',
	'poc-sinfo-stored-codes-code'		=> 'Code',
	'poc-sinfo-stored-codes-conn'		=> 'Connection',
	'poc-sinfo-stored-codes-count'		=> 'Count',
	'poc-sinfo-stored-codes-date'		=> 'Date',
	'poc-sinfo-stored-codes-lang'		=> 'Language',
	'poc-sinfo-stored-codes-path'		=> 'Path',
	'poc-sinfo-stored-codes-rev'		=> 'Revision',
	'poc-sinfo-stored-codes'		=> 'Stored Codes',
	'poc-sinfo-stored-codes-user'		=> 'User',
	'poc-sinfo-svn-connections'		=> 'SVN Connections',
	'poc-sinfo-svnconn-password'		=> 'Password',
	'poc-sinfo-svnconn-url'			=> 'URL',
	'poc-sinfo-svnconn-username'		=> 'Username',
	'poc-sinfo-svn-date'			=> 'Last changed date',
	'poc-sinfo-svn-path'			=> 'SVN binary path',
	'poc-sinfo-svn-revision'		=> 'Last changed revision',
	'poc-sinfo-svn'				=> 'Subversion',
	'poc-sinfo-upload-directory'		=> 'Uploads directory',
	'poc-sinfo-url'				=> 'URL',
	'poc-sinfo-usage'			=> 'Usage',
	'poc-sinfo-user'			=> 'User',
	'poc-sinfo-version'			=> 'Version',
);
$messages['es'] = array(
	'pieceofcode'		=> 'PieceOfCode',
	'poc-anonymous'		=> 'anónimo',
	'poc-back'		=> 'regresar',
	'poc-cancel'		=> 'cancelar',
	'poc-delete'		=> 'borrar',
	'poc-disabled'		=> 'deshabilitado',
	'poc-enabled'		=> 'habilitado',
	'poc-none'		=> 'ninguno',
	'poc-no'		=> 'no',
	'poc-not-present'	=> 'ausente',
	'poc-open'		=> 'abrir',
	'poc-pieceofcode-desc'	=> 'Esta extensión permite conectar varios repositorios SVN, importar fuentes desde ellos y pegar porciones de esos fuentes dentro de los artículos.<br/>Provee las etiquetas <tt>&lt;pieceofcode&gt;</tt> y <tt>&lt;/pieceofcode&gt;</tt>.<sup>[[Special:PieceOfCode|más]]</sup>',
	'poc-present'		=> 'presente',
	'poc-seconds'		=> 'segs',
	'poc-send'		=> 'enviar',
	'poc-view-all'		=> 'Ver todos',
	'poc-yes'		=> 'sí',

	'poc-errmsg-empty-tcode'	=> 'No se permiten archivos sin extensión',
	'poc-errmsg-forbidden-tcode'	=> 'Tipo de código fuente no permitido (extensión: *.$1)',
	'poc-errmsg-invalid-connection'	=> 'Conexión inválida',
	'poc-errmsg-large-highlight'	=> 'Coloreado específico deshabilitado. El código supera los $1 bytes',
	'poc-errmsg-large-showall'	=> 'Previsualización sin formatos. El código supera los $1 bytes',
	'poc-errmsg-large-show'		=> 'Previsualización truncada. El código super los $1 bytes',
	'poc-errmsg-no-connection'	=> 'No se especificó la conexión',
	'poc-errmsg-no-fileinfo'	=> 'No se puede obtener la información del archivo ($1>$2:$3)',
	'poc-errmsg-no-insert'		=> 'No se puede realizar el INSERT en la base de datos',
	'poc-errmsg-no-svn-file'	=> 'No se puede obtener el archivo de SVN ($1>$2:$3)',
	'poc-errmsg-no-upload-rights'	=> 'El usuario actual no tiene pemisos de subida',
	'poc-errmsg-only-admin'		=> 'Su usuario no posee los pivilegios suficientes para realizar esta operación, sólo un administrador de sistema puede hacerlo',
	'poc-errmsg-query-no-delete'	=> 'No es posible borrar en la base de datos',
	'poc-errmsg-query-no-result'	=> 'La consulta no retornó filas',
	'poc-errmsg-remove-file'	=> 'No es posible elimiar el archivo \'$1\'',
	'poc-errmsg-stats-disabled'	=> 'Las estadísticas está deshabilitadas',
	'poc-errmsg-stylecode-extension'=> 'La extensión <a href="http://www.mediawiki.org/wiki/Extension:SyntaxHighlight">SyntaxHighlight</a> es necesaria para motrar los fuentes correctamente',
	'poc-errmsg-svn-file-exist'	=> 'Este archivo ya se encuentra presente en el sistema (ruta: \'$1\')',
	'poc-errmsg-svn-no-file'	=> 'El archivo no existe (ruta: \'$1\')',
	'poc-errmsg-unknown-dbtype'	=> 'Tipo de base de datos \'$1\' desconocido',
	'poc-errmsg-unknown-tcode'	=> 'Tipo de código fuente desconocido (extensión: *.$1)',

	'poc-sinfo-about-to-delete'		=> 'Está a punto de eliminar un archivo:<ul><li><b>conexión</b>: $1</li><li><b>ruta</b>: $2</li><li><b>revisión</b>: $3</li><li><b>languaje</b>: $4</li></ul>¿Está seguro?',
	'poc-sinfo-author'			=> 'Autor',
	'poc-sinfo-cnf-empty-exts'		=> 'Permitir archivos sin extensión',
	'poc-sinfo-cnf-forbidden-exts'		=> 'Extensiones Prohibidas',
	'poc-sinfo-cnf-maxhighlight'		=> 'Límite para el resaltado',
	'poc-sinfo-cnf-maxshowing'		=> 'Límite para la muestra',
	'poc-sinfo-cnf-types-and-exts'		=> 'Estilos y Extensiones',
	'poc-sinfo-codes-cnf'			=> 'Configuración de Códigos Fuente',
	'poc-sinfo-configuration'		=> 'Configuración',
	'poc-sinfo-connection'			=> 'Conexión',
	'poc-sinfo-db-stats-limited'		=> 'Limitaciones de estadísticas',
	'poc-sinfo-db-stats-per-try'		=> 'Actualizaciones por refresco de página',
	'poc-sinfo-db-stats-timelimit'		=> 'Límite de tiempo de almacenamiento',
	'poc-sinfo-db-tablename-ccounts'	=> 'Conteo de usos',
	'poc-sinfo-db-tablename-flags'		=> 'Tabla de parámetros',
	'poc-sinfo-db-tablenames'		=> 'Tablas',
	'poc-sinfo-db-tablename'		=> 'Tabla principal',
	'poc-sinfo-db-tablename-texts'		=> 'Páginas involucradas',
	'poc-sinfo-description'			=> 'Descripción',
	'poc-sinfo-enable-uploads'		=> 'Subidas',
	'poc-sinfo-extension-information'	=> 'Información de la Extensión',
	'poc-sinfo-file-deleted'		=> 'El archivo fue borrado con éxito',
	'poc-sinfo-general'			=> 'General',
	'poc-sinfo-information'			=> 'Información',
	'poc-sinfo-installation-directory'	=> 'Directorio de Instalación',
        'poc-sinfo-internal-css'		=> 'Hoja de estilo interna',
	'poc-sinfo-lang'			=> 'Lenguaje',
	'poc-sinfo-links'			=> 'Enlaces',
	'poc-sinfo-miscellaneous'		=> 'Misceláneo',
	'poc-sinfo-name'			=> 'Nombre',
	'poc-sinfo-page'			=> 'Página',
	'poc-sinfo-path'			=> 'Ruta',
	'poc-sinfo-pieceofcode-desc'		=> 'Página especial de PieceOfCode. Visite [[Special:PieceOfCode]].',
	'poc-sinfo-revision'			=> 'Revisión',
	'poc-sinfo-show-binarypaths'		=> 'Mostrar rutas de binarios',
	'poc-sinfo-show-flags'			=> 'Información habilitada',
	'poc-sinfo-show-installdir'		=> 'Motrar directorio de instalación',
	'poc-sinfo-show-svnpasswords'		=> 'Mostrar contraseñas',
	'poc-sinfo-show-svnusernames'		=> 'Mostrar usuarios',
	'poc-sinfo-show-tablenames'		=> 'Mostrar nombre de tablas',
	'poc-sinfo-show-updaloaddirs'		=> 'Mostrar directorios de subida',
	'poc-sinfo-stat'			=> 'Estadísticas',
	'poc-sinfo-statistics'			=> 'Estadísticas',
	'poc-sinfo-stat-pages'			=> 'Páginas por código',
	'poc-sinfo-stored-codes-code'		=> 'Código',
	'poc-sinfo-stored-codes-conn'		=> 'Conexión',
	'poc-sinfo-stored-codes-count'		=> 'Usos',
	'poc-sinfo-stored-codes-date'		=> 'Fecha',
	'poc-sinfo-stored-codes'		=> 'Fuentes Almacenados',
	'poc-sinfo-stored-codes-lang'		=> 'Lenguaje',
	'poc-sinfo-stored-codes-path'		=> 'Ruta',
	'poc-sinfo-stored-codes-rev'		=> 'Revisión',
	'poc-sinfo-stored-codes-user'		=> 'Usuario',
	'poc-sinfo-svn-connections'		=> 'Conexiones a SVN',
	'poc-sinfo-svnconn-password'		=> 'Contraseña',
	'poc-sinfo-svnconn-url'			=> 'URL',
	'poc-sinfo-svnconn-username'		=> 'Usuario',
	'poc-sinfo-svn-date'			=> 'Última fecha de cambio',
	'poc-sinfo-svn-path'			=> 'Ruta del binario de SVN',
	'poc-sinfo-svn-revision'		=> 'Última número de revisión',
	'poc-sinfo-svn'				=> 'Subversion',
	'poc-sinfo-upload-directory'		=> 'Directorio de subida',
	'poc-sinfo-url'				=> 'URL',
	'poc-sinfo-usage'			=> 'Uso',
	'poc-sinfo-user'			=> 'Usuario',
	'poc-sinfo-version'			=> 'Versión',
);

?>