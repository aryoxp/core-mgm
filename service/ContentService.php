<?php

class ContentService extends CoreService {
  public function getContent($key) {
    $db = self::instance('lab');
    $qb = QB::instance('content')
      ->select()
      ->where('key', QB::esc($key))
      ->limit(1);
    $result = $db->getRow($qb->get());
    return $result;
  }
}