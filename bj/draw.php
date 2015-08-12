<?php

function male ($zeichen,$anzahl,$br=false){
for ($i=1;$i<=$anzahl;$i=$i+1){
	echo $zeichen;
	}
	if ($br){
		echo '<br>';
	}
}
echo '<pre>';

//Fenster
$breite= 11;
$laenge=($breite-3)/2;
$leer=0;

male ('X',$breite,true);

for($i=1;$i<=$laenge;$i=$i+1){
	male ('X',1);
	male (' ',$laenge);
	male('X',1);
	male(' ',$laenge);
	male('X',1,true);

}
male ('X',$breite,true);

for($i=1;$i<=$laenge;$i=$i+1){
	male ('X',1);
	male (' ',$laenge);
	male('X',1);
	male(' ',$laenge);
	male('X',1,true);

}
male ('X',$breite,true);
// N

echo ' <br>';

$breite=11;
$leer=0;
for($i=1;$i<=$breite;$i=$i+1){
	male('X',1);
	male(' ',$leer);
	male('X',1);
	male(' ',$breite-1-$leer);
	male('X',1,true);
	$leer=$leer+1;
}
// H L
echo ' <br>';

$hoch=11;
$lang=($hoch-1)/2;

for($i=1;$i<=$lang;$i=$i+1){
	male('X',1);
	male(' ',2);
	male('X',1);
	male(' ',2);
	male('X',1,true);
}

male('X',4);
male(' ',2);
male('X',1,true);

for($i=1;$i<=$lang-1;$i=$i+1){
	male('X',1);
	male(' ',2);
	male('X',1);
	male(' ',2);
	male('X',1,true);
}
male('X',1);
male(' ',2);
male('X',1);
male(' ',2);
male('X',3,true);


// M

$hoch=12;
$breit=$hoch+1;
$leer=$hoch/2;
$k=0;
$f=$breit-4;
echo' <br>';

for($i=1;$i<=$leer-1;$i=$i+1){
	male('X',1);
	male(' ',$k);
	male('X',1);
	male(' ',$f);
	male('X',1);
	male(' ',$k);
	male('X	',1,true);
	$f=$f-2;
	$k=$k+1;
}
male('X',1);
male(' ',$leer-1);
male('X',1);
male(' ',$leer-1);
male('X',1,true);

for($i=1;$i<=$leer-1;$i=$i+1){
	male('X',1);
	male(' ',$hoch-1);
	male('X',1,true);
}	

// Z

$hoch=14-2;
echo ' <br>';
male('X',$hoch,true);
for($i=1;$i<=$hoch;$i=$i+1){
	male(' ',$hoch-$i);
	male('X',1,true);
}
male('X',$hoch,true);

//Rakete nach unten

$hoch=13;
$leer=0;
$ler=0;
echo ' <br>';

male('X',$hoch,true);
for($i=1;$i<=$hoch-2;$i=$i+1){
	male('X',1);
	male(' ',$hoch-2);
	male('X',1,true);
}
male('X',$hoch,true);

for($i=1;$i<=($hoch/2);$i=$i+1){
	male(' ',$leer);
	male('X',1);
	male(' ',($hoch-2)-($leer*2));
	male('X',1);
	male(' ',$leer,TRUE);
	$leer=$leer+1;
}
male(' ',$hoch/2);
male('X',1,true);


//Y auf dem kopf

$hoch=14;
$I=($hoch/8)*5;
$V=($hoch/8)*3;
$leer=1;
echo ' <br>';

for($i=1;$i<=$I;$i=$i+1){
	male(' ',$V);
	male('X',1,true);
}
for($i=1;$i<=$V-1;$i=$i+1){
	male(' ',$V-$leer);
	male('X',1);
	male(' ',$leer*2-1);
	male('X',1,true);
	$leer=$leer+1;
}
male(' ',$V+$leer);
male('X',1,true);


// uhr?

$hoch=14;
$leer=0;
echo ' <br>';

male('X',$hoch,true);

for($i=1;$i<=($hoch/2)-2;$i=$i+1){
	male('X',1);
	male(' ',($hoch/2)-2);
	male('X',1);
	male(' ',($hoch/2)-1);
	male('X',1,true);
}
male('X',1);
male(' ',($hoch/2)-2);
male('X',$hoch/2+1,true);

for($i=1;$i<=($hoch/2)-2;$i=$i+1){
	male('X',1);
	male(' ',($hoch/2)-3-$leer);
	male('X',1);
	male(' ',($hoch/2)+$leer);
	male('X',1,True);
	$leer=$leer+1;
}
male('X',$hoch,true);
