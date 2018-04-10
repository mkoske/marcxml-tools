<?php

use Piki\MarcXml\Event\RecordEvent;
use Piki\MarcXml\Listener\KeywordListener;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;

// Wire up events and event dispatcher here
$dispatcher = new EventDispatcher();
$dispatcher->addListener(
    RecordEvent::NAME, [new KeywordListener($logger), "onRecord"]);
