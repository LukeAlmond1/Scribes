<template lang="pug">
a(
    class="bg-gray-50 border-2 border-gray-50 font-semibold flex h-16 items-center justify-center px-4 rounded-md text-gray-800 lg:h-12"
    rel="noopener noreferrer nofollow"
    target="_blank"
) {{ value }}

</template>

<script>
    // ================================================================================================
    export default {
        name: "Tag",
        props: {
            value: {
                default: "",
                type: String
            }
        }
    }
</script>
