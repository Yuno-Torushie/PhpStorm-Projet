<?php


class Pokemon
{

	private $_Id;
	private $_Name;
	private $_Html;
	private $_Images;
	private $_Types;
    private $_HP;
    private $_Attack;
    private $_Defense;
    private $_SpAttack;
    private $_SpDefense;
    private $_Speed;


	
	public function __construct($Id,$Name,$Type0nom,$Type0couleur,$Type1nom=NULL,$Type1couleur=NULL,$HP,$Attack,$Defense,$SpAttack,$SpDefense,$Speed,$Description,$PathImg)
	{
		$this->_Id = $Id;
		$this->_Types1 = $Type0nom;
		$this->Types2 = $Type1nom;
        $this->_HP = $HP ;
        $this->_Attack = $Attack;
        $this->_Defense = $Defense;
        $this->_SpAttack = $SpAttack;
        $this->_SpDefense = $SpDefense;
        $this->_Speed = $Speed;

		$this->_Name = $Name;
		$Html = "<div id='".$Id;
							
		if($Type1couleur==NULL && $Type1nom==NULL)
		{
			$Html .= "' style='background-color: ".$Type0couleur."'>";
		}
		else
		{
			$Html .= "' style='background-image: -webkit-linear-gradient(30deg, ".$Type0couleur." 50%, ".$Type1couleur." 50%)'>";
		}
		$Html .= "<p>"."#".$Id." ".$Name."</p>"
            ."<h90>"
            ."<img src='images/$PathImg' alt='' width=30% height=30% />"
            ."<p>"
            ."Types : ".$Type0nom." / ".$Type1nom ."<br>"
            ."HP : ".$HP."<br>"
            ."Attack : ".$Attack."<br>"
            ."Defense : ".$Defense."<br>"
            ."SpAttack : ".$SpAttack."<br>"
            ."SpDefense : ".$SpDefense."<br>"
            ."Speed : ".$Speed."<br>"
            ."</p>"
            ."</h90>"
            ."</div>";
		$this->_Html = $Html;

	}


	public function PrintHTML()
	{
		return $this->_Html;
	}


}



?>