<template lang="pug">
div(
    v-if="showModal"
    class="absolute bg-white h-full w-full z-50"
)
    h1 Hello

</template>

<script>
    // ============================================================================================
    export default {
        name: "NavModal",
        props: {
            showModal: {
                default: false,
                type: Boolean
            }
        }
    }
</script>