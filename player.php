<?php 

class player {

	var $id;
	var $name;
	var $surname;
	var $alias;
	var $foot;		// right,left
	var $skill;		// 1..10
	var $score;		// points	

	function __construct ($id='0',$name='Player',$surname='Unknown',$alias='FooBar',$foot='right',$skill='0',$score='0') {
		$this->$id = $id;
		$this->$name = $name;
		$this->$surname = $surname;
		$this->$alias = $alias;
		$this->$foot = $foot;
		$this->$skill = $skill;
		$this->$score = $score;
	}

	function load ($player_id) {
		
		// 1) get player(ID) info from store
		// 2) copy to $this		
		echo $player_id;
	}

	function save ($info) {

		// 1) put player info into $this
		// 2) copy $this into store	
		echo $info;
	}

	function show () {
		echo'
		<ul>
			<li>'.$this->id.'</li>
			<li>'.$this->name.'</li>
			<li>'.$this->surname.'</li>
			<li>'.$this->alias.'</li>
			<li>'.$this->foot.'</li>
			<li>'.$this->skill.'</li>
			<li>'.$this->score.'</li>
		</ul>';
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