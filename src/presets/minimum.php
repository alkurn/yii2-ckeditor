<?php

/**
 *
 * basic preset returns the basic toolbar configuration set for CKEditor.
 *
 * @author Ganesh Alkurn <ganesh.alkurn@gmail.com>
 * @link http://www.alkurn.info/
 */
return [
    'height' => 300,
    'toolbarGroups' => [
        ['name' => 'basicstyles', 'groups' => ['mode', 'basicstyles', 'cleanup']],
        ['name' => 'paragraph', 'groups' => ['templates', 'list', 'indent', 'align', 'links']],
        ['name' => 'colors'],
    ],
    'removeButtons' => 'Subscript,Superscript,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Anchor',
    'resize_enabled' => false
];
