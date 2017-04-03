<?php
/**
 * Employed
 * 
 * @Entity
 * @Table(name="tb_employed")
 */
class Employed 
{    
	/**
     * @id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_employed")
     */
	protected  $id;

    /**
     * @Column(type="string", name="cpf")
     */
	protected  $cpf;

    /**
     * @Column(type="string", name="email")
     */
	protected  $email;

    /**
     * @Column(type="string", name="password")
     */
	protected  $password;

    /**
     * @Column(type="string", name="name")
     */
	protected  $name;

    /**
     * @Column(type="string", name="lastname")
     */
	protected  $lastname;
    
    /**
     * @Column(type="string", name="birthday")
     */
	protected  $birthday;
    /**
     * @Column(type="integer", name="type_user")
     */
	protected  $type_user;
    /**
     * @Column(type="string", name="id_occupation")
     */
	protected  $id_occupation;
    /**
     * @Column(type="integer", name="active")
     */
	protected  $active;

	public function getID(){
		return $this->id;
	}

	public function getCpf(){
		return $this->cpf;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}

	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}

	public function getLastname(){
		return $this->lastname;
	}
	public function setLastname($lastname){
		$this->lastname = $lastname;
	}

	public function getBirthday(){
		return $this->birthday;
	}
	public function setBirthday($birthday){
		$this->birthday = $birthday;
	}

	public function getTypeUser(){
		return $this->type_user;
	}
	public function setTypeUser($type_user){
		$this->type_user = $type_user;
	}

	public function getOccupation(){
		return $this->id_occupation;
	}
	public function setOccupation($id_occupation){
		$this->id_occupation = $id_occupation;
	}

	public function getActive(){
		return $this->active;
	}
	public function setActive($active){
		$this->active = $active;
	}
}