<?php
/**
 *
 * full preset returns the full toolbar configuration set for CKEditor.
 *
 * @author Ganesh Alkurn <ganesh.alkurn@gmail.com>
 * @link http://www.alkurn.info/
 */
return [
    'height' => 400,
    'toolbarGroups' => [
        ['name' => 'document', 'groups' => ['mode', 'document', 'doctools']],
        ['name' => 'clipboard', 'groups' => ['clipboard', 'undo']],
        ['name' => 'editing', 'groups' => [ 'find', 'selection', 'spellchecker']],
        ['name' => 'forms'],
        '/',
        ['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors','cleanup']],
        ['name' => 'paragraph', 'groups' => [ 'list', 'indent', 'blocks', 'align', 'bidi' ]],
        ['name' => 'links'],
        ['name' => 'insert'],
        '/',
        ['name' => 'styles'],
        ['name' => 'blocks'],
        ['name' => 'colors'],
        ['name' => 'tools'],
        ['name' => 'others'],
    ],
];
