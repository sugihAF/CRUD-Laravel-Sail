const mix = require('laravel-mix');
const path = require('path');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
       'resources/css/app.css',
   ], 'public/css/app.css')
   .webpackConfig({
       module: {
           rules: [
               {
                   test: /\.vue$/,
                   loader: 'vue-loader'
               },
           ],
       },
       resolve: {
           alias: {
               'vue$': 'vue/dist/vue.esm.js',
               '@': path.resolve('resources/js'),
           },
       },
   })
   .options({
       processCssUrls: false
   })
   .vue();