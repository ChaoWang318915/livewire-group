/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './vendor/usernotnull/tall-toasts/config/**/*.php',
    './vendor/usernotnull/tall-toasts/resources/views/**/*.blade.php'
  ],
  theme: {
    extend: {
        colors: {
            'primary' : '#0abe51',
            'light' : '#F6F6F6',
            'dark' : '#171729',
            'success' : '#00C292',
            'warning' : '#FEC107',
            'info' : '#ccc',
            'secondary' : '#a3a3a3',
            'danger' : '#ff3b47',
            'muted' : '#03a9f3',
            'white' : '#fff',
            'default' : '#102F32'
          },
        fontFamily: {
            'dm-sans' : ['dm-sans'],
            'dm-sans-semibold' : ['dm-sans-semibold'],
            'dm-sans-bold' : ['dm-sans-bold'],
            'dm-sans-regular' : ['dm-sans-regular']
        }
    },
  },
  plugins: []
}