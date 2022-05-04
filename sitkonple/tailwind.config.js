module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontfamily:{
        'poppins': [ 'Poppins', 'sans-serif'],
        'roboto': [ 'Roboto', 'sans-serif']
      }
    },
  },
  plugins: [],
}
