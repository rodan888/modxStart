<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1466773018,
    'editedby' => 1,
    'editedon' => 1466775701,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!doctype html>
<html lang="en">
    <head>
    <base href="http://modxstart/" />
    <meta charset="UTF-8" />
    
    <title>Главная - My Site</title>
    
    <meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="design/img/favicon.png" type="image/x-icon">

	<link rel="stylesheet" href="design/css/vendor.min.css">
	<link rel="stylesheet" href="design/css/header.min.css">
	<link rel="stylesheet" href="design/css/main.min.css">
</head>
<body>
    <header>
        <h1>My Site</h1>
    </header>

    <footer>
	    [[$FOOTER]]
	</footer>
	    <script src="design/js/jquery-2.2.0.min.js"></script>
<script src="design/js/plagin.min.js"></script>
<script src="design/js/common.min.js"></script> 
</body>
</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$HEAD]]' => '<head>
    <base href="http://modxstart/" />
    <meta charset="UTF-8" />
    
    <title>Главная - My Site</title>
    
    <meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="design/img/favicon.png" type="image/x-icon">

	<link rel="stylesheet" href="design/css/vendor.min.css">
	<link rel="stylesheet" href="design/css/header.min.css">
	<link rel="stylesheet" href="design/css/main.min.css">
</head>',
    '[[$HEADER]]' => '<h1>My Site</h1>',
    '[[$FOOTER]]' => NULL,
    '[[$SCRIPTS]]' => '<script src="design/js/jquery-2.2.0.min.js"></script>
<script src="design/js/plagin.min.js"></script>
<script src="design/js/common.min.js"></script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'HEAD' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'HEAD',
          'description' => 'Chunk',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<head>
    <base href="[[++site_url]]" />
    <meta charset="[[++modx_charset]]" />
    
    <title>[[*pagetitle]] - [[++site_name]]</title>
    
    <meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="design/img/favicon.png" type="image/x-icon">

	<link rel="stylesheet" href="design/css/vendor.min.css">
	<link rel="stylesheet" href="design/css/header.min.css">
	<link rel="stylesheet" href="design/css/main.min.css">
</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>
    <base href="[[++site_url]]" />
    <meta charset="[[++modx_charset]]" />
    
    <title>[[*pagetitle]] - [[++site_name]]</title>
    
    <meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="design/img/favicon.png" type="image/x-icon">

	<link rel="stylesheet" href="design/css/vendor.min.css">
	<link rel="stylesheet" href="design/css/header.min.css">
	<link rel="stylesheet" href="design/css/main.min.css">
</head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'HEADER' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'HEADER',
          'description' => 'Chunk',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<h1>[[++site_name]]</h1>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<h1>[[++site_name]]</h1>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'FOOTER' => 
      array (
        'fields' => 
        array (
          'id' => 32,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FOOTER',
          'description' => 'Chunk',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => NULL,
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => NULL,
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'SCRIPTS' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SCRIPTS',
          'description' => 'Chunk',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<script src="design/js/jquery-2.2.0.min.js"></script>
<script src="design/js/plagin.min.js"></script>
<script src="design/js/common.min.js"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script src="design/js/jquery-2.2.0.min.js"></script>
<script src="design/js/plagin.min.js"></script>
<script src="design/js/common.min.js"></script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);