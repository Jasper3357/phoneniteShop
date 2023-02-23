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
        'mainPurple' : '#9955EF',
        'altPurple' : '#7E4BBF',
        'mainWhite' : '#FFFFFF',
        'offWhite' : '#F6F6F6',
      },
    },
  },
  plugins: [],
}
