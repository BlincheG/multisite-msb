<template lang="pug">
    .form-component
        congrats-component(ref="congratsComponent")
        form(method="POST" @submit.prevent="submit")
            div.section-cta__overlay(v-if="overlay")
            div.section-cta__form-items
                div.section-cta__form-item
                    input(
                    v-model="data.name"
                    type="text"
                    placeholder="Напишите Ваше имя:"
                    name="name"
                    required="required"
                    autocomplete="off")

                    span.error(v-if="errors.name") {{ errors.name[0] }}

                div.section-cta__form-item
                    masked-input(
                    v-model="data.phone"
                    type="tel"
                    mask="7 (111) 111-1111"
                    placeholder="Напишите Ваш телефон:"
                    name="phone"
                    required="required")

                    span.error(v-if="errors.phone") {{ errors.phone[0] }}

                    span.error(v-if="errors.gist") {{ errors.gist[0] }}

                div.section-cta__form-item
                    button(type="submit") Отправить
</template>

<style lang="stylus">
    .section-cta
        position relative

        &__overlay
            width 100%
            height 100%
            background-color rgba(255,255,255,0.5)
            position absolute
            top 0
            left 0
            z-index 99

        &__form-wrap
            display flex

            @media screen and (max-width 768px)
                flex-direction column

        &__form-title
            color #b5966b
            font-size 25px
            line-height 35px
            font-weight 300
            text-align center
            margin-bottom 25px

        &__form-untitle
            font-size 14px
            line-height 24px
            font-weight 300
            color #fff
            margin-bottom 25px
            text-align center

        &__form-items
            display flex
            flex-direction column

        &__form-item
            display inline-flex
            margin-bottom 50px

            input[type="text"]
            input[type="tel"]
                background transparent
                border none
                padding 10px 0
                font-size 18px
                color #fff
                outline none
                width 100%
                border-bottom 2px solid #fff
                transition all 0.3s

                &::placeholder
                    color #fff

            button[type="submit"]
                font-size 22px
                color #fff
                padding 25px 90px 25px 50px
                font-weight 300
                background linear-gradient(277.15deg, #79F1A4 10.99%, rgba(14, 92, 173, 0.77) 83.93%), #0E5CAD
                box-shadow 0 4px 4px rgba(0, 0, 0, 0.25)
                border-radius 40px
                position relative
                border none

                @media screen and (max-width: 768px)
                    padding 15px 90px 15px 50px
                    font-size 18px

                &:after
                    content " "
                    background url("/images/front/arrow-right.svg") no-repeat
                    position absolute
                    width 35px
                    height 15px
                    top 50%
                    right 15px
                    transform translate(0%, -50%)
</style>

<script>
    import MasketInput from 'vue-masked-input'

    export default {
        components: {
            'masked-input': MasketInput
        },
        props: {
            actions: {
                default: function () {
                    return {
                        submit: '/callback.json'
                    };
                }
            }
        },
        data: function () {
            return {
                data: {
                    name: null,
                    phone: null,
                    gist: null
                },

                overlay: false,
                status: false,
                errors: {}
            };
        },
        methods: {
            submit: function () {
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
                            /* show congrats component */
                            this.$refs.congratsComponent.show();
                        }
                    });
            }
        }
    }
</script>
