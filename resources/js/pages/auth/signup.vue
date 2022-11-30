<template lang="pug">
div(class="auth-alignment")
    //- Content box
    //- -------------------------------------------------------------------------------------------
    ui-content-box()
        template(#content)
            h1(class="font-bold mb-2 text-2xl text-gray-800") Signup here...

            p(class="mb-4 text-gray-400") Enter your details below to sign up, you'll then be asked to verify your email

            //- Form
            //- ---------------------------------------------------------------------------------------
            form(class="flex flex-col gap-4")
                //- Username
                //- -----------------------------------------------------------------------------------
                ui-form-field(
                    :placeholder="'Enter your username...'"
                    :type="'text'"
                )
                    template(#icon)
                        username-icon()

                //- Email
                //- -----------------------------------------------------------------------------------
                ui-form-field(
                    :placeholder="'Enter your email address...'"
                    :type="'email'"
                )
                    template(#icon)
                        email-icon()

                //- Password
                //- -----------------------------------------------------------------------------------
                ui-form-field(
                    :placeholder="'Enter your password...'"
                    :type="'password'"
                )
                    template(#icon)
                        password-icon()

                //- Confirm password
                //- -----------------------------------------------------------------------------------
                ui-form-field(
                    :placeholder="'Confirm your password...'"
                    :type="'password'"
                    class="mb-4"
                )
                    template(#icon)
                        password-icon()

                //- Button
                //- -----------------------------------------------------------------------------------
                button(class="auth-submit-button") Signup

                //- Divider
                //- -----------------------------------------------------------------------------------
                aside(class="grid grid-cols-7 items-center w-full")
                    span(class="bg-gray-100 col-span-3 h-1")

                    p(class="mx-auto text-gray-400") or

                    span(class="bg-gray-100 col-span-3 h-1")

                //- 0Auth
                //- -----------------------------------------------------------------------------------
                aside(class="auth-google-button")
                    img(
                        class="w-6"
                        src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                    )

                    p() Continue with Google

                //- Redirect link
                //- -----------------------------------------------------------------------------------
                p(class="text-center text-gray-400") Already have an account?{{  " " }}
                    a(class="auth-link") Login here

</template>

<script>
    // Icons
    // ============================================================================================
    import SignUpMixin from "../../components/mixins/signUpMixin.js"

    // ============================================================================================
    export default {
        name: "Signup",
        mixins: [SignUpMixin]
    }
</script>