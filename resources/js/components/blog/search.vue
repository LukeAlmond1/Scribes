<template lang="pug">
div
    //- Cover
    //- -------------------------------------------------------------------------------------------
    section(class="bg-blog-cover bg-cover flex h-48 items-end justify-center mb-16 w-full")
        //- Input field
        //- ---------------------------------------------------------------------------------------
        aside(class="bg-white border-teal-700 drop-shadow-2xl flex gap-4 h-22 items-center -mb-8 rounded-md w-11/12 xl:w-3/6")
            aside(class="bg-gray-50 hidden h-full items-center justify-center p-6 rounded-l-md md:flex")
                search-icon()

            input(
                v-model="searchTerm"
                class="p-6 outline-none rounded-md text-gray-800 w-2/3 placeholder:text-gray-400 md:p-0"
                placeholder="Search for a blog..."
            )

    //- Search summary
    //- -------------------------------------------------------------------------------------------
    section(class="flex flex-col gap-2 items-center justify-center mx-auto mb-8 w-11/12")
        h1(class="font-bold text-gray-800 text-2xl lg:text-3xl") {{ searchTerm }}

        p(class="text-gray-500 text-center lg:text-lg") There seems to be 100 blogs for that term

    //- Banner
    //- -------------------------------------------------------------------------------------------
    section(class="flex flex-wrap gap-4 justify-between mx-auto w-11/12")
        //- Sort by
        //- ---------------------------------------------------------------------------------------
        aside(class="border-2 border-gray-100 cursor-pointer flex gap-4 h-16 items-center justify-between px-4 rounded-md text-gray-500 w-full xl:w-auto lg:h-12")
            p() Popular

            svg(
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-4 h-4"
            )
                path(
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                )

        //- Tags
        //- ---------------------------------------------------------------------------------------
        aside(class="grid gap-x-6 gap-y-4 sm:grid-cols-2 w-full lg:grid-cols-4 xl:w-auto")
            a(
                v-for="(item, index) in articleTags"
                :href="item.link"
                :title="item.tag"
                :key="index"
                class="bg-gray-50 border-2 border-gray-50 font-semibold flex h-16 items-center justify-center px-4 rounded-md text-gray-800 hover:border-gray-200 lg:h-12"
                rel="noopener noreferrer nofollow"
                target="_blank"
            ) {{ item.tag }}

        //- Filters
        //- ---------------------------------------------------------------------------------------
        aside(class="border-2 border-gray-100 cursor-pointer flex gap-4 h-16 items-center px-4 rounded-md text-gray-500 w-full xl:w-auto lg:h-12")
            svg(
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-4 h-4"
            )
                path(
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z"
                )

            p() Filters


</template>

<script>
    // ================================================================================================
    import Search from "../icons/search.vue"

    // ================================================================================================
    export default {
        name: "Search",
        components: {
            "search-icon": Search
        },
        data() {
            return {
                articleTags: [
                    {
                        tag: "⏳ Long Reads", link: ""
                    },
                    {
                        tag: "⌛ Short Reads", link: ""
                    },
                    {
                        tag: "🔥 Intense Reads", link: ""
                    },
                    {
                        tag: "💧 Light Reads", link: ""
                    }
                ],
                searchTerm: ""
            }
        }
    }
</script>
