<template lang="pug">
div()
    transition-group(
        name="--fade"
        tag="section"
        class="article-grid"
    )
        //- Each article
        //---------------------------------------------------------------------------------------------
        article(
            v-for="(item, index) in articles"
            @mouseenter="isCardHover = index"
            @mouseleave="isCardHover = null"
            :key="index"
            :class="{ '--xy-push-up' : isCardHover === index, '--xy-push-down' : isCardHover !== index }"
            class="article-card --xy"
        )
            //- Article image
            //---------------------------------------------------------------------------------------------
            div(
                class="article-image"
            )
                img(
                    class="h-full w-full"
                    :src="item.cover"
                )

                //- Metrics
                //---------------------------------------------------------------------------------------------
                section(class="metric-section")
                    p(class="metric") {{ new Intl.NumberFormat().format(item.views) }} 👁️

                    div(class="bg-gray-600 w-0.5")

                    p(class="metric") {{ new Intl.NumberFormat().format(item.shares) }} 🔄

            //- Author section
            //---------------------------------------------------------------------------------------------
            section(class="author-section")
                img(
                    :src="item.author.avatar"
                    class="h-10 rounded-full w-10"
                )

                p(class="text-gray-800") {{ item.author.firstName + " " + item.author.lastName }}

                p(
                    :class="{'verified' : item.author.verified, 'un-verified' : !item.author.verified}"
                ) {{ item.author.verified ? 'verified' : "un-verified" }}

            //- Dates & Times
            //---------------------------------------------------------------------------------------------
            section(class="date-time-section")
                time(class="font-medium text-sm text-gray-800") {{ item.published }}

                p(class="text-sm") •

                p(class="font-medium text-sm text-gray-800") {{ item.mins_to_read }} min read

            //- Title & Summary
            //---------------------------------------------------------------------------------------------
            h1(class="font-semibold mb-2 text-xl text-gray-800") {{ item.title }}

            p(class="mb-6 text-sm text-gray-400") {{ item.summary }}

            ui-tag(
                :value="item.topic"
                class="text-base mb-4"
            )

            button(class="read-button") Read ->

</template>

<script>
    // Mixins
    // ================================================================================================
    import articleMixin from "../../components/mixins/articleMixin.js"

    // ================================================================================================
    export default {
        name: "Articles",
        mixins: [articleMixin]
    }
</script>

<style>
    /* Tailwind imports*/
    /* --------------------------------------------------------------------------------------------- */
    @tailwind components;

    /* UI classes*/
    /* --------------------------------------------------------------------------------------------- */
    @layer components {
        .article-grid {
            @apply grid gap-4 mx-auto w-11/12 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4;
        }

        .article-card {
            @apply bg-white cursor-pointer drop-shadow flex flex-col p-6 relative rounded-md;
        }

        .author-section {
            @apply border-b-2 border-gray-100 font-medium flex flex-wrap gap-4 items-center relative mb-6 pb-3;
        }

        .article-image {
            @apply bg-gray-100 h-56 mb-4 overflow-hidden rounded-md relative w-full;
        }

        .date-time-section {
            @apply flex gap-2 items-center mb-2;
        }

        .metric {
            @apply font-medium text-white text-sm;
        }

        .metric-section {
            @apply absolute bottom-0 bg-gray-800 flex justify-between px-4 py-2 rounded-b-md w-1/2 w-full;
        }

        .read-button {
            @apply bg-gray-800 font-medium py-4 px-6 rounded-md text-white w-full hover:bg-gray-900;
        }

        .un-verified {
            @apply absolute bg-gray-100 p-2 right-0 rounded-md text-sm text-gray-600;
        }

        .verified {
            @apply absolute bg-blue-100 p-2 right-0 rounded-md text-sm text-blue-600;
        }
    }
</style>