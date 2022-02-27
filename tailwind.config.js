module.exports = {
  content: [
    "./*.{php,js}",
    "./inc/*.{php,js}",
    "./widgets/*.{php,js}",
    "./pages/**/*.{php,js}",
    "./template-parts/**/*.{php,js}"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        'poppins' : 'Poppins, sans-serif',
      }
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
