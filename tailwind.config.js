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
            primarycolor: '#AD1463',
            secondarycolor: '#FA76BA',
        },
    },
  },
  plugins: [],
}

