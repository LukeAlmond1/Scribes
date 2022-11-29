<template lang="pug">
div(class="mb-12")
    //- Cover
    //- -------------------------------------------------------------------------------------------
    section(
        class="background-cover"
    )
        //- Input field
        //- ---------------------------------------------------------------------------------------
        aside(
            @mouseenter="handleMouseEnter"
            @mouseleave="handleMouseLeave"
            :class="{ '--xy-push-up' : isInputHovered, '--xy-push-down' : !isInputHovered }"
            class="search-container --xy"
        )
            aside(
                class="search-box"
            )
                search-icon()

            input(
                v-model="searchTerm"
                spellcheck="false"
                class="search-input"
                placeholder="Search for a blog..."
            )

            loader-icon(:isSearching="searchTerm")

    //- Search summary
    //- -------------------------------------------------------------------------------------------
    transition(name="--fade")
        section(
            v-if="searchTerm"
            class="results-container"
        )
                h1(class="results-term") {{ searchTerm }}

                p(class="results-text") There seems to be {{ numberOfBlogs }} blogs for that term

    //- Banner
    //- -------------------------------------------------------------------------------------------
    section(class="banner")
        //- Sort by
        //- ---------------------------------------------------------------------------------------
        fieldset(class="w-full xl:w-auto")
            ui-select(
                @open-select-modal="openSort = !openSort"
                :selection="selectedSortOpt"
            )
                template(#icon)
                    sort-icon()

            //- Sort by popup modal
            //- ---------------------------------------------------------------------------------------
            transition(name="--popup")
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
        menu(class="tag-container")
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
                @open-select-modal="openFilter = !openFilter"
                :selection="selectedFilterOpt"
            )
                template(#icon)
                    filter-icon()

            //- Filter by popup modal
            //- ---------------------------------------------------------------------------------------
            transition(name="--popup")
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
    // Mixins
    // ================================================================================================
    import blogMixin from "../../components/mixins/blogMixin.js"

    // CSS
    // ================================================================================================
    import "../../../css/components/search.css"

    // ================================================================================================
    export default {
        name: "Search",
        mixins: [blogMixin]
    }
</script>