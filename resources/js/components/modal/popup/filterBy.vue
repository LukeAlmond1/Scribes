<template lang="pug">
nav()
    ul(class="bg-white cursor-pointer drop-shadow flex flex-col overflow-hidden py-2 rounded-md")
        li(
            v-for="(option, index) in options"
            :key="index"
            @click="handleSelect(option)"
            :class="{ 'font-medium text-teal-700': option === selectedFilterOpt }"
            class="py-3 px-4 text-gray-800 hover:bg-gray-50"
        ) {{ option }}

</template>

<script>
    // ============================================================================================
    export default {
        name: "FilterBy",
        props: {
            selectedFilterOpt: {
                default: "",
                type: String
            }
        },
        data() {
            return {
                options: [
                    "Verified authors",
                    "Views < 100",
                    "Shares < 100",
                    "None"
                ]
            }
        },
        methods: {
            handleSelect(opt) {
                this.$emit("change-filter-opt", opt);

                setTimeout(() => {
                    this.$emit("close-filter-modal")
                }, 500);
            }
        }
    }
</script>