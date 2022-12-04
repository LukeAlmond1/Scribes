<template lang="pug">
div(class="mt-12")
    section()
        h1(class="font-semibold mb-4 text-2xl text-gray-800") Account details

        form(class="grid gap-4 md:grid-cols-2")
            //- Username
            //- -----------------------------------------------------------------------------------
            ui-form-field(
                :placeholder="'jack'"
                :name="'username'"
                :editable="true"
            )
                template(#icon)
                    username-icon()

            //- Email
            //- -----------------------------------------------------------------------------------
            ui-form-field(
                :placeholder="'jack@test.co'"
                :name="'email'"
                :type="'email'"
                :editable="true"
            )
                template(#icon)
                    email-icon()

</template>

<script>
    // UI
    // ============================================================================================
    import FormField from "../ui/formField.vue"

    // Icons
    // ============================================================================================
    import Username from "../icons/username.vue"
    import Email from "../icons/email.vue"

    // ============================================================================================
    export default {
        name: "Details",
        components: {
            'ui-form-field': FormField,
            'username-icon': Username,
            'email-icon': Email
        }
    }
</script>