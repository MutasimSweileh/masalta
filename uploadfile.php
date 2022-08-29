<?php
//print_r($_POST);
switch ($_POST['method']) {
    case 'upload_file':
        uploadFile();
        break;
    case 'check_file':
        check_file();
        break;
    case 'delete':
        deleteFile();
        break;
}
function check_file()
{
    $result = [];
    $host = $_SERVER['HTTP_HOST'];
    $_POST['destination'] = "up";
    if (!file_exists($_POST['destination'])) {
        mkdir($_POST['destination'], 0777, true);
    }
    $destination = $_POST['destination'] . '/' . $_POST['file_name'];
    $file_url = "http://" . $host . "/$destination";
    $moved = false;
    if (file_exists($destination)) {
        $moved = filesize($destination);
    }
    $result['success'] = $moved ?: false;
    $result['host'] = $host;
    $result['url'] = $file_url;
    $result['method'] = $_POST['method'];
    echo json_encode($result);
}
function uploadFile()
{
    //$localFile = $_FILES['file']['tmp_name'];
    $result = [];
    $host = $_SERVER['HTTP_HOST'];
    $_POST['destination'] = "up";
    if (!file_exists($_POST['destination'])) {
        mkdir($_POST['destination'], 0777, true);
    }
    $destination = $_POST['destination'] . '/' . time();
    if (isset($_POST['file_name'])) {
        $destination = $_POST['destination'] . '/' . $_POST['file_name'];
    }
    $file_url = "http://" . $host . "/$destination";
    if (!file_exists($destination)) {
        $moved = file_put_contents($destination, $_POST['file']);
        if (isset($_POST['file_name'])) {
            chmod($destination, 0777);
        }
    } else {
        $moved = filesize($destination);
    }
    $result['success'] = $moved ?: false;
    $result['host'] = $host;
    $result['url'] = $file_url;
    $result['method'] = $_POST['method'];
    echo json_encode($result);
}

function deleteFile()
{
    if (file_exists($_POST['file_to_be_deleted'])) {
        $res = unlink($_POST['file_to_be_deleted']);
        return $res;
    }
    return FALSE;
}
