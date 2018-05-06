<?php
/*
Plugin Name: Seo Social Author
Plugin URI: https://www.jjlmoya.es/plugins/seo-social-author
Description: Plugin para crear de un post una llamada a todos los hijos de esta categoría
Author: jjlmoya
Author URI: jjlmoya
License: GPLv2 o posterior
*/
function seo_social_author($content) {
  wp_enqueue_style('seo-author-social', plugins_url("seo-author-social/").'styles.css');
  wp_enqueue_script('seo-author-social', plugins_url("seo-author-social/").'script.js');
  return $content . social_author_template();
}

function social_author_template() {
  return '<div class="author-wrapper">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
            <div class="author-avatar"
                 style="background-url()">
                 '.get_avatar(get_the_author_meta('ID')).'
                 </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="">Escrito orgullosamente por</div>
        <div class="author-title">
          <span class="author-name">
             '.get_the_author().'
           </span>
        </div>
        <div class="author-socialmedia">
            <ul id="author-socialmedia-elements"></ul>
        </div>
      </div>
    </div>
  </div>';
}

add_filter( 'the_content', 'seo_social_author' );
?>
