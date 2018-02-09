<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header("Content-type:image/jpeg");
$img = imagecreate(100, 100);
$vermelho = imagecolorallocate($img, 255, 0, 0);
imagejpeg($img);
imagedestroy($img);

