<template lang="pug">
nav()
  ul(
    v-if="data"
    class="bg-white border-2 border-gray-50 cursor-pointer flex flex-col overflow-hidden py-2 rounded-md lg:drop-shadow lg:border-none"
  )
    li(
      v-for="(option, index) in data"
      @click="handleSelect(option)"
      :key="index"
      :class="{ 'font-medium text-gray-800': option === selection }"
      class="border-b-2 border-gray-50 py-3 px-4 text-gray-800 hover:bg-gray-50 --select"
    ) {{ option }}

</template>

<script>
  // ================================================================================================
  export default {
    name: "PopUp",
    props: {
      data: {
        default: () => ([]),
        type: Array
      },
      type: {
        default: "",
        type: String
      },
      selection: {
        default: "",
        type: String
      }
    },
    methods: {
      handleSelect(opt) {
        this.$emit(`change-${this.type}`, opt);

        setTimeout(() => {
          this.$emit(`close-${this.type}`);
        }, 500);
      }
    }
  }
</script>
