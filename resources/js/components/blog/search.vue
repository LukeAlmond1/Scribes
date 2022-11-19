<template lang="pug">
div
    section(
        class="bg-blog-cover bg-cover flex items-center justify-center h-64 w-full"
    )
        //- Input field
        //- ---------------------------------------------------------------------------------------
        aside(class="bg-white drop-shadow-2xl py-6 px-2 rounded-md w-1/3")
            input(
                class="outline-none font-inter w-2/3 placeholder:text-gray-400"
                placeholder="Search for a blog..."
            )

</template>

<script>
// ================================================================================================
export default {
    name: "Search"
}
</script>