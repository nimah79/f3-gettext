<?php

/**
 *  Gettext for the PHP Fat-Free Framework
 *
 *  The contents of this file are subject to the terms of the GNU General
 *  Public License Version 3.0. You may not use this file except in
 *  compliance with the license. Any of the license terms and conditions
 *  can be waived if you get permission from the copyright holder.
 *
 *  Copyright (c) 2019 ~ NimaH79
 *  Nima HeydariNasab <nima.heydari79@yahoo.com>
 *
 *  @version: 1.0.2
 *  @date: 18.07.2019
 *  @since: 18.07.2019
 *
 **/

class Gettext extends Prefab
{

    private $plural_forms = [
        'ach' => '(n > 1)',
        'af' => '(n != 1)',
        'ak' => '(n > 1)',
        'am' => '(n > 1)',
        'an' => '(n != 1)',
        'anp' => '(n != 1)',
        'ar' => '(n==0 ? 0 : n==1 ? 1 : n==2 ? 2 : n%100>=3 && n%100<=10 ? 3 : n%100>=11 ? 4 : 5)',
        'arn' => '(n > 1)',
        'as' => '(n != 1)',
        'ast' => '(n != 1)',
        'ay' => '0',
        'az' => '(n != 1)',
        'be' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
        'bg' => '(n != 1)',
        'bn' => '(n != 1)',
        'bo' => '0',
        'br' => '(n > 1)',
        'brx' => '(n != 1)',
        'bs' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
        'ca' => '(n != 1)',
        'cgg' => '0',
        'cs' => '(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2',
        'csb' => '(n==1) ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2',
        'cy' => '(n==1) ? 0 : (n==2) ? 1 : (n != 8 && n != 11) ? 2 : 3',
        'da' => '(n != 1)',
        'de' => '(n != 1)',
        'doi' => '(n != 1)',
        'dz' => '0',
        'el' => '(n != 1)',
        'en' => '(n != 1)',
        'eo' => '(n != 1)',
        'es' => '(n != 1)',
        'et' => '(n != 1)',
        'eu' => '(n != 1)',
        'fa' => '(n > 1)',
        'ff' => '(n != 1)',
        'fi' => '(n != 1)',
        'fil' => '(n > 1)',
        'fo' => '(n != 1)',
        'fr' => '(n > 1)',
        'fur' => '(n != 1)',
        'fy' => '(n != 1)',
        'ga' => 'n==1 ? 0 : n==2 ? 1 : (n>2 && n<7) ? 2 :(n>6 && n<11) ? 3 : 4',
        'gd' => '(n==1 || n==11) ? 0 : (n==2 || n==12) ? 1 : (n > 2 && n < 20) ? 2 : 3',
        'gl' => '(n != 1)',
        'gu' => '(n != 1)',
        'gun' => '(n > 1)',
        'ha' => '(n != 1)',
        'he' => '(n != 1)',
        'hi' => '(n != 1)',
        'hne' => '(n != 1)',
        'hr' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
        'hu' => '(n != 1)',
        'hy' => '(n != 1)',
        'ia' => '(n != 1)',
        'id' => '0',
        'is' => '(n%10!=1 || n%100==11)',
        'it' => '(n != 1)',
        'ja' => '0',
        'jbo' => '0',
        'jv' => '(n != 0)',
        'ka' => '0',
        'kk' => '(n != 1)',
        'kl' => '(n != 1)',
        'km' => '0',
        'kn' => '(n != 1)',
        'ko' => '0',
        'ku' => '(n != 1)',
        'kw' => '(n==1) ? 0 : (n==2) ? 1 : (n == 3) ? 2 : 3',
        'ky' => '(n != 1)',
        'lb' => '(n != 1)',
        'ln' => '(n > 1)',
        'lo' => '0',
        'lt' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && (n%100<10 || n%100>=20) ? 1 : 2)',
        'lv' => '(n%10==1 && n%100!=11 ? 0 : n != 0 ? 1 : 2)',
        'mai' => '(n != 1)',
        'me' => 'n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2',
        'mfe' => '(n > 1)',
        'mg' => '(n > 1)',
        'mi' => '(n > 1)',
        'ml' => '(n != 1)',
        'mn' => '(n != 1)',
        'mni' => '(n != 1)',
        'mnk' => '(n==0 ? 0 : n==1 ? 1 : 2)',
        'mr' => '(n != 1)',
        'ms' => '0',
        'mt' => '(n==1 ? 0 : n==0 || ( n%100>1 && n%100<11) ? 1 : (n%100>10 && n%100<20 ) ? 2 : 3)',
        'my' => '0',
        'nah' => '(n != 1)',
        'nap' => '(n != 1)',
        'nb' => '(n != 1)',
        'ne' => '(n != 1)',
        'nl' => '(n != 1)',
        'nn' => '(n != 1)',
        'no' => '(n != 1)',
        'nso' => '(n != 1)',
        'oc' => '(n > 1)',
        'or' => '(n != 1)',
        'pa' => '(n != 1)',
        'pap' => '(n != 1)',
        'pl' => '(n==1 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
        'pms' => '(n != 1)',
        'ps' => '(n != 1)',
        'pt' => '(n != 1)',
        'rm' => '(n != 1)',
        'ro' => '(n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2)',
        'ru' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
        'rw' => '(n != 1)',
        'sah' => '0',
        'sat' => '(n != 1)',
        'sco' => '(n != 1)',
        'sd' => '(n != 1)',
        'se' => '(n != 1)',
        'si' => '(n != 1)',
        'sk' => '(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2',
        'sl' => '(n%100==1 ? 0 : n%100==2 ? 1 : n%100==3 || n%100==4 ? 2 : 3)',
        'so' => '(n != 1)',
        'son' => '(n != 1)',
        'sq' => '(n != 1)',
        'sr' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
        'su' => '0',
        'sv' => '(n != 1)',
        'sw' => '(n != 1)',
        'ta' => '(n != 1)',
        'te' => '(n != 1)',
        'tg' => '(n > 1)',
        'th' => '0',
        'ti' => '(n > 1)',
        'tk' => '(n != 1)',
        'tr' => '(n > 1)',
        'tt' => '0',
        'ug' => '0',
        'uk' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
        'ur' => '(n != 1)',
        'uz' => '(n > 1)',
        'vi' => '0',
        'wa' => '(n > 1)',
        'wo' => '0',
        'yo' => '(n != 1)',
        'zh' => '0',
        'zh' => '(n > 1)'
    ];

    public function __construct()
    {
        $f3 = \Base::instance();
        $language = $f3->get('GETTEXT.language');
        if (empty($language)) {
            $language = explode(',', $f3->get('language'))[0];
        }
        $locales_path = $f3->get('GETTEXT.path');
        if (empty($locales_path)) {
            $locales_path = 'locales';
        }
        $base_path = $f3->fixslashes(realpath($f3->fixslashes($_SERVER['DOCUMENT_ROOT'].$f3->get('BASE'))).'/');
        $file_path = $base_path.trim($locales_path, '/').'/'.$language.'.po';
        if (file_exists(!$file_path)) {
            trigger_error('Locale file not found: '.$file_path, E_USER_ERROR);
        }
        $content = $this->parseFile($file_path);
        $f3->set('GETTEXT.entries', $content['entries']);
        $f3->set('GETTEXT.plural_form', $content['plural_form']);
        include_once __DIR__.'/gettext_functions.php';
    }

    public function parseFile($file_path)
    {
        $file = new SplFileObject($file_path);
        $file->seek(PHP_INT_MAX);
        $count = $file->key() + 1;

        $result = [];

        $current_key = '';
        $current_key_plural = '';
        $current_values = [];

        $key_passed = false;

        $is_plural = false;

        $current_index = 0;

        $plural_form = '';
        
        for ($i = 0; $i < $count; $i++) {
            $file->seek($i);
            $line = trim($file->current());
            if (preg_match('/^"(.*?)"$/', $line, $entry)) {
                $entry = $entry[1];
                if (empty($plural_form) && preg_match('/Plural-Forms:.*?plural=(.*?);/', $entry, $form)) {
                    $plural_form = $form[1];
                }
                if ($is_plural) {
                    $current_key_plural .= $entry;
                } elseif ($key_passed) {
                    $current_values[$current_index] = $entry;
                } else {
                    $current_key .= $entry;
                }
                continue;
            }
            if (!preg_match('/^((?<type>msgid_plural|msgid|msgstr)(\[(?<index>\d+)\])?)\s+"(?<value>.*?)"$/', $line, $entry)) {
                continue;
            }
            switch ($entry['type']) {
                case 'msgid':
                    if ($key_passed) {
                        if (!empty($current_key)) {
                            if ($is_plural) {
                                $result[$current_key_plural] = $current_values;
                                $result[$current_key] = $current_values[0];
                            } else {
                                $result[$current_key] = $current_values[0];
                            }
                        }
                        $current_key = $entry['value'];
                        $current_key_plural = '';
                        $current_values = [];
                        $key_passed = false;
                        $is_plural = false;
                    } else {
                        $current_key .= $entry['value'];
                    }
                    break;
                case 'msgid_plural':
                    $is_plural = true;
                    $key_passed = true;
                    $current_key_plural = $entry['value'];
                    break;
                case 'msgstr':
                    $key_passed = true;
                    if (empty($entry['index'])) {
                        $entry['index'] = 0;
                    }
                    $current_index = $entry['index'];
                    $current_values[$current_index] = $entry['value'];
                    break;
            }
        }

        if (empty($plural_form)) {
            $language = explode('_', pathinfo($file_path, PATHINFO_FILENAME))[0];
            $plural_form = isset($this->plural_forms[$language]) ? $this->plural_forms[$language] : '(n != 1)';
        }

        return ['plural_form' => $plural_form, 'entries' => $result];
    }

}
