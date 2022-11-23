/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
	  colors: {
      'mrfix_brown': '#b19982',
	  'mrfix_bg': '#f6f6f6',
	  },
	},
  },
  plugins: [],
}
