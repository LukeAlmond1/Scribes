<template lang="pug">
aside(class="auth-input-box")
    span(class="auth-icon-box")
        slot(name="icon")

    input(
        :placeholder="placeholder"
        :type="type"
        :disabled="editable"
        v-model="val"
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
        data() {
            return {
                val: ""
            }
        },
        props: {
            placeholder: {
                default: "",
                type: String
            },
            type: {
                default: "text",
                type: String
            },
            name: {
                default: "",
                type: String
            },
            editable: {
                default: false,
                type: Boolean
            }
        },
        watch: {
            val() {
                this.$emit("update-form", {key: this.name, value: this.val});
            }
        }
    }
</script>