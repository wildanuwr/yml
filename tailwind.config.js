/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/**/*.php', // Lokasi file view CodeIgniter
    './public/**/*.html', 
  ],
  theme: {
    extend: {
      fontSize:{
        '5xl': ['3rem', '48px'],
      },
      fontFamily: {
        segoe: ['"Segoe UI"', 'sans-serif'], // Tambahkan font di sini
      },
    },
  },
  plugins: [
    require('tailwindcss-textshadow'),
  ],
}

