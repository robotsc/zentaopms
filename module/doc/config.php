<?php
global $lang, $app;

$config->doc = new stdclass();
$config->doc->createlib = new stdclass();
$config->doc->editlib   = new stdclass();
$config->doc->create    = new stdclass();
$config->doc->edit      = new stdclass();
$config->doc->showfiles = new stdclass();

$config->doc->createlib->requiredFields = 'name';
$config->doc->editlib->requiredFields   = 'name';
$config->doc->create->requiredFields    = 'lib,title';
$config->doc->edit->requiredFields      = 'lib,title';

$config->doc->customObjectLibs  = 'files,customFiles';
$config->doc->notArticleType    = '';
$config->doc->officeTypes       = 'word,ppt,excel,attachment';
$config->doc->textTypes         = 'html,markdown,text';
$config->doc->docTypes          = 'text,word,ppt,excel,url,article,attachment';
$config->doc->saveDraftInterval = '60';

$config->doc->custom = new stdclass();
$config->doc->custom->objectLibs = $config->doc->customObjectLibs;
$config->doc->custom->showLibs   = 'zero,children';

$config->doc->editor = new stdclass();
$config->doc->editor->create     = array('id' => 'content', 'tools' => 'docTools');
$config->doc->editor->edit       = array('id' => 'content', 'tools' => 'docTools');
$config->doc->editor->view       = array('id' => 'comment,lastComment', 'tools' => 'simple');
$config->doc->editor->objectlibs = array('id' => 'comment,lastComment', 'tools' => 'simple');

$config->doc->markdown = new stdclass();
$config->doc->markdown->create = array('id' => 'contentMarkdown', 'tools' => 'withchange');

$config->doc->iconList['html']       = 'rich-text';
$config->doc->iconList['markdown']   = 'markdown';
$config->doc->iconList['url']        = 'text-link';
$config->doc->iconList['text']       = 'wiki-file';
$config->doc->iconList['template']   = 'wiki-file';
$config->doc->iconList['word']       = 'word';
$config->doc->iconList['ppt']        = 'ppt';
$config->doc->iconList['excel']      = 'excel';
$config->doc->iconList['attachment'] = 'attachment';

$config->doc->objectIconList['product']   = 'icon-product';
$config->doc->objectIconList['project']   = 'icon-project';
$config->doc->objectIconList['execution'] = 'icon-run';
$config->doc->objectIconList['mine']      = 'icon-contacts';
$config->doc->objectIconList['custom']    = 'icon-groups';

$config->doc->spaceMethod['mine']      = 'myspace';
$config->doc->spaceMethod['view']      = 'myspace';
$config->doc->spaceMethod['collect']   = 'myspace';
$config->doc->spaceMethod['createdby'] = 'myspace';
$config->doc->spaceMethod['editedby']  = 'myspace';
$config->doc->spaceMethod['product']   = 'productspace';
$config->doc->spaceMethod['project']   = 'projectspace';
$config->doc->spaceMethod['execution'] = 'projectspace';
$config->doc->spaceMethod['custom']    = 'teamspace';
$config->doc->spaceMethod['custom']    = 'teamspace';

$config->doc->search['module']               = 'doc';
$config->doc->search['fields']['title']      = $lang->doc->title;
$config->doc->search['fields']['id']         = $lang->doc->id;
$config->doc->search['fields']['product']    = $lang->doc->product;
if($app->rawMethod == 'contribute') $config->doc->search['fields']['project'] = $lang->doc->project;
$config->doc->search['fields']['execution']  = $lang->doc->execution;
$config->doc->search['fields']['lib']        = $lang->doc->lib;
$config->doc->search['fields']['status']     = $lang->doc->status;
$config->doc->search['fields']['module']     = $lang->doc->module;
$config->doc->search['fields']['addedBy']    = $lang->doc->addedByAB;
$config->doc->search['fields']['addedDate']  = $lang->doc->addedDate;
$config->doc->search['fields']['editedBy']   = $lang->doc->editedBy;
$config->doc->search['fields']['editedDate'] = $lang->doc->editedDate;
$config->doc->search['fields']['keywords']   = $lang->doc->keywords;
$config->doc->search['fields']['version']    = $lang->doc->version;

$config->doc->search['params']['title']      = array('operator' => 'include', 'control' => 'input',  'values' => '');
$config->doc->search['params']['product']    = array('operator' => '=',       'control' => 'select', 'values' => '');
$config->doc->search['params']['lib']        = array('operator' => '=',       'control' => 'select', 'values' => '');
$config->doc->search['params']['status']     = array('operator' => '=',       'control' => 'select', 'values' => $lang->doc->statusList);
$config->doc->search['params']['module']     = array('operator' => 'belong',  'control' => 'select', 'values' => '');
if($app->rawMethod == 'contribute') $config->doc->search['params']['project'] = array('operator' => '=', 'control' => 'select', 'values' => '');
$config->doc->search['params']['execution']  = array('operator' => '=',       'control' => 'select', 'values' => '');
$config->doc->search['params']['addedBy']    = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->doc->search['params']['addedDate']  = array('operator' => '=',       'control' => 'date',  'values' => '');
$config->doc->search['params']['editedBy']   = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->doc->search['params']['editedDate'] = array('operator' => '=',       'control' => 'date',  'values' => '');
$config->doc->search['params']['keywords']   = array('operator' => 'include', 'control' => 'input',  'values' => '');
$config->doc->search['params']['version']    = array('operator' => '=',       'control' => 'input',  'values' => '');

$config->doc->actionList['movedoc']['icon']        = 'folder-move';
$config->doc->actionList['movedoc']['hint']        = $lang->doc->moveDocAction;
$config->doc->actionList['movedoc']['text']        = $lang->doc->moveDocAction;
$config->doc->actionList['movedoc']['url']         = helper::createLink('doc', 'moveDoc', 'docID={id}');
$config->doc->actionList['movedoc']['data-toggle'] = 'modal';
$config->doc->actionList['movedoc']['data-size']   = 'sm';

$config->doc->actionList['edit']['icon']     = 'edit';
$config->doc->actionList['edit']['hint']     = $lang->edit;
$config->doc->actionList['edit']['text']     = $lang->edit;
$config->doc->actionList['edit']['url']      = helper::createLink('doc', 'edit', 'docID={id}');
$config->doc->actionList['edit']['data-app'] = $app->tab;

$config->doc->actionList['delete']['icon']         = 'trash';
$config->doc->actionList['delete']['hint']         = $lang->delete;
$config->doc->actionList['delete']['text']         = $lang->delete;
$config->doc->actionList['delete']['url']          = helper::createLink('doc', 'delete', 'docID={id}');
$config->doc->actionList['delete']['className']    = 'ajax-submit';
$config->doc->actionList['delete']['data-confirm'] = array('message' => $lang->doc->confirmDelete, 'icon' => 'icon-exclamation-sign', 'iconClass' => 'warning-pale rounded-full icon-2x');

$config->doc->showfiles->actionList['download']['icon']   = 'import';
$config->doc->showfiles->actionList['download']['hint']   = $lang->doc->download;
$config->doc->showfiles->actionList['download']['text']   = $lang->doc->download;
$config->doc->showfiles->actionList['download']['url']    = array('module' => 'file', 'method' => 'download', 'params' => 'fileID={id}');
$config->doc->showfiles->actionList['download']['target'] = '_blank';

$config->doc->quickMenu = array();
$config->doc->quickMenu['view']      = array('id' => 1, 'name' => $lang->doc->myView);
$config->doc->quickMenu['createdby'] = array('id' => 2, 'name' => $lang->doc->myCreation);
$config->doc->quickMenu['collect']   = array('id' => 3, 'name' => $lang->doc->myCollection);
$config->doc->quickMenu['editedby']  = array('id' => 4, 'name' => $lang->doc->myEdited);

$config->doc->zentaoList = array();
/*
$config->doc->zentaoList['story'] = array('name' => 'story', 'icon' => 'lightbulb',  'subMenu' => array(), 'priv' => 'storyBrowse');
$config->doc->zentaoList['case']  = array('name' => 'case',  'icon' => 'testcase',   'subMenu' => array(), 'priv' => 'caseBrowse');
$config->doc->zentaoList['bug']   = array('name' => 'bug',   'icon' => 'bug',        'subMenu' => array(), 'priv' => 'bugBrowse');
$config->doc->zentaoList['task']  = array('name' => 'task',  'icon' => 'check-sign', 'module' => 'product', 'method' => 'browse', 'params' => '', 'priv' => 'taskBrowse');
$config->doc->zentaoList['more']  = array('name' => 'more',  'icon' => 'ellipsis-v', 'subMenu' => array());

$config->doc->zentaoList['story']['subMenu'][] = array('name' => 'productStory',   'icon' => 'lightbulb-alt', 'module' => 'product', 'method' => 'browse', 'params' => 'productID=0&branch=all&browseType=&param=0&storyType=story&orderBy=&recTotal=0&recPerPage=20&pageID=1&projectID=0&from=doc');
$config->doc->zentaoList['story']['subMenu'][] = array('name' => 'projectStory',   'icon' => 'project',       'module' => 'product', 'method' => 'browse', 'params' => '');
$config->doc->zentaoList['story']['subMenu'][] = array('name' => 'executionStory', 'icon' => 'run',           'module' => 'product', 'method' => 'browse', 'params' => '');
$config->doc->zentaoList['story']['subMenu'][] = array('name' => 'planStory',      'icon' => 'productplan',   'module' => 'product', 'method' => 'browse', 'params' => '');

$config->doc->zentaoList['case']['subMenu'][] = array('name' => 'productCase', 'icon' => 'lightbulb-alt', 'module' => 'product', 'method' => 'browse', 'params' => '');
$config->doc->zentaoList['case']['subMenu'][] = array('name' => 'caselib',     'icon' => 'usecase',       'module' => 'product', 'method' => 'browse', 'params' => '');

$config->doc->zentaoList['bug']['subMenu'][] = array('name' => 'productBug', 'icon' => 'lightbulb-alt', 'module' => 'product', 'method' => 'browse', 'params' => '');
$config->doc->zentaoList['bug']['subMenu'][] = array('name' => 'planBug',    'icon' => 'productplan',   'module' => 'product', 'method' => 'browse', 'params' => '');

$config->doc->zentaoList['more']['subMenu'][] = array('name' => 'productPlan',    'icon' => 'productplan',   'module' => 'productplan', 'method' => 'browse', 'params' => 'productID=0&branch=&browseType=undone&queryID=0&orderBy=begin_desc&recTotal=0&recPerPage=20&pageID=1&from=doc', 'priv' => 'productplanBrowse');
$config->doc->zentaoList['more']['subMenu'][] = array('name' => 'productRelease', 'icon' => 'send',          'module' => 'product', 'method' => 'browse', 'params' => '', 'priv' => 'releaseBrowse');
$config->doc->zentaoList['more']['subMenu'][] = array('name' => 'ER',             'icon' => 'lightbulb-alt', 'module' => 'product', 'method' => 'browse', 'params' => '', 'priv' => 'storyBrowse');
$config->doc->zentaoList['more']['subMenu'][] = array('name' => 'UR',             'icon' => 'customer',      'module' => 'product', 'method' => 'browse', 'params' => '', 'priv' => 'storyBrowse');

if(in_array($config->edition, array('biz', 'max', 'ipd')))
{
    $config->doc->zentaoList['more']['subMenu'][] = array('name' => 'feedback', 'icon' => 'feedback', 'module' => 'feedback', 'method' => 'admin', 'params' => 'browseType=wait&param=0&orderBy=editedDate_desc,id_desc&recTotal=0&recPerPage=20&pageID=1&from=doc', 'priv' => 'feedbackAdmin');
    $config->doc->zentaoList['more']['subMenu'][] = array('name' => 'ticket',   'icon' => 'support-ticket', 'module' => 'ticket', 'method' => 'browse', 'params' => '', 'priv' => 'ticketBrowse');
}
*/
