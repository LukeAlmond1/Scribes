<template lang="pug">
div
    section(
        class="bg-blog-cover bg-cover flex items-end justify-center h-48 w-full"
    )
        //- Input field
        //- ---------------------------------------------------------------------------------------
        aside(class="bg-white border-teal-700 drop-shadow-2xl flex gap-4 h-22 items-center -mb-8 rounded-md w-10/12 xl:w-3/6")
            aside(class="bg-gray-50 flex h-full items-center justify-center p-6 rounded-l-md")
                search-icon()

            input(
                class="outline-none w-2/3 placeholder:text-gray-400"
                placeholder="Search for a blog..."
            )

</template>

<script>
    // ================================================================================================
    import Search from "../icons/search.vue"

    // ================================================================================================
    export default {
        name: "Search",
        components: {
            "search-icon": Search
        }
    }
</script>