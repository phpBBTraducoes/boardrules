<?php
/**
*
* Board Rules extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by null2 and update by eunaumtenhoid (c) 2017 [ver 2.1.1] (https://github.com/phpBBTraducoes)
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// Settings page
	'ACP_BOARDRULES'						=> 'Regras do Fórum',
	'ACP_BOARDRULES_SETTINGS'				=> 'Configurar regras',
	'ACP_BOARDRULES_SETTINGS_EXPLAIN'		=> 'Configure aqui as definições globais das regras do fórum.',
	'ACP_BOARDRULES_ENABLE'					=> 'Ativar regras',
	'ACP_BOARDRULES_HEADER_LINK'			=> 'Mostrar link no cabeçalho',
	'ACP_BOARDRULES_FONT_ICON'				=> 'Link do ícone das regras',
	'ACP_BOARDRULES_FONT_ICON_EXPLAIN'		=> 'Digite o nome de um ícone de <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Font Awesome</a> para usar no link de regras no cabeçalho. Deixe este campo em branco para nenhum ícone de regras.',
	'ACP_BOARDRULES_FONT_ICON_INVALID'		=> 'O link do ícone de regras continha caracteres inválidos.',
	'ACP_BOARDRULES_AT_REGISTRATION'		=> 'Exigir aceitação das regras no momento do registo',
	'ACP_BOARDRULES_AT_REGISTRATION_EXPLAIN'=> 'Acrescenta as regras do fórum às "Condições de utilização", permitindo a sua leitura e obrigando a sua aceitação antes do registo.',
	'ACP_BOARDRULES_NOTIFY'					=> 'Notificar usuários',
	'ACP_BOARDRULES_NOTIFY_EXPLAIN'			=> 'Enviar uma notificação a todos os usuários registrados que as regras da comunidade foram atualizadas. (Esta ação pode demorar alguns segundos para ser concluída em fóruns com muitos membros.)',
	'ACP_BOARDRULES_NOTIFY_CONFIRM'			=> 'Tem certeza que deseja enviar notificações a todos os usuários?',
	'ACP_BOARDRULES_SETTINGS_CHANGED'		=> 'A configuração das regras do fórum foi alterada.',

	// Manage page
	'ACP_BOARDRULES_MANAGE'					=> 'Gerenciar regras',
	'ACP_BOARDRULES_MANAGE_EXPLAIN'			=> 'Nesta página adicione, edite, apage e reordene as categorias e regras. A categoria é um conjunto de regras inter-relacionadas. Cada categoria pode ter um número ilimitado de regras.',
	'ACP_BOARDRULES_CATEGORY'				=> 'Categoria de regras',
	'ACP_BOARDRULES_RULE'					=> 'Regra',
	'ACP_BOARDRULES_SELECT_LANGUAGE'		=> 'Escolha um idioma',
	'ACP_BOARDRULES_CREATE_RULE'			=> 'Criar regra',
	'ACP_BOARDRULES_CREATE_RULE_EXPLAIN'	=> 'Através do formulário abaixo pode-se criar uma nova regra que será mostrada aos usuários.',
	'ACP_BOARDRULES_EDIT_RULE'				=> 'Editar regra',
	'ACP_BOARDRULES_EDIT_RULE_EXPLAIN'		=> 'Através do formulário abaixo pode-se atualizar uma regra que será mostrada aos usuários.',
	'ACP_RULE_SETTINGS'						=> 'Configurar regra',
	'ACP_RULE_PARENT'						=> 'Regra pai',
	'ACP_RULE_NO_PARENT'					=> 'Nenhum pai',
	'ACP_RULE_TITLE'						=> 'Título da regra',
	'ACP_RULE_TITLE_EXPLAIN'				=> 'Os títulos das regras são exibidos na página de regras apenas para categorias de regras. Títulos das regras também são usados para identificar as regras na gestão do ACP.',
	'ACP_RULE_ANCHOR'						=> 'Regra âncora',
	'ACP_RULE_ANCHOR_EXPLAIN'				=> 'Âncoras de regras são opcionais e usadas como pontos de ligação de ancoragem na página regras. Devem ser URLs amigáveis (não podem conter espaços ou caracteres especiais), devem começar com uma letra e devem ser exclusivos.',
	'ACP_RULE_MESSAGE'						=> 'Mensagem da regra',
	'ACP_RULE_MESSAGE_EXPLAIN'				=> 'A mensagem da regra é exibida na página de regra para cada regra (categorias não exibem mensagens das regras).',
	'ACP_RULE_MESSAGE_DISABLED'				=> 'Esta é uma categoria que contém regras, o editor mensagem foi desativado.',
	'ACP_ADD_RULE'							=> 'Criar nova regra',
	'ACP_DELETE_RULE_CONFIRM'				=> array(
		0 => 'Tem certeza que deseja remover esta regra?',
		1 => 'Tem certeza que deseja remover esta categoria de regra?<br />Aviso: Removendo um categoria de regra irá remover todas as regras contidas dentro dela.',
	),
	'ACP_RULE_ADDED'						=> 'Regra criada com sucesso.',
	'ACP_RULE_DELETED'						=> 'Regra removida com sucesso.',
	'ACP_RULE_EDITED'						=> 'Regra editada com sucesso.',
	'ACP_RULE_TITLE_EMPTY'					=> 'Dê um titulo à regra.',

	// Nested set exception messages (only appears in PHP error logging)
	// Translators: Feel free to not translate these language strings
	'RULES_NESTEDSET_LOCK_FAILED_ACQUIRE'	=> 'Falha ao tentar bloquear a tabela. Outro processo deve estar bloqueando-a. Bloqueios são forçadamente liberados após uma hora.',
	'RULES_NESTEDSET_INVALID_ITEM'			=> 'A regra solicitada não existe.',
	'RULES_NESTEDSET_INVALID_PARENT'		=> 'A regra solicitada não tem um item pai.',
));
