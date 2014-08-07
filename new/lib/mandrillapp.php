<?
/* Curl */

class Curl{
    public static function getContent($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        return curl_exec($ch);
    }


    public static function sendJSON($url,$json){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($json))
        );
        return curl_exec($ch);
    }
}

/* mandrill */


function mandrill_send( $email_text, $email_subject, $to_email_address, $to_name, $from_email_address, $from_name, $html_text = false, $attached_files = "", $to_send_on_date = '' ){

    $mandrillapi_key = "3c2UaH-_dBrrww8POAJffw";

    $to = array();

    if(is_array($to_email_address)){
        foreach ($to_email_address as $key => $value) {
            if(isset($to_name[$key]))
                $name = $to_name[$key];
            else
                $name = "";
            $to[] = array(
                    "email"=> $value,
                    "name"=> $name,
                );
        }
    }else{
        $to = array(
                array(
                    "email"=> $to_email_address,
                    "name"=>$to_name,
                )
            );
    }

    $configArray = array(
        'key'=>$mandrillapi_key,
        "message"=>array(
            "subject"=> $email_subject,
            "from_email"=> $from_email_address,
            "from_name"=> $from_name,
            "to"=> $to,
            "headers"=> array(
                "Reply-To"=> ".".$from_email_address
            ),
            "important"=> true,
            "track_opens"=> null,
            "track_clicks"=> null,
            "auto_text"=> null,
            "auto_html"=> null,
            "inline_css"=> null,
            "url_strip_qs"=> null,
            "preserve_recipients"=> null,
            "tracking_domain"=> null,
            "signing_domain"=> null,

        ),
        "async"=> false,
        "ip_pool"=> "Main Pool",
        //"send_at"=> date('Y-m-d')
    );
    if($html_text)
        $configArray['message']['html'] = $email_text;
    else
        $configArray['message']['text'] = $email_text;
    if($attached_files!==''){
        $file_name = basename( $attached_files ); // позже расписать для нескольких файлов
        $type = mime_content_type($attached_files);
        $configArray['message']["attachments"]=array(
            array(
                "type"=> $type,
                "name"=> $file_name,
                "content"=> base64_encode(file_get_contents($attached_files))
            )
        );
    }
    
    return Curl::sendJSON('https://mandrillapp.com/api/1.0/messages/send.json',json_encode($configArray, true));
}