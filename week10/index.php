<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        define('WAIT_SECONDS', 5);
        
        //http://saas.site88.net/mail/index.php
        
        if( isset($_SESSION['last_post']) && (time() - $_SESSION['last_post']) < WAIT_SECONDS) {
            die('stop spamming !');
        }
           
        
        if ( !isset($_SESSION['token']) ) {
            $_SESSION['token'] = '';
        }
        
        $contactModel = new ContactModel(filter_input_array(INPUT_POST));
        
        if ( Util::isPostRequest() && $_SESSION['token'] === $contactModel->getToken() ) {
            
            $_SESSION['last_post'] = time();
                       
            $mailer = new Mail(array(
                "to"=>$contactModel->getEmail(),
                "subject"=>'testing',
                "message"=>$contactModel->getMessage(),
                "from"=>$contactModel->getFrom()
            ));
               
            if( $mailer->mailParamsValid() ) {
                if( $mailer->send()) {
                    echo '<p>Regular message sent</p>';
                }
                if( $mailer->sendHtml()) {
                    echo '<p>HTML message sent</p>';
                }
            } else {
                echo '<p>Message Not sent</p>';
            }
        }
        
        
         $token = Util::token();
         $_SESSION['token'] = $token;
        ?>
        
         <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Contact Form:</legend>
                <label for="email">E-mail:</label> 
                <input id="email" type="text" name="email" value="<?php echo Util::cleanForInputValue($contactModel->getEmail()); ?>" /> <br />
                
                
                <label for="from">From:</label>
                <input id="form" type="text" name="from" value="<?php echo Util::cleanForInputValue($contactModel->getFrom()); ?>" /> <br /> 
                
                
                <label for="message">Message:</label> <br />
                <textarea name="message" id="message"><?php echo Util::cleanForInputValue($contactModel->getMessage()); ?></textarea> <br />           
            
                <input type="hidden" name="token" value="<?php echo $token; ?>" />
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
        
    </body>
</html>