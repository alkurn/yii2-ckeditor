<?php

/**
 *
 * basic preset returns the basic toolbar configuration set for CKEditor.
 *
 * @author Ganesh Alkurn <ganesh.alkurn@gmail.com>
 * @link http://www.alkurn.info/
 */
return [
    'height' => 200,
    'toolbarGroups' => [
        ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
        ['name' => 'colors'],
    ],
    'removeButtons' => 'Subscript,Superscript,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe',
    'removePlugins' => 'elementspath',
    'resize_enabled' => false
];
