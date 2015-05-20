<?php

namespace omgdef\yii\unisender;

use yii\base\Component;
use omgdef\unisender\UniSenderWrapper;

class UniSender extends Component
{
    private $obj;


    /**
     * @inheritdoc
     */
    public function __construct($config = [])
    {
        $this->obj = new UniSenderWrapper();
        parent::__construct($config = []);
    }

    /**
     * @inheritdoc
     */
    public function __get($name)
    {
        if (property_exists($this->obj, $name)) {
            return $this->obj->$name;
        }
        return parent::__get($name);
    }

    /**
     * @inheritdoc
     */
    public function __set($name, $value)
    {
        if (property_exists($this->obj, $name)) {
            $this->obj->$name = $value;
            return;
        }
        parent::__set($name, $value);
    }

    /**
     * @inheritdoc
     */
    public function __isset($name)
    {
        if (property_exists($this->obj, $name)) {
            return $this->obj->$name !== null;
        }
        return parent::__isset($name);
    }

    /**
     * @inheritdoc
     */
    public function __unset($name)
    {
        if (property_exists($this->obj, $name)) {
            $this->obj->$name = null;
            return;
        }
        parent::__unset($name);
    }

    /**
     * @inheritdoc
     */
    public function __call($name, $params)
    {
        if (method_exists($this->obj, $name)) {
            return call_user_func_array([$this->obj, $name], $params);
        }
        return parent::__call($name, $params);
    }

    /**
     * @inheritdoc
     */
    public function hasProperty($name, $checkVars = true, $checkBehaviors = true)
    {
        if (property_exists($this->obj, $name)) {
            return true;
        }
        return parent::hasProperty($name, $checkVars, $checkBehaviors);
    }

    /**
     * @inheritdoc
     */
    public function canGetProperty($name, $checkVars = true, $checkBehaviors = true)
    {
        if (property_exists($this->obj, $name)) {
            return true;
        }
        return parent::canGetProperty($name, $checkVars, $checkBehaviors);
    }

    /**
     * @inheritdoc
     */
    public function canSetProperty($name, $checkVars = true, $checkBehaviors = true)
    {
        if (property_exists($this->obj, $name)) {
            return true;
        }
        return parent::canSetProperty($name, $checkVars, $checkBehaviors);
    }

    /**
     * @inheritdoc
     */
    public function hasMethod($name, $checkBehaviors = true)
    {
        if (method_exists($this->obj, $name)) {
            return true;
        }
        return parent::hasMethod($name, $checkBehaviors);
    }
}
