<?php

// Brandon Golden

$contents = file_get_contents("http://www.omdbapi.com/?t=goodfellas");

$encoded = json_decode($contents, true);

/*
echo $encoded['Title']."<br />";
echo $encoded['Year']."<br />";
echo $encoded['Rated']."<br />";
echo $encoded['Released']."<br />";
echo $encoded['Runtime']."<br />";
echo $encoded['Genre']."<br />";
echo $encoded['Director']."<br />";
echo $encoded['Writer']."<br />";
echo $encoded['Actors']."<br />";
echo $encoded['Plot']."<br />";
echo $encoded['Language']."<br />";
echo $encoded['Country']."<br />";
echo $encoded['Awards']."<br />";
echo $encoded['Poster']."<br />";
echo $encoded['Metascore']."<br />";
echo $encoded['imdbRating']."<br />";
echo $encoded['imdbVotes']."<br />";
echo $encoded['imdbID']."<br />";
echo $encoded['Type']."<br />";
echo $encoded['Response']."<br />";
*/


foreach ($encoded as $val) {
   echo $val."<br />";
}

echo '<img src="'.$encoded['Poster'].'" alt="Cover">';

echo "<br /><br /><br /><br />";


$file = fopen("dictionary.txt", "r") or die("Unable to open file!");

while(!feof($file)) {
  echo fgets($file) . "<br>";
}

fclose($file);

?>