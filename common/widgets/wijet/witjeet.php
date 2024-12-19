<?php

namespace common\widgets\wijet;

use yii\base\Widget;

class witjeet extends Widget
{
public function run()
{
return "  Hi gyus";
}
}

class menu extends \yii\widgets\Menu
{
    public function run()
    {
        return "  Hi salom";
    }
}