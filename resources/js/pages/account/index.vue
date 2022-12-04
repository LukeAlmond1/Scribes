<template lang="pug">
div()
    Header()
    section(class="px-12")
        Stats()

        div(class="bg-gray-100 h-1 my-12 w-full")

        Details()

</template>

<script>
    // Components
    // ============================================================================================
    import Header from "../../components/page/header.vue"
    import Details from "../../components/account/details.vue"
    import Stats from "../../components/account/stats.vue"

    // ============================================================================================
    export default {
        name: "Account",
        components: { Header, Details, Stats }
    }
</script>