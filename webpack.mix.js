let mix = require('laravel-mix');

// 3. Merge and compile multiple scripts to dist/app.js
// mix.js(['src/js/app.js', 'src/another.js'], 'dist/app.js');
mix.options({
    // Don't perform any css url rewriting by default
    processCssUrls: false,
});
mix.js('src/js/main.js', 'assets/js/')
.js('src/js/admin.js', 'assets/js/')
.js('src/js/home.js', 'assets/js/')
.css('src/css/main.css', 'assets/css/')
.css('src/css/admin.css', 'assets/css/')
.css('src/css/home.css', 'assets/css/',{
    processUrls: false,
})
.sass('src/sass/app.scss', 'assets/css/');