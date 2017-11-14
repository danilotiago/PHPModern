<?php

namespace PHPModern\TesteDocument;

require 'DocumentStore.php';
require 'Implementations\HTMLDocument.php';
require 'Implementations\StreamDocument.php';
require 'Implementations\CommandOutputDocument.php';

$documentStore = new DocumentStore();

// adiciona documento HTML
$htmlDoc = new HTMLDocument('https://php.net');
$documentStore->addDocument($htmlDoc);

// adiciona documento Stream
$streamDoc = new StreamDocument(fopen('teste.txt', 'rb'));
$documentStore->addDocument($streamDoc);

// adiciona documento de comando de terminal
$cmdDoc = new CommandOutputDocument('cat /etc/hosts');
$documentStore->addDocument($cmdDoc);

print_r($documentStore->getDocuments());