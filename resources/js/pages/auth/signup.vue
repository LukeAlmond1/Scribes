<template lang="pug">
div(class="auth-alignment")
    //- Content box
    //- -------------------------------------------------------------------------------------------
    article(class="auth-content-box")
        h1(class="font-bold mb-2 text-2xl text-gray-800") Signup here...

        p(class="mb-6 text-gray-400 text-sm") Enter your details below to sign up, you'll then be asked to verify your email

        //- Form
        //- ---------------------------------------------------------------------------------------
        form(class="flex flex-col gap-4")
            //- Username
            //- -----------------------------------------------------------------------------------
            aside(class="auth-input-box")
                span(class="bg-gray-50 hidden h-full items-center justify-center px-5 py-4 rounded-l-md md:flex")
                    username-icon()

                input(
                    class="outline-none text-gray-800 text-sm w-10/12 placeholder:text-gray-400"
                    placeholder="Enter your username..."
                    type="text"
                )

            //- Email
            //- -----------------------------------------------------------------------------------
            aside(class="auth-input-box")
                span(class="bg-gray-50 hidden h-full items-center justify-center px-5 py-4 rounded-l-md md:flex")
                    email-icon()

                input(
                    class="outline-none text-gray-800 text-sm w-10/12 placeholder:text-gray-400"
                    placeholder="Enter your email address..."
                    type="email"
                )

            //- Password
            //- -----------------------------------------------------------------------------------
            aside(class="auth-input-box")
                span(class="bg-gray-50 hidden h-full items-center justify-center px-5 py-4 rounded-l-md md:flex")
                    password-icon()

                input(
                    class="outline-none text-gray-800 text-sm w-10/12 placeholder:text-gray-400"
                    placeholder="Enter your password..."
                    type="password"
                )

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
        }
    }
</script>