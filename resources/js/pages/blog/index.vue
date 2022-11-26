<template lang="pug">
div
    Header()
    Search()
    Articles(
        v-if="blogs"
        :articles="blogs"
    )
</template>

<script>
    // ============================================================================================
    import Header from "../../components/page/header.vue"
    import Search from "../../components/blog/search.vue"
    import Articles from "../../components/blog/articles.vue"

    // ============================================================================================
    export default {
        name: "Blog",
        components: { Header, Search, Articles },
        props: {
            blogs: {
                default: () => ([]),
                type: Array
            },
        }
    }
</script>