/** @type {import('tailwindcss').Config} */
export default {
  content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
          ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        'primary': '#fca103',
        'secondary': '#f5ba6e',
        'hover': '#faedcd',
    },
    screens: {
      '2xl': '1320px',
    },
  },
  plugins: [],
  }
}