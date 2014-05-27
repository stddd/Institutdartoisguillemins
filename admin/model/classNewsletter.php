<?php

include_once (__DIR__."/../connect/classDB.php");

class newsLetter extends DB{
    public $hlLabelNewsletter = "Saisir votre adresse eMail";
    public $hlSubmitNewsletter = "S'abonner";
    public $hlMerci = "Merci !";
    public $hlEmailInvalid = "Format Invalide !";
    public $hlEmailExiste = "Email Existe !";
    public $table;
    public $action = 0;
    public $info;
    
    public function newsLetter($name){
        $aValid = array('-', '_');
        $tmp_name = str_replace($aValid, '', $name);
        
        
        if(!ctype_alnum($tmp_name)) {
            echo "Le nom de la table n'est pas valide.";
            exit();
        }
        $this->table = $name;
        $this->header();
        
    }
    public function header(){
        
        if(
           isset($_POST['form_email_'.$this->table])
           && !empty($_POST['form_email_'.$this->table])
        ){
            $this->action = 1;
            
            $email = htmlentities($_POST['form_email_'.$this->table],ENT_QUOTES);
               
            if($this->addMail($email)){
                $this->info = $this->hlMerci;
                return 1;
            }
            return null;
        }
        
        return 2;
    }
    public function addMail($email){
            
        $date = time();
        $ipAddr = $_SERVER['REMOTE_ADDR'];
        
        // verification du format mail
        $email = (filter_var($email, FILTER_VALIDATE_EMAIL))?$email:false;
        if(!$email){
            $this->info = $this->hlEmailInvalid;
            return null; }
        
        
        $queryMail = <<<QUERYMAIL
        
        SELECT * FROM $this->table
        WHERE email = '$email' ;
        
QUERYMAIL;

        $queryInsert = <<<QUERYINSERT
        
        INSERT INTO $this->table (email, ip_addr, date)
        VALUES ('$email','$ipAddr',$date) ;
        
QUERYINSERT;

        $link = mysql_connect($this->host, $this->user, $this->password)
                or die("Impossible de se connecter : " . mysql_error());
        
        // selection de la base
        mysql_select_db($this->dbName)
                or die("Impossible de se connecter : " . mysql_error());
    
        
        $resultMail = mysql_query($queryMail);

        if (mysql_num_rows($resultMail) == 0) {

           $insertMail = mysql_query($queryInsert);

           return $insertMail;
        }
        
        $this->info = $this->hlEmailExiste;
        
        mysql_close($link);
        
        return null;
        
        
    }
    
    public function form(){
        
        $form = <<<FORMULAIRE
        
        <form   method="post" id="form_$this->table" name="form_$this->table"
                style="margin-left: auto;margin-right: auto;width: 250px;text-align: center">
            
            $this->hlLabelNewsletter
            <br />
            
            <input type="text" id="form_email_$this->table" name="form_email_$this->table" style="width:100%;" >
            <br />
            <input type="submit"  id="form_submit_email_$this->table" name="form_submit_email_$this->table" value="$this->hlSubmitNewsletter">
        </form>
FORMULAIRE;

        return $form;
    
    }
    
    
    
    
}