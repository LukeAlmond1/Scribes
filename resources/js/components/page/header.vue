<template lang="pug">
div()
    NavModal(
        @modal-change="showModal = false"
        v-if="showModal"
    )

    nav(class="bg-white flex items-center justify-between mx-auto py-6 w-11/12")
        p(class="font-black font-serif text-2xl text-gray-800") Scribes

        ul(class="gap-4 hidden justify-end w-1/2 lg:flex")
            li(class="cursor-pointer font-medium py-4 px-6 rounded-md text-gray-800 hover:text-teal-700") Blogs

            li(class="cursor-pointer font-medium py-4 px-6 rounded-md text-gray-800 hover:text-teal-700") Account

            button(class="bg-teal-700 font-medium py-4 px-6 rounded-md text-white hover:bg-teal-800") Create Blog

        svg(
            @click="showModal = true"
            class="w-6 h-6 lg:hidden"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="black"
        )
            path(
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
            )

</template>

<script>
    // ============================================================================================
    import NavModal from "../modal/navModal.vue"

    export default {
        name: "Header",
        components: { NavModal },
        data() {
            return {
                showModal: false
            }
        }
    }
</script>