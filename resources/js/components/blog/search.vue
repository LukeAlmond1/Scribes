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
                class="p-6 rounded-md outline-none text-gray-800 w-11/12 placeholder:text-gray-400 md:p-0"
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
            ui-select(
                @open-select-modal="openSort = true"
                :selection="selectedSortOpt"
            )
                template(#icon)
                    sort-icon()

            //- Sort by popup modal
            //- ---------------------------------------------------------------------------------------
            ui-popup(
                v-if="openSort"
                @change-sort="handleSortChange"
                @close-sort="openSort = false"
                :selection="selectedSortOpt"
                :data="sortOptions"
                :type="'sort'"
            )

        //- Tags
        //- ---------------------------------------------------------------------------------------
        menu(class="grid gap-x-6 gap-y-4 sm:grid-cols-2 w-full lg:grid-cols-4 xl:w-auto")
            ui-tag(
                v-for="(item, index) in articleTags"
                :href="item.link"
                :title="item.tag"
                :key="index"
                :value="item.tag"
                class="hover:border-gray-200"
            )

        //- Filters
        //- ---------------------------------------------------------------------------------------
        fieldset(class="w-full xl:w-auto")
            ui-select(
                @open-select-modal="openFilter = true"
                :selection="selectedFilterOpt"
            )
                template(#icon)
                    filter-icon()

            //- Filter by popup modal
            //- ---------------------------------------------------------------------------------------
            ui-popup(
                v-if="openFilter"
                @change-filter="handleFilterChange"
                @close-filter="openFilter = false"
                :selection="selectedFilterOpt"
                :data="filterOptions"
                :type="'filter'"
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

    // UI
    // ================================================================================================
    import Tag from "../../components/ui/tag.vue"
    import Select from "../../components/ui/select.vue"
    import PopUp from "../../components/ui/popup.vue"

    // ================================================================================================
    export default {
        name: "Search",
        components: {
            "search-icon": Search,
            "filter-icon": Filter,
            "sort-icon": Sort,
            "ui-tag": Tag,
            "ui-select": Select,
            "ui-popup": PopUp,
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
                filterOptions: [
                    "Verified authors",
                    "Views < 100",
                    "Shares < 100",
                    "None"
                ],
                sortOptions: [
                    "Popular",
                    "Least popular",
                    "Upload date"
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
