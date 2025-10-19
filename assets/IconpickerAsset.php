<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-menu
 * @forked https://github.com/Insolita/yii2-iconpicker
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-iconpicker
 * @version 3.0.1
 */

namespace cinghie\iconpicker\assets;

use yii\helpers\ArrayHelper;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class IconpickerAsset extends AssetBundle
{
	/** @var string */
    public $sourcePath = '@bower/eliberty-bootstrap-iconpicker';

    /** @var array */
    public $depends = [
	    YiiAsset::class,
    ];

	/**
	 * @inheritdoc
	 */
    public function init()
    {
        parent::init();
        
        $this->css[] = 'bootstrap-iconpicker/css/bootstrap-iconpicker' . (YII_DEBUG ? '' : '.min') . '.css';
        $this->js[] = 'bootstrap-iconpicker/js/bootstrap-iconpicker' . (YII_DEBUG ? '' : '.min') . '.js';
    }

	/**
	 * Helper for register iconset file
	 *
	 * @param $set
	 *
	 * @return string
	 */
    protected function iconsetResolver($set)
    {
        $map = [
            'glyphicon'      => '',
            'fontawesome'    => '-4.7.0',
            'ionicon'        => '-1.5.2',
            'elusiveicon'    => '-2.0.0',
            'mapicon'        => '-2.1.0',
            'materialdesign' => '-1.1.1',
            'octicon'        => '-2.1.2',
            'typicon'        => '-2.0.6',
            'weathericon'    => '-1.2.0',
        ];
        $tail = ArrayHelper::getValue($map, $set, 'glyphicon');

        return 'bootstrap-iconpicker/js/iconset/iconset-' . $set . $tail . (YII_DEBUG ? '' : '.min') . '.js';
    }
}
