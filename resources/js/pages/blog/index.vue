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
        components: { Header, Search },
        props: {
            blogs: {
                default: () => ([]),
                type: Array
            },
        },
        mounted() {
            console.log(this.blogs.length);
        },
    }
</script>