<?php 

//include_once 'player.php';

class team {

	var $id;
	var $name;	
	var $members = array();	//players
	var $level;				// 1..10 average	
	

	function __construct ($id='0',$name='NewTeam',$level='0') {
		$this->$id = $id;
		$this->$name = $name;
		$this->$members = array();
		$this->$level = $level;
	}

	function load ($team_id) {
		
		// 1) get team(ID) info from store
		// 2) copy to $this		
	}

	function save ($info) {

		// 1) put team info into $this
		// 2) copy $this into store	
	}

	function addPlayer ($player) {

		// 1) add player to the list of team members
		$this->members = array_push($this->members,$player);
	}

	function listPlayers () {
		
		foreach($this->members as $member){
			echo'<ul>
				<li>'.$member->name.'</li>';
		}
		echo'</ul>';
	}


	//--------------------------------------------------------------------------

	// GETTERS

	function theId() {
		return $this->id;
	}

	function theName() {
		return $this->name;
	}

	function theSurname() {
		return $this->surname;
	}

	function theAlias() {
		return $this->alias;
	}

	function theFoot() {
		return $this->foot;
	}

	function theSkill() {
		return $this->skill;
	}

	function theScore() {
		return $this->score;
	}


	// SETTERS

	function set($name,$value) {
		$this->$name = $value;
	}
}




?>