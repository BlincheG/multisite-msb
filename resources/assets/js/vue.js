import VueResource from 'vue-resource';

Vue.use(VueResource);

import ModalComponent from './components/ModalComponent';
import FormComponent from './components/FormComponent';
import CallbackComponent from './components/CallbackComponent';
import CongratsComponent from './components/CongratsComponent';

var components = [
    {
        name: 'modal-component',
        wrap: '#ModalComponent',
        app: ModalComponent
    },
    {
        name: 'form-component',
        wrap: '#FormComponent',
        app: FormComponent
    },
    {
        name: 'congrats-component',
        wrap: '#CongratsComponent',
        app: CongratsComponent
    },
    {
        name: 'callback-component',
        wrap: '#CallbackComponent',
        app: CallbackComponent
    }
];

/* before, register component */
_.forEach(components, function(component) {
    Vue.component(component.name, component.app);
});

/* initialize */
(function($, Vue)
{
    /* after, initialize */
    _.forEach(components, function(component) {
        var wrap = $(component.wrap);

        if ($(wrap).length <= 0) {
            return;
        }

        var props = {};

        /* read props from wrap */
        $(wrap).each(function() {
            /* each props */
            _.forEach(this.attributes, function(attr, key) {
                var value = null;

                try {
                    value = JSON.parse(attr.nodeValue);
                } catch (e) {
                    value = attr.nodeValue;
                }

                props[attr.nodeName] = value;
            });

            /* init component */
            new (Vue.extend(component.app))({
                el: this,
                propsData: props
            });
        });
    });
})(jQuery, Vue);
