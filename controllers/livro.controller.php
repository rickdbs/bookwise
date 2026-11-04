<?php

$livro = $database->query
(
  "SELECT * FROM livros WHERE id = :id",

  Livro::class,

  ['id' => $_REQUEST['id']]

)->fetch(); //($_REQUEST['id']);


view('livro', compact('livro'));

?>