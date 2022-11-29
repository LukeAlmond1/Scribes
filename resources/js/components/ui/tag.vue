<template lang="pug">
a(
    class="link"
    rel="noopener noreferrer nofollow"
    target="_blank"
) {{ value }}

</template>

<script>
    // CSS
    // ================================================================================================
    import "../../../css/ui/tag.css"

    // ================================================================================================
    export default {
        name: "Tag",
        props: {
            value: {
                default: "",
                type: String
            }
        }
    }
</script>
