<?php

class HomeController extends CoreController {
  public function index() {
    $this->ui->useCoreLib('core-ui');
    $this->ui->useStyle('css/style.css');
    $this->ui->view('home.php');
  }
  public function publication() {
    include('mgm/lib/bibtex/lib_bibtex.inc.php');
    $bibs = [];
    $dir    = 'mgm/file';
    $files = scandir($dir);
    foreach($files as $f) {
      if ($f == '.' || $f == '..') continue;
      $b = new Bibtex($dir . '/' . $f);
      $b->Select(array('author' => '/.*/i'));
      $b->PrintBibliography();
      $bibs += $b->bibarr;
    }
    $this->ui->useCoreLib('core-ui');
    $this->ui->useStyle('css/style.css');
    $this->ui->view('publication.php', array('bib' => $bibs));
  }
  public function members() {
    $this->ui->useCoreLib('core-ui');
    $this->ui->useStyle('css/style.css');
    $this->ui->view('members.php');
  }
  public function research() {
    $this->ui->useCoreLib('core-ui');
    $this->ui->useStyle('css/style.css');
    $this->ui->view('research.php');
  }
}