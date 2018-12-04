<?php
/**
 * Created by solly [18.05.16 5:57]
 */

namespace cinghie\iconpicker\assets;

class IoniconIconset extends IconpickerAsset
{
    public function init()
    {
        $this->js[] = $this->iconsetResolver('ionicon');
        parent::init();
    }
}
