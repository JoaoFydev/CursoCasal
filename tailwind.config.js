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
            primarycolor: '#B3B47A',
            secondarycolor: '#2F5F37',
        },
    },
  },
  plugins: [],
}

