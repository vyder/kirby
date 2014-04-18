<?php

/**
 * Language
 *
 * A single language object
 */
class Language extends Obj {

  public function __construct($site, $lang) {

    $this->code    = $lang['code'];
    $this->name    = $lang['name'];
    $this->locale  = $lang['locale'];
    $this->default = isset($lang['default']) and $lang['default'];
    $this->url     = isset($lang['url']) ? url($lang['url']) : url($lang['code']);

  }

}


