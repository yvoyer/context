<?php
/**
 * This file is part of the context project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Context;

/**
 * Class ArrayContext
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Context
 */
class ArrayContext implements Context
{
    /**
     * @var array
     */
    private $values = array();

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function set($key, $value)
    {
        $this->values[$key] = $value;
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get($key)
    {
        if (false === isset($this->values[$key])) {
            return null;
        }

        return $this->values[$key];
    }
}
 