<?php

function csv_array() {
  $fileName = "letters-home.txt";
  // try to open file, bugger off if failure.
  if ( ($file = fopen($fileName, "r")) && flock($file, LOCK_SH) !== FALSE) {
    $headings = fgetcsv($file, 0, "\t");
    while ( ($lines = fgetcsv($file, 0, "\t")) !== FALSE) {
      $data[] = $lines;
    }
    flock($file, LOCK_UN);
    fclose($file);
  }
  return $data;
}

function print_letter() {
  $data = csv_array();
  $i = rand(0, count($data)-1);
  if ($data ==  NULL) {
    print "Oh the file could not be read. :(";
  }
  $keys = array_keys($data);
  foreach($data[$keys[$i]] AS $key => $value) {
    // if type, they dont' need to see it :)
    if ($key == 2) {
      continue;
    }
    // if content add a line break
    if ($key == 6) {
      echo "<br>";
    }
    // if empty, also skip :)
    if($value === "") {
      continue;
    }
    // oh wow finally a display! so picky
    echo $value , "<br>";
  }
}

?>
