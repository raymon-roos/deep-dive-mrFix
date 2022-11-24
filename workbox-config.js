module.exports = {
	globDirectory: './',
	globPatterns: [
		'**/*.{js,html,css,svg,avif,png}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};