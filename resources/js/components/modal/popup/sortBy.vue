<template lang="pug">
nav()
    ul(class="bg-white cursor-pointer drop-shadow flex flex-col overflow-hidden py-2 rounded-md")
        li(
            v-for="(option, index) in options"
            :key="index"
            @click="handleSelect(option)"
            :class="{ 'font-medium text-teal-700': option === selectedSortOpt }"
            class="py-3 px-4 text-gray-800 hover:bg-gray-50"
        ) {{ option }}

</template>

<script>
    // ============================================================================================
    export default {
        name: "SortBy",
        props: {
            selectedSortOpt: {
                default: "",
                type: String
            }
        },
        data() {
            return {
                options: [
                    "Popular",
                    "Least popular",
                    "Upload date"
                ]
            }
        },
        methods: {
            handleSelect(opt) {
                this.$emit("change-sort-opt", opt);

                setTimeout(() => {
                    this.$emit("close-sort-modal")
                }, 500);
            }
        }
    }
</script>