<?php
/**
 * This file is part of the context project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Context;

/**
 * Class Context
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Context
 */
interface Context
{
    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get($key);
}
 