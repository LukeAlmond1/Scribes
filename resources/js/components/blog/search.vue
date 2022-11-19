<template lang="pug">
div
    //- Cover
    //- -------------------------------------------------------------------------------------------
    section(class="bg-blog-cover bg-cover flex h-48 items-end justify-center mb-16 w-full")
        //- Input field
        //- ---------------------------------------------------------------------------------------
        aside(class="bg-white border-teal-700 drop-shadow-2xl flex gap-4 h-22 items-center -mb-8 rounded-md w-10/12 xl:w-3/6")
            aside(class="bg-gray-50 flex h-full items-center justify-center p-6 rounded-l-md")
                search-icon()

            input(
                class="outline-none text-gray-800 w-2/3 placeholder:text-gray-400"
                placeholder="Search for a blog..."
            )

    //- Search summary
    //- -------------------------------------------------------------------------------------------
    section(class="flex items-center justify-center w-full")
        article(class="flex flex-col gap-2 items-center")
            h1(class="font-bold text-gray-800 text-3xl") Philosphy

            p(class="text-lg text-gray-500") There seems to be 100 blogs for that term

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