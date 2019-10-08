'use strict';

const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
	mode: 'development',
	entry: './src/js/app.js',
	output: {
		filename: 'js/bundle.js',
		path: path.resolve(__dirname, 'globals/assets/')
	},
	// optimization: {
	// 	splitChunks: {
	// 		cacheGroups: {
	// 			styles: {
	// 				name: 'bundle',
	// 				test: /\.css$/,
	// 				chunks: 'all',
	// 				enforce: true,
	// 			},
	// 		},
	// 	},
	// },
	plugins:[
		new MiniCssExtractPlugin({
			filename: 'css/bundle.css',
		}),
	],
	module: {
		rules: [
			// {
			// 	test: /\.(scss)$/,
			// 	use: [
			// 		{
			// 			// Adds CSS to the DOM by injecting a `<style>` tag
			// 			loader: 'style-loader'
			// 		},
			// 		{
			// 			// Interprets `@import` and `url()` like `import/require()` and will resolve them
			// 			loader: 'css-loader'
			// 		},
			// 		{
			// 			// Loader for webpack to process CSS with PostCSS
			// 			loader: 'postcss-loader',
			// 			options: {
			// 				plugins: function() {
			// 					return [
			// 						require('autoprefixer')
			// 					];
			// 				}
			// 			}
			// 		},
			// 		{
			// 			// Loads a SASS/SCSS file and compiles it to CSS
			// 			loader: 'sass-loader'
			// 		}
			// 	]
			// }
			{
				test: /\.(sa|sc|c)ss$/,
				use: [
					{
						loader: MiniCssExtractPlugin.loader,
						options: {
							hmr: process.env.NODE_ENV === 'development',
						},
					},
					'css-loader',
					{
						// Loader for webpack to process CSS with PostCSS
						loader: 'postcss-loader',
						options: {
							plugins: function() {
								return [
									require('autoprefixer')
								];
							}
						}
					},
					'sass-loader',
				],
			},
		]
	}
};
