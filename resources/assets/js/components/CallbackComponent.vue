<template lang="pug">
    .callback-app
        congrats-component(ref="congratsComponent")
        modal-component(
            ref="modal"
            className="callback-modal"
            v-bind:title="title"
            @showed="onModalShowed"
            @closed="onModalClosed")

            .callback-component
                .callback-overlay(v-if="overlay")
                form.callback-form(method="POST" @submit.prevent="submit")
                    .callback-form-inputs
                        .callback-form-item
                            label Имя:
                            input(
                                v-model="data.name"
                                type="text"
                                name="name"
                                placeholder="Введите Ваше имя"
                                required="required")

                            span.error(v-if="errors.name") {{ errors.name[0] }}

                        .callback-form-item
                            label Телефон:
                            masked-input(
                                v-model="data.phone"
                                mask="7 (111) 111-1111"
                                placeholder-char="_"
                                placeholder="Введите номер телефона"
                                required="required"
                                type="tel")

                            span.error(v-if="errors.phone") {{ errors.phone[0] }}

                        .callback-form-item
                            label Email (необязательно):
                            input(
                                v-model="data.email"
                                type="email"
                                name="email"
                                placeholder="Введите e-mail")

                            span.error(v-if="errors.email") {{ errors.email[0] }}

                    .callback-form-actions
                        button(type="submit") Заказать консультацию
                        span.additonal-text Вам ответят в течение 15 мин
</template>

<style lang="stylus">
    .callback-modal
        .modal-wrap
            overflow hidden

    .callback-component
        width 100%

    .callback-overlay
        width 100%
        height 100%
        background-color rgba(255,255,255,0.5)
        position absolute
        top 0
        left 0
        z-index 99

    .callback-form
        width inherit

        .callback-form-inputs
            width inherit

        .callback-form-item
            width 100%
            margin-top 15px

            &:first-child
                margin-top 0px

            label
                color #666
                font-family Roboto
                font-size 1.3rem
                font-weight 400
                display block
                text-align center
                margin-bottom 8px

            input
                width 100%
                font-size 1.2rem
                font-weight 400
                padding 12px 16px
                border-radius 4px
                text-align center
                border solid 2px #CCC

                &::-webkit-input-placeholder
                  color #999
                &::-moz-placeholder
                  color #999
                &:-ms-input-placeholder
                  color #999
                &:-moz-placeholder
                  color #999

                &:focus
                    border solid 2px #38AAEB
                    box-shadow 0px 2px 2px 2px rgba(0,0,0,0.1)

            .error
                display block
                color #F00
                font-size 0.9rem
                font-weight 300
                padding 5px 0px
                text-align center

        .callback-form-actions
            width inherit
            text-align center
            margin-top 25px

            button
                font-family Montserrat
                font-size 1.3rem
                font-weight 500
                width auto
                display inline-block
                background-color rgba(255,255,255,0.5)
                border 3px solid #2F80ED
                border-radius 30px
                padding 13px 25px
                text-align center
                color #525252
                background-color #F0F0F0
                line-height normal

            span
                color #FFF
                font-size 0.9rem
                font-weight 300
                margin-top 15px
                display block
                text-align center
</style>

<script>
    import MasketInput from 'vue-masked-input'

    export default {
        components: {
            'masked-input': MasketInput
        },
        props: {
            actions: {
                default: function() {
                    return {
                        submit: '/callback.json'
                    };
                }
            },
            title: {
                default: null
            }
        },
        data: function() {
            return {
                data: {
                    name: null,
                    phone: null,
                    email: null
                },

                overlay: false,
                errors: {}
            };
        },
        methods: {
            submit: function() {
                /* show overlay */
                this.overlay = true;

                this.$http.post(this.actions.submit, this.data)
                    .then(function(response) {
                        /* */
                        this.overlay = false;

                        var response = response.data;

                        /* hide or show errors */
                        this.errors = response.errors;

                        if (response.status) {
                            /* hide callback component */
                            this.hide();

                            /* show congrats component */
                            this.$refs.congratsComponent.show();
                        }
                    });
            },
            show: function() {
                this.$refs.modal.open();
            },

            hide: function() {
                this.$refs.modal.close();
            },

            onModalShowed: function() {
                /* clear data */
                this.data = {
                    name: null,
                    phone: null,
                    email: null
                };
            },

            onModalClosed: function() {

            }
        }
    }
</script>
