(function () {
  var url = "/wp-content/plugins/seo-author-social/social-images/",
  social = {
    "facebook": "http://www.facebook.es/JardineraAmable/",
    "instagram": "https://www.instagram.com/jardineraamable/",
    "twitter": "https://twitter.com/JardineraAmable",
    "pinterest": "https://www.pinterest.es/plantasyfloresonline",
    "google-plus": "https://plus.google.com/communities/101559261730088853912"
  }, html = "",
  elementTemplate = function (key, value) {
    return '<li style="background-image:url(\'' + url + key + '.png\')"><a href="' + value + '"></a></li>';
  };
  for (var element in social) {
    html += elementTemplate(element, social[element]);
  }
  jQuery('#author-socialmedia-elements').html(html);
})(jQuery);
