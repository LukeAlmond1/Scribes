/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.vue",
  ],
  theme: {
      extend: {
        backgroundImage: {
          'blog-cover': "url('/public/covers/blog.jpg')"
      }
    },
  },
  plugins: [],
}
