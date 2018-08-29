<template lang="pug">
    .callback-app
        congrats-component(ref="congratsComponent")
        modal-component(
        ref="modal"
        className="callback-modal"
        v-bind:title="title"
        v-bind:triggerclass="triggerclass"
        @showed="onModalShowed"
        @closed="onModalClosed")

            span.additonal-text (Заполните форму и наши сотрудники решат ваши проблемы в течении 15 минут)

            div.callback-component
                div.callback-overlay(v-if="overlay")
                form.callback-form(method="POST" @submit.prevent="submit" v-if="!status")
                    div.callback-form-inputs
                        div.callback-form-item
                            label Имя:
                            input(
                            v-model="data.name"
                            type="text"
                            name="name"
                            placeholder="Введите Ваше имя"
                            required="required"
                            autocomplete="off")

                            span.error(v-if="errors.name") {{ errors.name[0] }}

                        div.callback-form-item
                            label Телефон:
                            masked-input(
                            v-model="data.phone"
                            mask="7 (111) 111-1111"
                            placeholder-char="_"
                            placeholder="Введите номер телефона"
                            required="required"
                            type="tel")

                            span.error(v-if="errors.phone") {{ errors.phone[0] }}

                        div.callback-form-item
                            label Email (необязательно):
                            input(
                            v-model="data.email"
                            type="email"
                            name="email"
                            placeholder="Введите e-mail"
                            autocomplete="off")

                            span.error(v-if="errors.email") {{ errors.email[0] }}

                    div.callback-form-actions
                        button(type="submit") ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ
</template>

<style lang="stylus">
    .callback-modal
        .modal-wrap
            max-width 400px
            background-image url("/static/images/front/mobile-modal-background-answer.png")
            background-repeat no-repeat
            background-size cover

            @media screen and (max-width: 500px)
                max-width 100%

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
            margin-top 20px

            &:first-child
                margin-top 0

            label
                color #fff
                font-size 0.9rem
                font-weight 400
                line-height 1.1rem
                display block
                margin-bottom 8px

            input
                width 100%
                font-size 0.8rem
                padding 12px 16px
                border-radius 5px
                background #fff
                text-align center
                border solid 1px #999

            .error
                display block
                color #F00
                font-size 0.8rem
                font-weight 300
                padding 5px 0px
                text-align center

        .callback-form-actions
            width inherit
            margin-top 35px

            button
                width 100%
                color #FFF
                font-size 0.8rem
                display block
                background-color #00C511
                box-shadow 0 12px 15px rgba(0, 0, 0, 0.2), inset 0px -4px 0px rgba(0, 0, 0, 0.25)
                border-radius 5px
                border none
                padding 12px 16px
                font-weight 700
                text-align center
                text-transform uppercase

    span.additonal-text
        color #fff
        font-size 0.8rem
        font-weight 300
        margin-top 15px
        display block
        text-align center
        margin-bottom 20px
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
                        submit: '/create-deal.json'
                    };
                }
            },
            triggerclass: {
                default: null
            },
            title: {
                default: null
            },
            selected: {
                default: () => []
            }
        },
        data: function() {
            return {
                data: {
                    name: null,
                    phone: null,
                    email: null,
                    additional: this.selected
                },

                overlay: false,
                status: false,
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
                /* restore flag */
                this.status = false;

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
