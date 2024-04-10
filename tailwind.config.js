module.exports = {
  content: ["./**/*.php", "./src/**/*.js", "./node_modules/flowbite/**/*.js", "darkMode: 'selector'",],

  plugins: [require("@tailwindcss/typography", "@tailwindcss/forms", "require('flowbite/plugin')")],
  
  theme: {
    fontSize: {
      sm: '0.8rem',
      base: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem'
    },

    fontFamily: {
      'sans': ['IBM Plex Sans', 'sans-serif',],
    },
    container: {
      center: true,
    },
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
      
      '3xl': '1750px',
      // => @media (min-width: 1750px) { ... }
    },
  },
}
