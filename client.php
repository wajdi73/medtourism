<html>
<head>

</head>
<body>

<?php

class client  {
    private $nom;
    private $prenom;
    private $date;
	private $mail;
    private $passe;
    private $sexe;
 
    function __construct($nom, $prenom, $date,$mail,$passe,$sexe) {
        $this->nom=$nom;
        $this->prenom = $prenom;
        $this->date = $date;
		$this->mail = $mail;
        $this->passe = $passe;
        $this->sexe = $sexe;
    
    }
    
    public function __get($attr) {
        if (!isset($this->$attr)) return "erreur";
        else return ($this->$attr);}
    public function __set($attr,$value) {
            $this->$attr = $value; }

		public static function ajouterClient($client)
		{
			include("connexion.php");
		
			$nb=$conn->exec("insert into clients values($client->nom','$client->prenom',$client->date,$client->mail,$client->passe,$client->sexe)") or die(print_r($conn->errorInfo()));
			
			return $nb;
			}
		
}




?>
</body>
</html>