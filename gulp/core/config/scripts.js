var path = require('path');
var webpack = require('webpack-stream').webpack;
var TerserPlugin = require('terser-webpack-plugin');

// utils
var deepMerge = require('../utils/deepMerge');

// config
var assets = require('./common').paths.assets;

/**
 * Script Building
 * Configuration
 * Object
 *
 * @type {{}}
 */
module.exports = deepMerge({
	paths: {
		watch: assets.src + '/js/**/*.js',
		src: [
			assets.src + '/js/*.js',
			'!' + assets.src + '/js/**/_*'
		],
		dest: assets.dest + '/js',
		clean: assets.dest + '/js/**/*.{js,map}'
	},

	options: {
		webpack: {

			// merged with defaults
			// for :watch task
			watch: {
				mode: 'development',
				cache: true,
				watch: true,
				devtool: 'eval'
			},


			// merged with defaults
			// for :dev task
			dev: {
				mode: 'development',
				devtool: 'eval'
			},


			// merged with defaults
			// for :prod task
			prod: {
				mode: 'production',
				plugins: [
					new webpack.optimize.OccurrenceOrderPlugin(true),
				],
				optimization: {
					minimize: true,
					minimizer: [
						new TerserPlugin({
							terserOptions: {
								output: {
									comments: false,
								},
							},
							extractComments: false,
						}),
					]
				}
			},

			defaults: {
				resolve: {
					extensions: ['.js', '.jsx']
				},
				output: {
					chunkFilename: 'chunk-[name].js'
				},
				stats: {
					colors: true
				},
				module: {
					rules: [
						{
							enforce: 'pre',
							test: /\.js$/,
							exclude: /node_modules/,
							loader: 'eslint-loader',
							options: {
								emitWarning: true
							}
						},
						{
							test: /\.js$/,
							exclude: /node_modules/,
							loader: 'babel-loader',
							options: {
								presets: ['env'],
								plugins: ['transform-runtime']
							}
						}
					]
				},
				plugins: [
					new webpack.ProvidePlugin({
						$: 'jquery',
						jQuery: 'jquery',
						'window.jQuery': 'jquery'
					})
				]
			}
		}
	}
});
