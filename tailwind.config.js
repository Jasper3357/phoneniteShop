/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'franklin' : ['Libre Franklin', 'sans-serif'],
      },
      colors: {
        'mainDark': '#313131',
      },
    },
  },
  plugins: [],
}
