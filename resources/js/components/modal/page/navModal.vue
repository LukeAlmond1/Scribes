<template lang="pug">
div(class="modal-container")
    nav(class="modal-nav")
        //- Nav header
        //- -----------------------------------------------------------------------------------
        header(class="modal-header")
            p(class="logo") Scribes

            close-modal(@click="$emit('modal-change')")

        ul()
            //- Blogs tab
            //- -----------------------------------------------------------------------------------
            li(class="modal-nav-link")
                blog-icon()

                p(:class="{ 'text-gray-800' : pathName === '/blogs' }") Blogs

            //- Account tab
            //- -----------------------------------------------------------------------------------
            li(class="modal-nav-link")
                account-icon()

                p(:class="{ 'text-gray-800' : pathName === '/account' }") Account

        //- Create blog
        //- -----------------------------------------------------------------------------------
        button(class="modal-create-button") Create Blog

</template>

<script>
    // Mixins
    // ============================================================================================
    import navModalMixin from "../../mixins/navModalMixin"

    // CSS
    // ================================================================================================
    import "../../../../css/components/navModal.css"

    // ============================================================================================
    export default {
        name: "NavModal",
        mixins: [navModalMixin]
    }
</script>