/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
	  colors: {
      'mrfix_brown': '#b19982',
      'mrfix_dark': '#2c2f31',
	  'mrfix_bg': '#f6f6f6',
	  'mrfix_grey': '#848484',
	  },
	},
  },
  plugins: [],
}
