<?php

if (isset($_POST) && !empty($_POST))
{
    $text = '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ru\" lang=\"ru\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" /><head><title>imsider.ru</title><meta name=\"description\" content=\"\" /><meta name =\"keywords\" content=\"\" /><meta name=\"robots\" content=\"index,all\" /><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /></head><body>';
    $attributes = array(
        'phone' => 'Телефон',
        'name' => 'Имя'
    );
    foreach ($_POST as $key => $value)
    {
        $text.='<div>' . (isset($attributes[$key]) ? $attributes[$key] : $key) . ' : ' . $value . '</div>';
    }



    $text.='</body></html>';

    $from_name = "Робот imsider.ru";
    $from_mail = "info@imsider.ru";
    $subject = '[business.imsider.ru] заявка на обратный звонок';
    $is_html = true;
    $toemail = array('projects@imsider.ru');
    $toname = array("");
    include_once("lib/mandrillapp.php");

    $message = mandrill_send($text, $subject, $toemail, $toname, $from_mail, $from_name, $is_html);
    die($message);
}
?>