/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors: {
            primarycolor: '#8329B4',
            secondarycolor: '#8329B4',
        },
    },
  },
  plugins: [],
}

