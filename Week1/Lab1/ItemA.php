<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

  <!Example #1 explode() examples>
<?php
// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *
?><!END:Example #1 explode() examples>
    
    <!Example #1 A sha1() example>
<?php
$str = 'apple';

if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
    echo "Would you like a green or red apple?";
}
?><!END: Example #1 A sha1() example>

<!Example #1 A htmlentities() example>
<?php
$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);
?><!END: Example #1 A htmlentities() example>

<!Example #1 A md5() example>
<?php
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}
?><!END: Example #1 A md5() example>

<!Example #1 strip_tags() example>
<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');
?>
<!--The above example will output:
Test paragraph. Other text
<p>Test paragraph.</p> <a href="#fragment">Other text</a>-->
<!END: Example #1 strip_tags() example>

<!Example #1 Usage example of trim()>
<?php

$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?><!END: Example #1 Usage example of trim()>

<!Example #1 ucwords() example>
<?php
$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!

$bar = 'HELLO WORLD!';
$bar = ucwords($bar);             // HELLO WORLD!
$bar = ucwords(strtolower($bar)); // Hello World!
?><!END: Example #1 ucwords() example>

<!Example #1 A strlen() example>
<?php
$str = 'abcdef';
echo strlen($str); // 6

$str = ' ab cd ';
echo strlen($str); // 7
?><!END: Example #1 A strlen() example>

<!Example #1 str_shuffle() example>
<?php
$str = 'abcdef';
$shuffled = str_shuffle($str);

// This will echo something like: bfdaec
echo $shuffled;
?><!Example #1 str_shuffle() example>

<!Example #1 ord() example>
<?php
$str = "\n";
if (ord($str) == 10) {
    echo "The first character of \$str is a line feed.\n";
}
?><!END:Example #1 ord() example>
       
    </body>
</html>
