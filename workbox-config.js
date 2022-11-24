module.exports = {
	globDirectory: './',
	globPatterns: [
		'**/*.{js,html,css,svg,avif,png}'
	],
	swDest: 'src/sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};
