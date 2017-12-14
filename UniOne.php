<?php

namespace omgdef\yii\unisender;

use omgdef\unisender\UniOneWrapper;

class UniOne extends UniSender
{
    /**
     * @inheritdoc
     */
    public function __construct($config = [])
    {
        $this->obj = new UniOneWrapper();

        foreach ($config as $name => $value) {
            $this->obj->$name = $value;
        }

        $this->init();
    }
}
