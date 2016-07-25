<?php
/**
 * XMPP Library
 *
 * Copyright (C) 2016, Some right reserved.
 *
 * @author Kacper "Kadet" Donat <kacper@kadet.net>
 *
 * Contact with author:
 * Xmpp: me@kadet.net
 * E-mail: contact@kadet.net
 *
 * From Kadet with love.
 */

namespace Kadet\Xmpp\Utils\helper;

/**
 * Returns exception friendly type of value.
 *
 * @param $value
 * @return string
 */
function typeof($value) : string
{
    if(is_object($value)) {
        return "object of type ".get_class($value);
    } elseif(is_resource($value)) {
        return get_resource_type($value).' resource';
    } else {
        return gettype($value);
    }
}

function partial(callable $callable, $argument, int $position = 0) : callable
{
    return function(...$arguments) use ($callable, $argument, $position) {
        $arguments = array_merge(
            array_slice($arguments, 0, $position),
            [ $argument ],
            array_slice($arguments, $position)
        );

        return $callable(...$arguments);
    };
}
