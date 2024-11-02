/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js'
  ],
  theme: {
    extend: {
      boxShadow: {
        1: "0 0 30px 0px rgba(0, 0, 0, 0.05)",
        2: "0 0 20px -8px #bc8971",
      },
    },
  },
  plugins: [],
}

