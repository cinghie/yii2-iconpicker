<?php
/**
 * Created by solly [18.05.16 5:57]
 */

namespace cinghie\iconpicker\assets;

class MaterialdesignIconset extends IconpickerAsset
{
    public function init()
    {
        $this->js[] = $this->iconsetResolver('materialdesign');
        parent::init();
    }
}
