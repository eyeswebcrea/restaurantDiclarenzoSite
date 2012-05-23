<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'messages' => 
  array (
    'Senderemail' => 'Your email',
    'Sendername' => 'Your name',
    'Subject' => 'Subject',
    'Message' => 'Message',
  ),
));



return $catalogue;
