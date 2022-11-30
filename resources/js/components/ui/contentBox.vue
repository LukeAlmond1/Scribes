<template lang="pug">
article(
    @mouseenter="enteredBox = true"
    @mouseleave="enteredBox = false"
    :class="{ '--xy-push-up' : enteredBox, '--xy-push-down' : !enteredBox }"
    class="auth-content-box --xy"
)
    slot(name="content")

</template>

<script>
    // CSS
    // ================================================================================================
    import "../../../css/components/auth.css"

    // ================================================================================================
    export default {
        name: "ContentBox",
        data() {
            return {
                enteredBox: false
            }
        }
    }
</script>
