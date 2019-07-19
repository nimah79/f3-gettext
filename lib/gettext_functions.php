<?php

/**
 *  This file is a part of Gettext for the PHP Fat-Free Framework
 *
 *  The contents of this file are subject to the terms of the GNU General
 *  Public License Version 3.0. You may not use this file except in
 *  compliance with the license. Any of the license terms and conditions
 *  can be waived if you get permission from the copyright holder.
 *
 *  Copyright (c) 2019 ~ NimaH79
 *  Nima HeydariNasab <nima.heydari79@yahoo.com>
 *
 *  @version: 1.0.0
 *  @date: 18.07.2019
 *  @since: 18.07.2019
 *
 **/

/**
 * Returns the translation of a string.
 *
 * @param string $original
 *
 * @return string
 */

function __($original)
{

    $f3 = \Base::instance();

    $entries = $f3->get('GETTEXT.entries');

    $text = isset($entries[$original]) ? $entries[$original] : $original;

    if (func_num_args() === 1) {
        return $text;
    }

    $args = array_slice(func_get_args(), 1);

    if (is_array($text) && isset($args[0])) {
        $n = $args[0];
        $i = eval('return '.str_replace('n', '$n', $f3->get('GETTEXT.plural_form')).';');
        return is_array($args[0]) ? strtr($text[$i], $args[0]) : vsprintf($text[$i], $args);
    }

    return is_array($args[0]) ? strtr($text, $args[0]) : vsprintf($text, $args);
}
