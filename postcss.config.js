module.exports = (context) => ({
	map: context.options.map,
	plugins: {
		'postcss-import': {},
		'postcss-nesting': {},
		autoprefixer: {},
		cssnano: {},
	}
});