<template lang="pug">
nav()
    ul(
        v-if="data"
        class="list-container"
    )
        li(
            v-for="(option, index) in data"
            @click="handleSelect(option)"
            :key="index"
            :class="{ 'font-medium text-gray-800': option === selection }"
            class="list-item --select"
        ) {{ option }}

</template>

<script>
    // Mixins
    // ================================================================================================
    import popupMixin from "../../components/mixins/popupMixin.js"

    // CSS
    // ================================================================================================
    import "../../../css/ui/popup.css"

    // ================================================================================================
    export default {
        name: "PopUp",
        mixins: [popupMixin]
    }
</script>
