<?php
// Song info
$title = "Daylight";
$artist = "Maroon 5";
$mood = "emotional";

// Numeric variables
$verseCount = 2;
$repeatChorus = 4; 

//array
$nouns = ["daylight", "night", "heart", "sleep", "memory", "perfection"];
$verbs = ["hold", "go", "wake", "slip", "know", "wait", "come", "leave", "see"];

// Verse 1
$verse1 = [
    "Here I am " . $verbs[5] . ", I'll have to " . $verbs[7] . " soon",
    "Why am I " . $verbs[0] . "ing on?",
    "We knew this day would " . $verbs[6] . ", we knew it all along",
    "How did it " . $verbs[6] . " so fast?"
];

// Pre-Chorus 1
$preChorus1 = [
    "This is our last " . $nouns[1] . ", but it's late",
    "And I'm trying not to " . $verbs[3],
    "'Cause I " . $verbs[4] . " when I " . $verbs[2],
    "I will have to " . $verbs[3] . " away"
];

// Chorus
$chorus = [
    "And when the " . $nouns[0] . " comes, I'll have to " . $verbs[1],
    "But tonight, I'm gonna " . $verbs[0] . " you so close",
    "'Cause in the " . $nouns[0] . ", we'll be on our own",
    "But tonight, I need to " . $verbs[0] . " you so close"
];

// Post-Chorus
$postChorus = [
    "Ooh-whoa-oh, ooh-whoa-oh, ooh-whoa-oh, oh, oh, oh-oh-oh",
    "Ooh-whoa-oh, ooh-whoa-oh, ooh-whoa-oh, oh, oh, oh-oh-oh"
];

// Verse 2
$verse2 = [
    "Here I am staring at your " . $nouns[5],
    "In my arms, so beautiful",
    "The sky is getting bright, the stars are burning out",
    "Somebody slow it down"
];

// Pre-Chorus 2
$preChorus2 = [
    "This is way too hard",
    "'Cause I " . $verbs[4] . " when the sun comes up",
    "I will " . $verbs[7] . ", this is my last glance",
    "That will soon be " . $nouns[4]
];

// Bridge
$bridge = [
    "I never want it to stop",
    "Because I don't wanna start all over, start all over",
    "I was afraid of the dark",
    "But now it's all that I want, all that I want, all that I want"
];

// Outro
$outro = "Ooh-whoa-oh (Yeah), ooh-whoa-oh (Yeah)
Ooh-whoa-oh (Yeah), oh, oh-oh-oh (Yeah)
Ooh-whoa-oh (Yeah-ah), ooh-whoa-oh (Yeah-ah)
Ooh-whoa-oh, oh";

// Display the song
echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p>Mood: $mood</p>";

function display($title, $lines) {
    echo "<div class='section'><h3>$title</h3>";
    foreach ($lines as $line) { echo "<p>$line</p>"; }
    echo "</div>";
}

// Song sections proper order
display("Verse 1", $verse1);
display("Pre-Chorus", $preChorus1);
display("Chorus", $chorus);
display("Post-Chorus", $postChorus);

display("Verse 2", $verse2);
display("Pre-Chorus", $preChorus2);
display("Chorus", $chorus);
display("Post-Chorus", $postChorus);

display("Bridge", $bridge);

// Chorus repeated twice for final song
display("Chorus", $chorus);
display("Chorus", $chorus);
display("Post-Chorus", $postChorus);

echo "<p><em>Outro:</em><br>$outro</p>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daylight by Maroon 5</title>
    <style>
        body { 
            font-family: Arial, sans-serif;
            background-color: rgb(199, 85, 85);
            padding: 20px;
            color: white;
        }
        .section {
            background: white;
            color: black;
            padding: 12px 15px;
            margin: 15px 0;
            border-radius: 6px;
        }
        h1, h2 { color: #fff; }
    </style>
</head>
<body>
</body>
</html>
