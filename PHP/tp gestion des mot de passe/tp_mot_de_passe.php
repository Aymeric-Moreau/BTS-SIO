<?php
//5 = sha256
//Aymeric Moreau

echo "-1- ";

$hashed_password = crypt('Vive#Les#S1aux', '$1$deSel');
echo $hashed_password , "\n";

echo "  -2-    ";

$hashed_password1 = crypt('Vive#Les#S1aux', '$5$deSel');
echo $hashed_password1 , "\n";

echo "  -3-    ";
$hashed_password2 = crypt('Vive#Les#S1aux', '$6$deSel');
echo $hashed_password2 , "\n";

echo "  -4-    ";

$hashed_password3 = crypt('Vive#Les#S1aux', '$5$duSelFin');
echo $hashed_password3 , "\n";

echo "  -5-    ";

$hashed_password4 = crypt('Vive#Les#S1aux', '$5$duGrosSel');
echo $hashed_password4 , "\n";

echo "    - 6 -     ";

$hashed_password5 = password_hash("Vive#Les#S1aux", PASSWORD_BCRYPT);
echo $hashed_password5 , "\n";

echo "    - 7 -     ";

$t1 = microtime();
$hashed_password6 = password_hash("Vive#Les#S1aux", PASSWORD_BCRYPT);
echo $hashed_password6  , "\n";
$temps = (float) microtime() - (float) $t1;
echo "-  duree exécution = $temps \n";

echo "    - 8 -     ";

$t1 = microtime();
$cost_factor = 5; 

$options = [
    'cost' => $cost_factor,
];

$hashed_password7 = password_hash("Vive#Les#S1aux", PASSWORD_BCRYPT, $options);
echo $hashed_password7  , "\n";
$temps = (float) microtime() - (float) $t1;
echo "-  duree exécution = $temps \n";

echo "    - 9 -     ";

$t1 = microtime();
$cost_factor = 15; 

$options = [
    'cost' => $cost_factor,
];

$hashed_password8 = password_hash("Vive#Les#S1aux", PASSWORD_BCRYPT, $options);
echo $hashed_password8  , "\n";
$temps = (float) microtime() - (float) $t1;
echo "-  duree exécution = $temps \n";

echo "    - 10 -     ";


if($ok = password_verify("M0t2Pass", '$2y$12$SuP21Kvq9xb2JXW7oSxOLudahWZdHVRvBSl1xzYPRhKurxiQTxjGW')){
echo "ok";
}else{
    echo "non";
}


?>