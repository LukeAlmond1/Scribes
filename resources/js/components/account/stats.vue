<template lang="pug">
div(class="mt-12")
    section()
        h1(class="font-semibold mb-4 text-2xl text-gray-800") Analytics

        section(class="flex gap-6")
            aside(
                v-for="(item, index) in demo"
                :key="index"
                class="bg-gray-50 flex gap-6 items-center justify-center p-6 rounded-md"
            )
                h1(class="font-bold text-gray-800 text-lg") {{ item.val }}

                span(class="bg-gray-300 h-full rounded-md w-0.5")

                p(class="font-medium text-gray-800") {{ item.metric }}


</template>

<script>
    export default {
        name: "Stats",
        data() {
            return {
                demo: [
                    {
                        metric: "Blogs Read",
                        val: "129"
                    },
                    {
                        metric: "Blogs Saved",
                        val: "5"
                    },
                    {
                        metric: "Avg Read Time (mins)",
                        val: "15"
                    },
                    {
                        metric: "Favourite Author",
                        val: "Jack Alby"
                    }
                ]
            }
        }
    }
</script>