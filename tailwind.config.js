/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.vue",
  ],
  theme: {
      extend: {
        backgroundImage: {
          'blog-cover': "url('/public/covers/blog.jpg')",
          'auth-cover': "url('/public/covers/auth.jpg')"
      },
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      }
    },
  },
  plugins: [],
}
