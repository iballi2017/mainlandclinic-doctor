/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        display: '"Poppins", sans-serif', // Adds a new `font-display` class
      }},
    colors: {
      'primary': {
        '500': 'hsl(108, 93%, 29%)',
        '600': 'hsl(97, 58%, 24%)',
        '700': 'hsl(0, 0%, 36%)',
      },
      'accent': {
        '50': '#c3c3c3',
        '300': 'hsl(214, 37%, 96%)',//#F2F5F9;
        '400': 'hsl(0, 0%, 95%)',//#F3F3F3;
        '500': 'hsl(216, 42%, 95%)', //#eef2f8;
        '600': 'hsl(0, 0%, 85%)',//#D9D9D9;
        '650': '#c3c3c3',//#c3c3c3;
        '700': '#c4c4c4',//#c4c4c4;
        '750': '#828282', //#828282;
      },
      'neutral': {
        '500': '#ffffff',
      },
      'secondary': {
        '500': 'hsl(114, 28%, 14%)', //#1b2c19;
      },
      'alt': {
        '100': 'hsl(277, 93%, 29%)', //#59058D;
        '200': ' hsl(223, 70%, 63%)', //#5F84E3;
      }



    },
    fontFamily: {
      primary: ['Open Sans', 'sans-serif'],
      secondary: ['Poppins', 'sans-serif'],
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

