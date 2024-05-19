/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,js}"],
  theme: {
    colors: {
      'light-yellow': '#FAF4D3',
      'golden-yellow': '#eddd87',
      'dark-green': '#0C1814',
      'light-green': '#3F7E6B',
      'andrea-guld': '#D1ac00',
    },
    fontSize: {
      base: '1rem',
      xl: '1.312rem',
      '2xl': '1.688rem',
      '3xl': '2.250rem',
      '4xl': '2.938rem',
      '5xl': '3.812rem',
      '6xl': '5rem',
    },
    boxShadow: {
      'frost-shadow': '0px 1px 16px 0px rgba(227, 222, 255, 0.20) inset, 0px 4px 18px 0px rgba(154, 146, 210, 0.20) inset, 0px 2px 36px -48px rgba(202, 172, 255, 0.10) inset, 0px -62px 68px -64px rgba(96, 68, 144, 0.10) inset, 0px 7px 11px -4px rgba(255, 255, 255, 0.40) inset, 0px 14px 24px -36px rgba(255, 255, 255, 0.20) inset'
    },
    fontFamily: {
      inconsolata: ["Inconsolata", 'monospace'],
      lato: ["Lato", 'sans-serif'],
    },
    extend: {},
  },
  plugins: [],
}

