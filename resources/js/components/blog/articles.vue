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

    // CSS
    // ================================================================================================
    import "../../../css/article.css"

    // ================================================================================================
    export default {
        name: "Articles",
        mixins: [articleMixin]
    }
</script>