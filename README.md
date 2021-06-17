<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Tectonica Webpack Starter Theme 🚀
A minimal Wordpress theme with a basic Webpack configuration.


## npm scripts
+ __`$ npm run build`:__ build production version of script.
+ __`$ npm run dev`:__ build developement version of script and watch for changes.


## Setup

### Developement
To start a project follow the next steps:
1. Save the starter theme in the __themes__ folder from your Wordpress installation (wp-content > themes).
2. In the terminal, navigate to the theme folder and run `$ npm i`.
3. Set `WP_DEBUG = true` in the __wp-config.php__ file.
4. Run `$ npm run start`.

Now we are ready to start developing the theme __but__ we should take care of some requirements:

  + __Styles:__ every style of the theme should be written inside the __styles folder__ (assets > src > styles). When creating a new SCSS file remember to import it inside the __main.scss__ file, otherwise the style changes won't be applied to the theme.


  + __Fonts:__ every font __must__ be saved in the __fonts folder__ (assets > src > fonts). Then, in the assets-loader.js file (assets > src > js) import each of them individially.


  + __Javascript:__ every new javascript file should be created inside de __js folder__ (assets > src > js) and then imported in the main.js file.


  + __style.css:__ this file __must__ and __just__ include the details about the theme in the form of comments. No two themes are allowed to have the same details listed in their comment headers, as this will lead to problems in the theme selection dialog. We should make sure we change this information as soon as we start the project.

### Deployment
To deploy a theme follow the next steps:
1. In the terminal go to the theme folder. Then run `$ npm run build`.
2. Open the __wp-config.php__ file and set `WP_DEBUG = false`.

Now the theme will load minified assets from the __dist__ folder and is ready to be deployed.

## Theme Structure
+ __assets:__
  + __dist:__ compiled files to be used in production mode.
  + __src:__ original files used during development mode.
    + __js:__ javascript files.
    + __styles:__ folder with the SCSS files.
    + __images:__ image files.
    + __fonts:__ font files.


+ __inc:__ function files.
  + __cleanup.php:__ to remove undesired stuff that Wordpress loads by default.
  + __enqueue.php:__ to enqueue the theme javascript and styles files.
  + __menu-management.php:__ to create the theme menus.
  + __helpers.php:__ to add the theme custom functions.
  + __theme-support.php:__ to add the different theme supports that Wordpress offers for the current theme.
  
  
+ __static:__ static files.


+ __.gitignore:__ ignore node_modules and other files when commiting.


+ __footer.php__


+ __functions.php:__ file that retrieves all the files from inc folder.


+ __index.php__ 


+ __header.php__


+ __package.json__


+ __readme.md__


+ __screenshot.png:__ the theme screenshot. Wordpress will use it as the preview of the theme. The recomended size according to the Wordpress Codex is 1200×900px.


+ __style.css:__ file with the Wordpress theme information.


+ __webpack.common.js:__ file the shared options.


+ __webpack.dev.js:__ file witht the configuration for development mode.


+ __webpack.prod.js:__ file witht the configuration for production mode.


## Webpack Dependencies

| Name             | Description                                                        |
| ---------------- | ------------------------------------------------------------------ |
| [css-loader] | interprets @import and url() like import/require() and will resolve them. |
| [css-minimizer-webpack-plugin] |  uses cssnano to optimize and minify your CSS. |
| [image-minimizer-webpack-plugin] | optimize (compress) all images using imagemin. |
| [imagemin-gifsicle] | to optimize gif files |
| [imagemin-jpegtran] | to optimize jpg and jpeg files |
| [imagemin-optipng] | to optimize png files |
| [imagemin-svgo] | to optimize svg files |
| [mini-css-extract-plugin] | extracts CSS into separate files. It creates a CSS file per JS file which contains CSS. |
| [sass] | It provides a command-line sass executable and a Node.js API. |
| [sass-loader] | Loads a Sass/SCSS file and compiles it to CSS. |
| [style-loader] | Inject CSS into the DOM. |
| [webpack-dev-server] | Use webpack with a development server that provides live reloading. This should be used for __development__ only. |
| [webpack-merge] | provides a merge function that concatenates arrays and merges objects creating a new objec. |

[css-loader]: https://www.npmjs.com/package/css-loader
[css-minimizer-webpack-plugin]: https://www.npmjs.com/package/css-minimizer-webpack-plugin
[image-minimizer-webpack-plugin]: https://www.npmjs.com/package/image-minimizer-webpack-plugin
[imagemin-gifsicle]: https://www.npmjs.com/package/imagemin-gifsicle
[imagemin-jpegtran]: https://www.npmjs.com/package/imagemin-jpegtran
[imagemin-optipng]: https://www.npmjs.com/package/imagemin-optipng
[imagemin-svgo]: https://www.npmjs.com/package/imagemin-svgo
[mini-css-extract-plugin]: https://www.npmjs.com/package/mini-css-extract-plugin
[sass]: https://www.npmjs.com/package/sass
[sass-loader]: https://www.npmjs.com/package/sass-loader
[style-loader]: https://www.npmjs.com/package/style-loader
[webpack-dev-server]: https://www.npmjs.com/package/webpack-dev-server
[webpack-merge]: https://www.npmjs.com/package/webpack-merge



## TO DO
- [x] Load Fonts
- [x] Create a SCSS 7-1 pattern structure
- [x] Finish _style.css_ Wordpress Theme Information
- [x] Optimize Images
- [x] Inc: Add php files
- [x] Styles: Add Bootstrap 5
- [ ] Styles: Bootstrap tree-shacking?_? improve way of loading it
- [ ] Add Babel Javascript compiler


## Copyright and License
This version is under the [GPLv2 or later](https://www.gnu.org/licenses/)
