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

class TypiconIconset extends IconpickerAsset
{
	/**
	 * @inheritdoc
	 */
    public function init()
    {
        $this->js[] = $this->iconsetResolver('typicon');
        parent::init();
    }
}
