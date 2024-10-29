/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./*.{css,js,php}", "./assets/**/*.{js,css,php}"],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      screens: {
        '2xl': '1536px',
        '3xl': '1792px',
        '4xl': '2048px',
        '5xl': '2304px',
        '6xl': '2688px',
        '7xl': '3072px',
        '8xl': '3584px',
        '9xl': '4096px',
      }
    }
  },
  important: true,
  plugins: [],
}