<?php

/**
 * NiklasTeichGoogleSiteVerification
 * 
 * Koken CMS plugin to add a Google Search Console site verification HTML tag
 * to your website instead of adding a static HTML file.
 *
 * @author NiklasTeich <niklas@millenworld.de>
 */

class NiklasTeichGoogleSiteVerification extends KokenPlugin {

  /**
   * Plugin constructor
   */

  public function __construct()
  {

    $this->require_setup = true;

    $this->register_hook('before_closing_head', 'renderMetaTag');

  }

  /**
   * Main-function to render the verification tag.
   */

  public function renderMetaTag()
  {

    echo sprintf(
      '<meta name="google-site-verification" content="%s">',
      $this->data->verification_code
    );

  }

}
