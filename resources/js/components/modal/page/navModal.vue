<template lang="pug">
div(class="absolute bg-white h-full py-6 w-full z-50")
  nav(class="h-full mx-auto relative w-11/12")
    //- Nav header
    //- -----------------------------------------------------------------------------------
    header(class="border-b-2 flex items-center justify-between mb-6 pb-6")
      p(class="font-black font-serif text-2xl") Scribes

      svg(
        @click="$emit('modal-change')"
        class="w-6 h-6"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="black"
      )
        path(

          stroke-linejoin="round"
          stroke-width="2"
          d="M6 18L18 6M6 6l12 12"
        )

    ul()
      //- Blogs tab
      //- -----------------------------------------------------------------------------------
      li(class="bg-gray-50 font-bold flex gap-3 items-center mb-4 px-6 py-4 rounded-md text-gray-800 text-lg")
        blog-icon()

        p(:class="{ 'text-teal-800' : pathName === '/blogs' }") Blogs

      //- Account tab
      //- -----------------------------------------------------------------------------------
      li(class="bg-gray-50 font-bold flex gap-3 items-center px-6 py-4 rounded-md text-gray-800 text-lg")
        account-icon()

        p(:class="{ 'text-teal-800' : pathName === '/account' }") Account

    //- Create blog
    //- -----------------------------------------------------------------------------------
    button(class="absolute bottom-0 bg-teal-700 font-bold py-6 rounded-md text-white w-full hover:bg-teal-800") Create Blog

</template>

<script>
  // ============================================================================================
  import Blog from "../../icons/blog.vue"
  import Account from "../../icons/account.vue"

  // ============================================================================================
  export default {
    name: "NavModal",
    components: {
      "blog-icon": Blog,
      "account-icon": Account
    },
    mounted() {
      this.pathName = window.location.pathname;
    },
    data() {
      return {
        pathName: ""
      }
    }
  }
</script>