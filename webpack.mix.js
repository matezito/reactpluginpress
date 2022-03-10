let mix = require('laravel-mix');

mix.js('src/js/app.js', 'dist/js')
   .js('src/js/admin.js', 'dist/js')
   .react();