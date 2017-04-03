<?php
/**
 * Occupation
 * 
 * @Entity
 * @Table(name="tb_occupation")
 */
class Occupation 
{    
	/**
     * @id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_occupation")
     */
	protected  $id_occupation;

    /**
     * @Column(type="string", name="company")
     */
	protected  $company;

    /**
     * @Column(type="string", name="telphone")
     */
	protected  $telphone;

    /**
     * @Column(type="string", name="responsibility")
     */
	protected  $responsibility;

    /**
     * @Column(type="string", name="description")
     */
	protected  $description;

    /**
     * @Column(type="string", name="start_date")
     */
	protected  $start_date;
    
    /**
     * @Column(type="string", name="finish_date")
     */
	protected  $finish_date;
    /**
     * @Column(type="integer", name="current")
     */
	protected  $current;
    /**
     * @Column(type="string", name="active")
     */
	protected  $active;


	public function getOccupation(){
		return $this->id_occupation;
	}

	public function getCompany(){
		return $this->company;
	}
	public function setCompany($company){
		$this->company = $company;
	}

	public function getTelphone(){
		return $this->telphone;
	}
	public function setTelphone($telphone){
		$this->telphone = $telphone;
	}

	public function getResponsibility(){
		return $this->responsibility;
	}
	public function setResponsibility($responsibility){
		$this->responsibility = $responsibility;
	}

	public function getDescription(){
		return $this->description;
	}
	public function setDescription($description){
		$this->description = $description;
	}

	public function getStart_date(){
		return $this->start_date;
	}
	public function setStart_date($start_date){
		$this->start_date = $start_date;
	}

	public function getFinishdate(){
		return $this->id_finish_date;
	}
	public function setFinishdate($id_finish_date){
		$this->id_finish_date = $id_finish_date;
	}
	public function getCurrent(){
		return $this->current;
	}
	public function setCurrent($current){
		$this->current = $current;
	}
	public function getActive(){
		return $this->active;
	}
	public function setActive($active){
		$this->active = $active;
	}
}