<?php
/**
 * @author Ganesh Alkurn <ganesh.alkurn@gmail.com>
 * @link http://www.alkurn.info/
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace alkurn\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorWidgetAsset
 *
 * @author Ganesh Alkurn <ganesh.alkurn@gmail.com>
 * @link http://www.alkurn.info/
 * @package alkurn\ckeditor
 */
class CKEditorWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/alkurn/yii2-ckeditor/src/assets/';

    public $depends = [
        'alkurn\ckeditor\CKEditorAsset'
    ];

    public $js = [
        'alkurn-ckeditor.js'
    ];
}
