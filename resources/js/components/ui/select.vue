<template lang="pug">
aside(
    @click="$emit('open-select-modal')"
    class="select-box"
)
    p() {{ selection }}

    slot(name="icon")

</template>

<script>
    // CSS
    // ================================================================================================
    import "../../../css/ui/select.css"

    // ================================================================================================
    export default {
        name: "Select",
        props: {
            selection: {
                default: "",
                type: String
            }
        }
    }
</script>