<template lang="pug">
aside(class="auth-input-box")
    span(class="auth-icon-box")
        slot(name="icon")

    input(
        :placeholder="placeholder"
        :type="type"
        class="auth-input-field"
    )

</template>

<script>
    // CSS
    // ================================================================================================
    import "../../../css/components/auth.css"

    // ================================================================================================
    export default {
        name: "FormField",
        props: {
            placeholder: {
                default: "",
                type: String
            },
            type: {
                default: "text",
                type: String
            },
        }
    }
</script>