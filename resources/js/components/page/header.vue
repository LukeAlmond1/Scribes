<template lang="pug">
div
    NavModal(
        @modal-change="showModal = false"
        v-if="showModal"
    )

    nav(class="header-nav")
        p(class="logo") Scribes

        ul(class="header-list")
            li(
                :class="{ '!text-blue-700' : pathName === '/blogs' }"
                class="header-link"
            ) Blogs

            li(
                :class="{ '!text-blue-700' : pathName === '/account' }"
                class="header-link"
            ) Account

            button(class="header-create-button") Create Blog

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
    // CSS
    // ================================================================================================
    import "../../../css/components/header.css"

    // Components
    // ============================================================================================
    import NavModal from "../modal/page/navModal.vue"

    export default {
        name: "Header",
        components: { NavModal },
        mounted() {
            this.pathName = window.location.pathname;
        },
        data() {
            return {
                showModal: false,
                pathName: ""
            }
        }
    }
</script>