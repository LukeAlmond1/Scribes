<template lang="pug">
div
    Header()
    Search(
        @searched-blogs="handleSearchedBlogs"
    )
    Articles(
        v-if="blogData"
        :articles="blogData"
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
        data() {
            return {
                blogData: []
            }
        },
        mounted() {
            this.blogData = this.blogs;
        },
        props: {
            blogs: {
                default: () => ([]),
                type: Array
            },
        },
        methods: {
            handleSearchedBlogs(data) {
                this.blogData = data;
            }
        }
    }
</script>