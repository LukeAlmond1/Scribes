<template lang="pug">
div()
    Header()
    Details()

</template>

<script>
    // Components
    // ============================================================================================
    import Header from "../../components/page/header.vue"
    import Details from "../../components/account/details.vue"

    // ============================================================================================
    export default {
        name: "Account",
        components: { Header, Details }
    }
</script>