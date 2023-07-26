/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
	],
	theme: {
		extend: {
			gridTemplateRows: {
				"12": "repeat(12, minmax(0, 1fr))",
			},
			gridRow: {
				"span-11": "span 11 / span 11",
				"span-12": "span 12 / span 12",
			},
		},
	},
	plugins: [],
	darkMode: 'class',
};
