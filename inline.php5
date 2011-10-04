<?php

public function getFeedObject($title, $description)
    {
      global $wgSitename, $wgContLanguageCode, $wgFeedClasses, $wgTitle;
      $feedTitle = "$wgSitename - {$title} [$wgContLanguageCode]";
      if (!isset($wgFeedClasses[$this->format]))
        return false;
      return new $wgFeedClasses[$this->format]
      ($feedTitle, htmlspecialchars());
    }
?>