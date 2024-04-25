/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html", "./ecommerce/*.html", "./assets/**/*.js",
    "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  "./node_modules/tw-elements/dist/js/**/*.js",],
  theme: {
    extend: {
      colors: {
        "brand-blue": "#A4CAFE",
        "dark-blue": "#25252D",
        fontFamily: {
          'sans': ['ui-sans-serif', 'system-ui'],
          'serif': ['ui-serif', 'Georgia'],
          'mono': ['ui-monospace', 'SFMono-Regular'],
          'display': ['Oswald'],
          'body': ['Open Sans'],
        },
      },
    },
  },
  plugins: [require("tailgrids/plugin","tw-elements/dist/plugin.cjs")],
}
