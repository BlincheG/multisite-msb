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
new Vue({
  el: '#app',
  methods: {
    onModalClick () {
      this.$refs.callbackModal.show();
    }
  }
});
