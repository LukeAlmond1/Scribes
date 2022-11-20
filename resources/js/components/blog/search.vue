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
                spellcheck="false"
                class="p-6 outline-none rounded-md text-gray-800 w-2/3 placeholder:text-gray-400 md:p-0"
                placeholder="Search for a blog..."
            )

    //- Search summary
    //- -------------------------------------------------------------------------------------------
    section(class="flex flex-col gap-2 items-center justify-center mx-auto mb-8 w-11/12")
        h1(class="font-bold text-gray-800 text-2xl lg:text-3xl") {{ searchTerm }}

        p(
            v-if="searchTerm"
            class="text-gray-500 text-center lg:text-lg"
        ) There seems to be 100 blogs for that term

    //- Banner
    //- -------------------------------------------------------------------------------------------
    section(class="flex flex-wrap gap-4 justify-between mx-auto relative w-11/12")
        //- Sort by
        //- ---------------------------------------------------------------------------------------
        fieldset(class="w-full xl:w-auto")
            aside(
                @click="openSort = true"
                class="border-2 border-gray-100 cursor-pointer flex h-16 items-center justify-between mb-2 px-4 rounded-md text-gray-500 xl:w-48 lg:h-12"
            )
                p() {{ selectedSortOpt }}

                sort-icon()

            //- Sort by popup modal
            //- ---------------------------------------------------------------------------------------
            SortBy(
                v-if="openSort"
                @change-sort-opt="handleSortChange"
                @close-sort-modal="openSort = false"
                :selectedSortOpt="selectedSortOpt"
            )

        //- Tags
        //- ---------------------------------------------------------------------------------------
        menu(class="grid gap-x-6 gap-y-4 sm:grid-cols-2 w-full lg:grid-cols-4 xl:w-auto")
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
        fieldset(class="w-full xl:w-auto")
            aside(
                @click="openFilter = true"
                class="border-2 border-gray-100 cursor-pointer flex gap-3 h-16 items-center mb-2 px-4 rounded-md text-gray-500 xl:w-48 lg:h-12"
            )
                filter-icon()

                p() {{ selectedFilterOpt }}

            //- Filter by popup modal
            //- ---------------------------------------------------------------------------------------
            FilterBy(
                v-if="openFilter"
                @change-filter-opt="handleFilterChange"
                @close-filter-modal="openFilter = false"
                :selectedFilterOpt="selectedFilterOpt"
            )

</template>

<script>
    // Icons
    // ================================================================================================
    import Search from "../icons/search.vue"
    import Filter from "../icons/filter.vue"
    import Sort from "../icons/sort.vue"

    // Components
    // ================================================================================================
    import SortBy from "../../components/modal/popup/sortBy.vue"
    import FilterBy from "../../components/modal/popup/filterBy.vue"

    // ================================================================================================
    export default {
        name: "Search",
        components: {
            "search-icon": Search,
            "filter-icon": Filter,
            "sort-icon": Sort,
            SortBy,
            FilterBy
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
                searchTerm: "",
                openSort: false,
                selectedSortOpt: "Popular",
                openFilter: false,
                selectedFilterOpt: "None"
            }
        },
        methods: {
            handleSortChange(opt) {
                this.selectedSortOpt = opt;
            },
            handleFilterChange(opt) {
                if (opt === "None") {
                    this.selectedFilterOpt = "Filters"
                } else {
                    this.selectedFilterOpt = opt;
                }
            }
        }
    }
</script>
