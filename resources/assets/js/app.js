
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./vue');
window.Vue = require('vue');

require('jquery-mask-plugin');

/*
* Form handler
*/
$('.callbackForm')
    .on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this).parent();

        var data = $(this).serialize(),
            href = $(this).attr('action');

        /* */
        var overlay = $('body').find('.section-request__form-overlay')

        /* */
        $(overlay).show();

        /* clear all dom errors */
        $(form)
            .find('span.error')
            .remove();

        /* */
        $.post(href, data, function(response) {
            $(overlay).hide();

            if (response.status) {
                return $('.congrats-trigger').trigger('click');
            }

            /* show errors */
            for (var keyInput in response.errors) {
                if (typeof response.errors[keyInput] !== 'object') {
                    continue;
                }

                /* get first */
                var errorText = response.errors[keyInput][0];

                /* find input */
                var domInput = $(form).find('input[name='+ keyInput +']');

                /* insertafter */
                $('<span class="error">'+ errorText +'</span>')
                    .insertAfter(domInput);
            }
        });
    });
