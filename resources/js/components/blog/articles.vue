<template lang="pug">
div(class="article-grid")
    //- Each article
    //---------------------------------------------------------------------------------------------
    article(
        v-for="(item, index) in articles"
        :key="index"
        class="article-card"
    )
        //- Article image
        //---------------------------------------------------------------------------------------------
        div(class="article-image")

        //- Author section
        //---------------------------------------------------------------------------------------------
        header(class="author-section")
            span(class="bg-gray-100 h-10 rounded-full w-10")

            p(class="text-gray-800") Jack Adams

            p(class="verified") Verified

        //- Dates & Times
        //---------------------------------------------------------------------------------------------
        section(class="date-time-section")
            time(class="font-medium text-sm text-teal-800") {{ item.published }}

            p(class="text-sm") •

            p(class="font-medium text-sm text-gray-800") {{ item.mins_to_read }} mins read

        //- Title & Summary
        //---------------------------------------------------------------------------------------------
        h1(class="title-summary-section") {{ item.title }}

        p(class="mb-6 text-sm text-gray-400") {{ item.summary }}

        ui-tag(
            :value="item.topic"
            class="mb-4"
        )

        button(class="read-button") Read

</template>

<script>
    // UI
    // ================================================================================================
    import Tag from "../../components/ui/tag.vue"

    // ================================================================================================
    export default {
        name: "Articles",
        components: { 'ui-tag' : Tag },
        props: {
        articles: {
            default: () => ([]),
            type: Array
        },
        }
    }
</script>

<style>
    /* Tailwind imports*/
    /* --------------------------------------------------------------------------------------------- */
    @tailwind components;

    /* UI classes*/
    /* --------------------------------------------------------------------------------------------- */
    @layer components {
        .verified {
            @apply bg-blue-100 p-2 right-0 rounded-md text-sm text-blue-600 text-center w-full sm:w-auto sm:text-start sm:absolute;
        }

        .author-section {
            @apply border-b-2 border-gray-100 font-medium flex flex-wrap gap-4 items-center relative mb-6 pb-3;
        }

        .date-time-section {
            @apply flex gap-2 items-center mb-2;
        }

        .title-summary-section {
            @apply font-semibold mb-2 text-xl text-gray-800;
        }

        .read-button {
            @apply bg-teal-700 font-medium py-4 px-6 rounded-md text-white w-full hover:bg-teal-800;
        }

        .article-image {
            @apply bg-gray-100 h-56 mb-4 w-full;
        }

        .article-grid {
            @apply grid gap-4 mx-auto w-11/12 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4;
        }

        .article-card {
            @apply bg-white cursor-pointer drop-shadow flex flex-col p-6 relative rounded-md;
        }
    }
</style>