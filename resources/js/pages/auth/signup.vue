<template lang="pug">
div(class="auth-alignment")
    //- Content box
    //- -------------------------------------------------------------------------------------------
    article(
        @mouseenter="enteredBox = true"
        @mouseleave="enteredBox = false"
        :class="{ '--xy-push-up' : enteredBox, '--xy-push-down' : !enteredBox }"
        class="auth-content-box --xy"
    )
        h1(class="font-bold mb-2 text-2xl text-gray-800") Signup here...

        p(class="mb-4 text-gray-400") Enter your details below to sign up, you'll then be asked to verify your email

        //- Form
        //- ---------------------------------------------------------------------------------------
        form(class="flex flex-col gap-4")
            //- Username
            //- -----------------------------------------------------------------------------------
            aside(class="auth-input-box")
                span(class="auth-icon-box")
                    username-icon()

                input(
                    class="auth-input-field"
                    placeholder="Enter your username..."
                    type="text"
                )

            //- Email
            //- -----------------------------------------------------------------------------------
            aside(class="auth-input-box")
                span(class="auth-icon-box")
                    email-icon()

                input(
                    class="auth-input-field"
                    placeholder="Enter your email address..."
                    type="email"
                )

            //- Password
            //- -----------------------------------------------------------------------------------
            aside(class="auth-input-box mb-2")
                span(class="auth-icon-box")
                    password-icon()

                input(
                    class="auth-input-field"
                    placeholder="Enter your password..."
                    type="password"
                )

            //- Confirm password
            //- -----------------------------------------------------------------------------------
            aside(class="auth-input-box mb-2")
                span(class="auth-icon-box")
                    password-icon()

                input(
                    class="auth-input-field"
                    placeholder="Confirm your password..."
                    type="password"
                )

            //- Button
            //- -----------------------------------------------------------------------------------
            button(class="auth-submit-button") Signup

            //- Redirect link 
            //- -----------------------------------------------------------------------------------
            p(class="text-center text-gray-400") Already have an account?{{  " " }}
                a(class="auth-link") Login here

</template>

<script>
    // Icons
    // ============================================================================================
    import Username from "../../components/icons/username.vue"
    import Password from "../../components/icons/password.vue"
    import Email from "../../components/icons/email.vue"

    // CSS
    // ============================================================================================
    import "../../../css/components/auth.css";

    // ============================================================================================
    export default {
        name: "Signup",
        components: {
            "username-icon": Username,
            "password-icon": Password,
            "email-icon": Email
        },
        data() {
            return {
                enteredBox: false
            }
        }
    }
</script>