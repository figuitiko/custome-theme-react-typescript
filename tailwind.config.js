module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: { 
   
    extend: {
     
      gridTemplateColumns: {
        // Simple 16 column grid
      

        // Complex site-specific column configuration
        'sidebar': '300px minmax(900px, 1fr)',
        
      },
      gridTemplateRows:{
        'main':'auto auto auto'
      },
      colors: {
        'main-color': '#23457c',
      },
      backgroundImage: {
        'main-w-bg': "url('img/home/bg-widget.png')",
        'main-w-bg-m': "url('img/home/bg-widget-mobile.png')",
      }
      
    },
  },
  plugins: [],
}

