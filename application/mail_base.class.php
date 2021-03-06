<?php
/**
 * Project: pcshop.
 * File: mail_base.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Website: www.xiao.vn
 */

Class baseMailler {


    /*
     * @Variables array
     * @access public
     */
    private static $instance;

    /**
     *
     * @constructor
     *
     * @access public
     *
     * @return void
     *
     */
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new baseMailler();
        }
        return self::$instance;
    }

    /**
     *
     * @set undefined vars
     *
     * @param string $index
     *
     * @param mixed $value
     *
     * @return void
     *
     */
    function send($from,$name,$to,$subject,$content) {
        include_once "phpmailer.class.php";
        include_once "smtp.class.php";
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = MAIL_HOST; // specify main and backup server
        $mail->Port = MAIL_PORT; // set the port to use
        $mail->SMTPAuth = MAIL_AUTH; // turn on SMTP authentication
        $mail->SMTPSecure = MAIL_SECURE;
        $mail->Username = MAIL_ACC; // your SMTP username or your gmail username
        $mail->Password = MAIL_PASS; // your SMTP password or your gmail password
        $mail->From = $from;
        $mail->FromName = "Cổng tài khoản Xiao"; // Name to indicate where the email came from when the recepient received
        $mail->AddAddress($to,"Xiao Media Corporation");
        $mail->AddReplyTo($from,$name);
        $mail->WordWrap = 50; // set word wrap
        $mail->IsHTML(true); // send as HTML
        $mail->Subject = $subject;
        $mail->Body = $content;
        if(!$mail->Send())
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    function mail($name) {
        $path = __SITE_PATH . '/template' . '/emails/' . $name . '.html';

        if (file_exists($path) == false)
        {
            throw new Exception('Template not found in '. $path);
            return false;
        }
        return file_get_contents($path);
    }

    public function sendersmtp($name,$to,$type,$content,$value)
    {
        include_once "phpmailer.class.php";
        include_once "smtp.class.php";
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = MAIL_HOST; // specify main and backup server
        $mail->Port = MAIL_PORT; // set the port to use
        $mail->SMTPAuth = MAIL_AUTH; // turn on SMTP authentication
        $mail->SMTPSecure = MAIL_SECURE;
        $mail->Username = MAIL_ACC; // your SMTP username or your gmail username
        $mail->Password = MAIL_PASS; // your SMTP password or your gmail password
        //End variable
        $mail->From = "";
        $mail->Subject = "";
        switch($type)
        {
            case "newregister":
            {
                $mail->From = "support@xiao.vn";
                $mail->Subject = "Thank for signup at Xiao Media Account Gateway!";
                $mail->AddReplyTo("passport@xiao.vn","Xiao Media Inc");
                $mail->FromName = "Xiao Passport Gateway"; // Name to indicate where the email came from when the recepient received
                $mail->AddAddress($to,$name);
                $tpl = $this->mail("general_email");
                $tpl = str_replace('%%GLOBAL_EmailHeader%%', "Cổng tài khoản Xiao", $tpl);
                $tpl = str_replace('%%GLOBAL_EmailMessage%%', "Đây là một thông báo thử nghiệm từ Xiao Media", $tpl);
                $tpl = str_replace('%%GLOBAL_EmailFooter%%', "Thông báo này được gửi đến email: ".$to." vì đã đăng ký nhận tin", $tpl);
                $mail->Body = $tpl;
            }
            default:
                break;
        }
        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        if(!$mail->Send())
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}

?>
