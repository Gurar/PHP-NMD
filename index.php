<?php
// 1.

// $name = 'Jezy';
// $lastname = 'Kozlovski';
// $yearOfBirth = 1990;
// $currentYear = 2021;
// echo "As esu $name $lastname  Man yra ". ($currentYear - $yearOfBirth) ." metų";
// echo "<br>";

// 2.

// $sk1 = rand(0, 4);
// $sk2 = rand(0, 4);

// if($sk1 > $sk2) {
//     if($sk2 != 0) {
//         $rez = round($sk1 / $sk2, 2);
//     }else {
//         $rez = 'Cannot Divide By Zero';
//     }
// }else {
//     if($sk1 != 0) {
//         $rez = round($sk2 / $sk1, 2);
//     }else {
//         $rez = 'Cannot Divide By Zero'; 
//     }
// }
// echo $rez; 
// echo "<br>"; 

// 3.

// $sk1 = rand(0, 25);
// $sk2 = rand(0, 25);
// $sk3 = rand(0, 25);

// if($sk1 < $sk2 && $sk2 < $sk3 || $sk3 < $sk2 && $sk2 < $sk1 ) {
//     $res =  "sk2 $sk2";
// }else if($sk2 < $sk1 && $sk1 < $sk3 || $sk3 < $sk1 && $sk1 < $sk2) {
//     $res =  "sk1 $sk1";
// }else if($sk1 < $sk3 && $sk3 < $sk2 || $sk2 < $sk3 && $sk3 < $sk1) {
//     $res =  "sk3 $sk3";
// }else {
//     $res = 'nera';
// }
// echo $res;
// echo "<br>";

// 4.

// $a = rand(1, 10);
// $b = rand(1, 10);
// $c = rand(1, 10);

// if(($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
//     echo 'trikampis gali egzistuoti';;  
// }else {
//     echo 'toks trikampis negali egzistuoti!!!';
// }

// echo "<br>"; 

// 5.

// $sk1 = rand(0, 2);
// $sk2 = rand(0, 2); 
// $sk3 = rand(0, 2); 
// $sk4 = rand(0, 2);
// $temp0 = 0;
// $temp1 = 0;
// $temp2 = 0;

// if($sk1 === 0) {
//     $temp0 += 1;
// }else if($sk1 == 1) {
//     $temp1 += 1;
// }else {
//     $temp2 += 1;
// }

// if($sk2 === 0) {
//     $temp0 += 1;
// }else if($sk2 == 1) {
//     $temp1 += 1;
// }else {
//     $temp2 += 1;
// }

// if($sk3 === 0) {
//     $temp0 += 1;
// }else if($sk3 == 1) {
//     $temp1 += 1;
// }else {
//     $temp2 += 1;
// }

// if($sk4 === 0) {
//     $temp0 += 1;
// }else if($sk4 == 1) {
//     $temp1 += 1;
// }else {
//     $temp2 += 1;
// }

// echo "niuliu = $temp0 vienietu =  $temp1, dvejetu =  $temp2";

// echo "<br>";

// 6.

// $sk = rand(1, 6);
// echo "<h$sk>$sk</h$sk";

// 7.

// $sk1 = rand(-10, 10);
// $sk2 = rand(-10, 10);
// $sk3 = rand(-10, 10);

// if($sk1 < 0) {
//     echo '<p style="color:green">'.$sk1.'</p>';
// }else if($sk1 == 0) {
//     echo '<p style="color:red">'.$sk1.'</p>';
// }else {
//     echo '<p style="color:blue">'.$sk1.'</p>';
// }

// if($sk2 < 0) {
//     echo '<p style="color:green">'.$sk2.'</p>';
// }else if($sk2 == 0) {
//     echo '<p style="color:red">'.$sk2.'</p>';
// }else {
//     echo '<p style="color:blue">'.$sk1.'</p>';
// }

// if($sk3 < 0) {
//     echo '<p style="color:green">'.$sk3.'</p>';
// }else if($sk3 == 0) {
//     echo '<p style="color:red">'.$sk3.'</p>';
// }else {
//     echo '<p style="color:blue">'.$sk3.'</p>';
// }

// echo "<br>"; 

// 8.

// $kiekis = rand(5, 3000);
// $kaina = 1;

// if($kiekis == 1000 || $kiekis > 1000 && $kiekis < 2000) {
//     $res =  "kaina uz vnt ".($kaina - (3 / 100))." kiekis $kiekis";
// }else if($kiekis > 2000) {
//     $res = "kaina uz vnt ".($kaina- (4 / 100))." kiekis $kiekis"; 
// }else {
//     $res = "kaina uz vnt $kaina kiekis $kiekis";
// }

// echo $res;

// echo "<br>";

// 9.

// $sk1 = rand(0, 100);
// $sk2 = rand(0, 100);
// $sk3 = rand(0, 100);

// if($sk1 == 0 && $sk2 == 0 && $sk3 == 0) {
//     $res1 = 'Cannot Divide By Zero';
// }else {
//     $res1 = round(($sk1 + $sk2 + $sk3)/3);
    
// }


// if($sk1 >= 10 && $sk1 <= 90) {
//     if($sk2 >= 10 && $sk2 <= 90) {
//         if($sk3 >= 10 && $sk3 <= 90) {
//             $res2 =  round(($sk1 + $sk2 + $sk3)/3);
//         }else {
//             $res2 =  round(($sk1+ $sk2)/2);  
//         }
//     }else {
//         if($sk3 >= 10 && $sk3 <= 90) {
//             $res2 = round(($sk1 + $sk3)/2); 
//         }else {
//             $res2 = $sk1;
//         } 
//     }   
// }else {
//     if($sk2 >= 10 && $sk2 <= 90) {
//         if($sk3 >= 10 && $sk3 <= 90) {
//             $res2 = round(($sk2 + $sk3)/3);  
//         }else {
//             $res2 = $sk2;
//         }
//     }else {
//         if($sk3 >= 10 && $sk3 <= 90) {
//             $res2 = $sk3;
//         }else {
//             $res2 = "Skaicia tubut yra mazesni nei 10 arba didesni uz 90";
//         }  
//     }
// }


// echo "Vidurki pirmas = $res1<br>Vidurkis antras = $res2";

// echo "<br>";

// 10.

$valandos = rand(0, 300);
$minutes = rand(0, 300);
$sekundes = rand(0, 300);

$laikrodis1 = "<h1>Pirmas $valandos : $minutes : $sekundes</h1>";

if($sekundes > 60) {
    $minutes = ($minutes +  (round($sekundes / 60)));
    $sekundes = $sekundes % 60;
}
if($minutes > 60) {
    $valandos = ($valandos +  (round($valandos / 60)));
    $minutes = $minutes % 60;
}


$laikrodis2 = "<h1>Antras $valandos : $minutes : $sekundes</h1>";

echo "$laikrodis1<br>$laikrodis2";

// 11.

// $sk1 = rand(1000, 9999);
// $sk2 = rand(1000, 9999);
// $sk3 = rand(1000, 9999);
// $sk4 = rand(1000, 9999);
// $sk5 = rand(1000, 9999);
// $sk6 = rand(1000, 9999);

// echo "sk1 = $sk1<br>";
// echo "sk2 = $sk2<br>";
// echo "sk3 = $sk3<br>";
// echo "sk4 = $sk4<br>";
// echo "sk5 = $sk5<br>";
// echo "sk6 = $sk6<br>";

// $output = '';

// if($sk1 > $sk2) {
//     if($sk1 > $sk3) {
//         if($sk1 > $sk4) {
//             if($sk1 > $sk5) {
//                 if($sk1 > $sk6) {
//                     $output .= $sk1;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }else {
//                 if($sk5 > $sk6) {
//                     $output .= $sk5;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }
//         }else {
//             if($sk4 > $sk5) {
//                 if($sk4 > $sk6) {
//                     $output .= $sk4;    
//                 }else {
//                     $output .= $sk6;
//                 }
//             }else {
//                 if($sk5 > $sk6) {
//                     $output .= $sk5;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }
//         }
//     }else {
//         if($sk3 > $sk4) {
//             if($k3 > $sk5) {
//                 if($sk3 > $sk6) {
//                     $output .= $sk3;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }else {
//                 if($sk5 > $sk6) {
//                     $output .= $sk5;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }
//         }else {
//             if(sk4 > $sk5) {
//                if($sk4 > $sk6) {
//                     $output .= $sk4;    
//                }else {
//                     $output .= $sk6;
//                }
//             }else {
//                 if($sk5 > $sk6) {
//                     $output .= $sk5;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }
//         }
//     }
// }else {
//     if($sk2 > $sk3) {
//         if($sk2 > $sk4) {
//             if($sk2 > $sk5) {
//                 if($sk2 > $sk6) {
//                     $output .= $sk2;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }else {
//                 if($sk5 > $sk6) {
//                     $output .= $sk5;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }
//         }else {
//             if($sk4 > $sk5) {
//                 if($sk4 >$sk6) {
//                     $output .= $sk4;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }else {
//                 if($sk5 > $sk6) {
//                     $output .= $sk5;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }
//         }
//     }else {
//         if($sk3 > $sk4) {
//             if($sk3 > $sk5) {
//                 if($sk3 > $sk6) {
//                     $output .= $sk3;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }else {
//                 if($sk5 > $sk6) {
//                     $output .= $sk5;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }
//         }else {
//             if($sk4 > $sk5) {
//                 if($sk4 > $sk6) {
//                     $output .= $sk4;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }else {
//                 if($sk5 > $sk6) {
//                     $output .= $sk5;
//                 }else {
//                     $output .= $sk6;
//                 }
//             }
//         }
//     }
// }

// echo $output;



