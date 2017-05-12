<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use WordPlate\Acf\Acf;

if (!function_exists('acf_checkbox')) {
    /**
     * Get an acf checkbox field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_checkbox(array $settings): array
    {
        return Acf::field('checkbox', $settings);
    }
}

if (!function_exists('acf_email')) {
    /**
     * Get an acf email field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_email(array $settings): array
    {
        return Acf::field('email', $settings);
    }
}

if (!function_exists('acf_field_group')) {
    /**
     * Register an acf field group.
     *
     * @param array $settings
     *
     * @return void|null
     */
    function acf_field_group(array $settings)
    {
        return Acf::group($settings);
    }
}

if (!function_exists('acf_file')) {
    /**
     * Get an acf file field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_file(array $settings): array
    {
        return Acf::field('file', $settings);
    }
}

if (!function_exists('acf_gallery')) {
    /**
     * Get an acf gallery field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_gallery(array $settings): array
    {
        return Acf::field('gallery', $settings);
    }
}

if (!function_exists('acf_number')) {
    /**
     * Get an acf number field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_number(array $settings): array
    {
        return Acf::field('number', $settings);
    }
}

if (!function_exists('acf_image')) {
    /**
     * Get an acf image field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_image(array $settings): array
    {
        return Acf::field('image', $settings);
    }
}

if (!function_exists('acf_hide_on_screen')) {
    /**
     * Get an acf hide_on_screen array.
     *
     * @param array $elements
     *
     * @return array
     */
    function acf_hide_on_screen(array $elements): array
    {
        $array = [];

        foreach ($elements as $i => $element) {
            $array[$i] = $element;
        }

        return $array;
    }
}

if (!function_exists('acf_location')) {
    /**
     * Get an acf location array.
     *
     * @param string $param
     * @param string $operator
     * @param string|null $value
     *
     * @return array
     */
    function acf_location(string $param, string $operator, string $value = null): array
    {
        if (func_num_args() === 2) {
            $value = $operator;
            $operator = '==';
        }

        return compact('param', 'operator', 'value');
    }
}

if (!function_exists('acf_page_link')) {
    /**
     * Get an acf page_link field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_page_link(array $settings): array
    {
        return Acf::field('page_link', $settings);
    }
}

if (!function_exists('acf_password')) {
    /**
     * Get an acf password field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_password(array $settings): array
    {
        return Acf::field('password', $settings);
    }
}

if (!function_exists('acf_post_object')) {
    /**
     * Get an acf post_object field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_post_object(array $settings): array
    {
        return Acf::field('post_object', $settings);
    }
}

if (!function_exists('acf_radio')) {
    /**
     * Get an acf radio field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_radio(array $settings): array
    {
        return Acf::field('radio', $settings);
    }
}

if (!function_exists('acf_relationship')) {
    /**
     * Get an acf relationship field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_relationship(array $settings): array
    {
        return Acf::field('relationship', $settings);
    }
}

if (!function_exists('acf_repeater')) {
    /**
     * Get an acf repeater field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_repeater(array $settings): array
    {
        if (!array_key_exists('sub_fields', $settings)) {
            throw new InvalidArgumentException('Missing field setting key [sub_fields].');
        }

        return Acf::field('repeater', $settings);
    }
}

if (!function_exists('acf_select')) {
    /**
     * Get an acf select field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_select(array $settings): array
    {
        return Acf::field('select', $settings);
    }
}

if (!function_exists('acf_taxonomy')) {
    /**
     * Get an acf taxonomy field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_taxonomy(array $settings): array
    {
        return Acf::field('taxonomy', $settings);
    }
}

if (!function_exists('acf_text')) {
    /**
     * Get an acf text field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_text(array $settings): array
    {
        return Acf::field('text', $settings);
    }
}

if (!function_exists('acf_textarea')) {
    /**
     * Get an acf textarea field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_textarea(array $settings): array
    {
        return Acf::field('textarea', $settings);
    }
}

if (!function_exists('acf_true_false')) {
    /**
     * Get an acf true_false field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_true_false(array $settings): array
    {
        return Acf::field('true_false', $settings);
    }
}

if (!function_exists('acf_url')) {
    /**
     * Get an acf url field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_url(array $settings): array
    {
        return Acf::field('url', $settings);
    }
}

if (!function_exists('acf_user')) {
    /**
     * Get an acf user field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_user(array $settings): array
    {
        return Acf::field('user', $settings);
    }
}

if (!function_exists('acf_wysiwyg')) {
    /**
     * Get an acf wysiwyg field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_wysiwyg(array $settings): array
    {
        return Acf::field('wysiwyg', $settings);
    }
}

if (!function_exists('acf_oembed')) {
    /**
     * Get an acf oembed field settings array.
     *
     * @param array $settings
     *
     * @return array
     */
    function acf_oembed(array $settings): array
    {
        return Acf::field('oembed', $settings);
    }
}
