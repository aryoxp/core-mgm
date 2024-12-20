<?php
use Michelf\MarkdownExtra;

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
    $service = new ContentService();
    $content = $service->getContent('lab-members');
    // var_dump($content);
    if ($content && $content->type == 'md') {
      require_once 'mgm/lib/Michelf/MarkdownExtra.inc.php';
      $parser = new MarkdownExtra;
      $parser->empty_element_suffix = ">";
      $content->content = $parser->transform($content->content);
    }

    $this->ui->useCoreLib('core-ui');
    $this->ui->useStyle('css/style.css');
    $this->ui->view('members.php', ['content' => $content]);
  }
  public function rights() {
    $service = new ContentService();
    $content = $service->getContent('haki');
    if ($content && $content->type == 'md') {
      require_once 'mgm/lib/Michelf/MarkdownExtra.inc.php';
      $parser = new MarkdownExtra;
      $parser->empty_element_suffix = ">";
      $content->content = $parser->transform($content->content);
    }

    $this->ui->useCoreLib('core-ui');
    $this->ui->useStyle('css/style.css');
    $this->ui->view('rights.php', ['content' => $content]);
  }
  public function research() {
    $service = new ContentService();
    $content = $service->getContent('research');
    if ($content && $content->type == 'md') {
      require_once 'mgm/lib/Michelf/MarkdownExtra.inc.php';
      $parser = new MarkdownExtra;
      $parser->empty_element_suffix = ">";
      $content->content = $parser->transform($content->content);
    }
    $this->ui->useCoreLib('core-ui');
    $this->ui->useStyle('css/style.css');
    $this->ui->view('research.php', ['content' => $content]);
  }
}