/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: ['./resources/**/*.blade.php','./resources/**/*.js'],
  theme: {
    extend: {
      fontFamily: { display: ['Syne','sans-serif'], body: ['DM Sans','sans-serif'] },
      colors: {
        brand: { 400:'#6A9FFF',500:'#3B7BFF',600:'#2563EB' },
        dark: { 900:'#06091A',800:'#0B1028',700:'#101530',600:'#141A38' }
      }
    }
  },
  plugins: []
};
