<?php
{licenseBlock}

/**
 * Generated using taoDevTools 6.5.0.0
 */
return array(
    'name' => 'taoExample',
    'label' => 'taoexampleextension',
    'description' => 'taoexampleextension to learn structure',
    'license' => 'GPL-2.0',
    'version' => '{version}',
    'author' => 'Open Assessment Technologies SA',
    'requires' => {requires},
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#taoExampleManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#taoExampleManager', array('ext'=>'taoExample')),
    ),
    'install' => array(
    ),
    'uninstall' => array(
    ),
    'routes' => array(
        '/taoExample' => 'oat\\taoExample\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'taoExample/',
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);