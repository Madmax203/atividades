<?php

function media($nota1, $nota2, $nota3, $nota4){
	$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
	echo $media;
}

media(10, 10, 10, 10);