<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;

Encore\Admin\Form::forget(['map', 'editor']);
Form::extend('editor', \App\Admin\Extensions\Form\WangEditor::class);


app('view')->prependNamespace('admin', resource_path('views/admin'));

Admin::navbar(function (\Encore\Admin\Widgets\Navbar $navbar) {

    $navbar->left(new \App\Admin\Extensions\Nav\SearchBar());

    $navbar->right(new \App\Admin\Extensions\Nav\Links());
});