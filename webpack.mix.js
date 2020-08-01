const { mix } = require('laravel-mix');

const SRC_JS = 'src/js',
      SRC_CSS = 'src/sass',
      SRC_IMAGES = 'src/images',
      ASSETS_FOLDER = './wp-content/themes/oceanhouse/assets';

mix.sass(`${SRC_CSS}/style.scss`, ASSETS_FOLDER)
   // .js(`${SRC_JS}/app.js`, ASSETS_FOLDER)
   .options({
      processCssUrls: false
   })
   .copyDirectory(SRC_IMAGES, `${ASSETS_FOLDER}/images`);