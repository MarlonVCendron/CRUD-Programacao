<?php
use App\utils\FlashMessage;

echo FlashMessage::getMessage(FlashMessage::INFO);
echo FlashMessage::getMessage(FlashMessage::ERROR);
echo FlashMessage::getMessage(FlashMessage::WARNING);
echo FlashMessage::getMessage(FlashMessage::SUCCESS); 

?>