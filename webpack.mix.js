let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
let glob = require("glob-all");
let PurgecssPlugin = require("purgecss-webpack-plugin");

// Custom PurgeCSS extractor for Tailwind that allows special characters in
// class names.
// 
// https://github.com/FullHuman/purgecss#extractor
class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g) || [];
  }
}

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .postCss('resources/assets/styles/app.css', 'public/css', [
        tailwindcss('./tailwind.js'),
    ]);

if (mix.inProduction()) {
    mix.version();
	mix.webpackConfig({
		plugins: [
		  new PurgecssPlugin({

		    // Specify the locations of any files you want to scan for class names.
		    paths: glob.sync([
		      path.join(__dirname, "resources/views/**/*.blade.php"),
		      path.join(__dirname, "resources/assets/js/**/*.vue"),
		      path.join(__dirname, "resources/assets/js/**/*.js")
		    ]),
		    whitelist: [
		    	'autocomplete-wrapper em',
		    	'loading',
		    	'dot'
		    ],
    		whitelistPatterns: [
    			/^em$/,
    			/^carbon-/,
    			/^botui-/,
    			/^autocomplete-/,
    			/^tt-dropdown-menu/,
    			/^twitter-typeahead/
    		],
		    extractors: [
		      {
		        extractor: TailwindExtractor,

		        // Specify the file extensions to include when scanning for
		        // class names.
		        extensions: ["html", "js", "php", "vue"]
		      }
		    ]
		  })
		]
	});
}