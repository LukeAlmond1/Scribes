<template lang="pug">
aside(
    @click="$emit('open-select-modal')"
    class="border-2 border-gray-100 cursor-pointer flex h-16 items-center justify-between mb-2 px-4 rounded-md text-gray-500 xl:w-48 lg:h-12"
)
    p() {{ selection }}

    slot(name="icon")

</template>

<script>
    // ================================================================================================
    export default {
        name: "Select",
        props: {
            selection: {
                default: "",
                type: String
            }
        }
    }
</script>
