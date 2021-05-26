<?php
$vowels = ['a', 'e','i', 'o', 'u'];

$words = [
	'Eye of the tiger',
	'Avengers',
	'Ong Bak',
	'Star Trek Voyager',
	'Raymond Reddington',
	'Trrevor Belmont',
	'John Snow',
	'Sansa'
];

$suffix = "yay";

foreach ( $words as $key => &$val ) {

	$tmp_words = explode(" ", $val);
	$val = "";
	foreach ( $tmp_words as $tmp_word ) {
		$word = str_split($tmp_word);

		// vowel check
		if ( in_array(strtolower($tmp_word[0]), $vowels) ) {
			$tmp_word .= $suffix . " ";
			$val .= $tmp_word;
			continue;
		}

		foreach ( $word as $char ) {
			if ( in_array(strtolower($char), $vowels) ) {
				$consonants = substr($tmp_word, 0, strpos($tmp_word, $char));
				$letters = substr($tmp_word, strpos($tmp_word, $char));
				$tmp_word = $letters . $consonants . substr($suffix, 1) . " ";
				break;
			}

		} // end word loop

		$val .= $tmp_word;
	} // end tmp word loop
		
}
unset($val);

echo "<pre>";
print_r($words);
?>

<script type="text/javascript">
	let n = 10;

	let seq = build_fibonacci(n);

	document.write("Fibonacci Sequence : " + seq);
	function build_fibonacci(n) {
		let fib_seq = [0, 1];
		for ( let i = 1; i < n; i++ ) {
			var num = fib_seq[i - 1] + fib_seq[i];
			fib_seq.push(num);
		}
		return fib_seq;
	}
</script>