<?PHP
$data = '';

$user = 'user';
$pass = 'pass';

if (!empty($_REQUEST) ) {
    if (!empty($_REQUEST[$user]) && !empty($_REQUEST[$pass])) {
        if ($_REQUEST[$user] == 'Nando' && $_REQUEST[$pass] == '2024') {
            $data = '1|'.md5($_REQUEST[$user] . $_REQUEST[$pass]).'|User: ' . $_REQUEST[$user] . ' successfully logged in!';
        }else{
            $data = '0|'.md5(date('Y-m-d h:i:s').rand(1, 9999)).'|Salah Usernam Dan Password';
        }
    }else{
        $data = '0|'.md5(date('Y-m-d h:i:s').rand(1, 9999)).'|Isi Kolom username dan password!';
    }
}

header('Content-Type: text/plain');
echo $data;