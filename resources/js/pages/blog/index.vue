<template lang="pug">
div
    Header()
    Search()
</template>

<script>
// ============================================================================================
import Header from "../../components/page/header.vue"
import Search from "../../components/blog/search.vue"

// ============================================================================================
export default {
    name: "Blog",
    components: { Header, Search }
}
</script>