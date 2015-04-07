var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  /* Unit Tests*/
  mix.phpSpec();

  /* CSS */
  mix.less('bootstrap.less');
  mix.scriptsIn("resources/assets/scripts");

  mix.scripts(
    [
      'affix.js',
      'alert.js',
      'button.js',
      'carousel.js',
      'collapse.js',
      'dropdown.js',
      'modal.js',
      'popover.js',
      'scrollspy.js',
      'tab.js',
      'tooltip.js',
      'transition.js'
    ], 'public/js/bootstrap.js')
});
