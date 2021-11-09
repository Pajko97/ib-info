module.exports = {
    theme: {
        extend: { padding: { "fluid-video": "56.25%" },  zIndex: {
          '-10': '-10',
         } },
      },
    plugins: [
      require('@tailwindcss/aspect-ratio'),
      // ...
    ],
  }