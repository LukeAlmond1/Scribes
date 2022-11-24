<template lang="pug">
div
    //- Cover
    //- -------------------------------------------------------------------------------------------
    section(
        :class="{'mb-18' : isInputHovered}"
        class="bg-blog-cover bg-cover flex h-48 items-end justify-center mb-24 w-full"
    )
        //- Input field
        //- ---------------------------------------------------------------------------------------
        aside(
            @mouseenter="handleMouseEnter"
            @mouseleave="handleMouseLeave"
            :class="{ '--input-push-up' : isInputHovered, '--input-push-down' : !isInputHovered }"
            class="bg-white border-teal-700 drop-shadow-2xl flex gap-4 h-22 items-center -mb-8 rounded-md w-11/12 xl:w-3/6 --input"
        )
            aside(
                class="bg-gray-50 hidden h-full items-center justify-center p-6 rounded-l-md md:flex"
            )
                search-icon()

            input(
                v-model="searchTerm"
                spellcheck="false"
                class="p-6 rounded-md outline-none text-gray-800 w-11/12 placeholder:text-gray-400 md:p-0"
                placeholder="Search for a blog..."
            )

    //- Search summary
    //- -------------------------------------------------------------------------------------------
    transition()
        section(
            v-if="searchTerm"
            class="flex flex-col gap-2 items-center justify-center mx-auto mb-8 w-11/12"
        )
                h1(class="font-bold text-gray-800 text-2xl lg:text-3xl") {{ searchTerm }}

                p(class="text-gray-500 text-center lg:text-lg search-result") There seems to be 100 blogs for that term

    //- Banner
    //- -------------------------------------------------------------------------------------------
    section(class="flex flex-wrap gap-4 justify-between mx-auto relative w-11/12")
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
                @open-select-modal="openFilter = !openFilter"
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
    // Mixins
    // ================================================================================================
    import blogMixin from "../../components/mixins/blogMixin.js"

    // ================================================================================================
    export default {
        name: "Search",
        mixins: [blogMixin]
    }
</script>

<style>
    .--input {
        transition: transform 300ms ease;
    }

    .--input-push-up {
        transform: translate(0px, -5px);
    }

    .--input-push-down {
        transform: translate(0px, 5px);
    }

    .v-enter-active,
    .v-leave-active {
        transition: opacity 0.5s ease;
    }
    .v-enter-from,
    .v-leave-to {
    opacity: 0;
    }
</style>