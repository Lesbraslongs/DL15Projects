<?php
namespace Entity;

/**
 * @Entity
 * @Table(name="user")
 */
class User {
	/**
        * @Id @Column(name ="id", type="integer")
        * @GeneratedValue
        */
	private $id;
	
        /** @Column(name="email", type="string", length=200) */
	private $email;
	
        /** @Column(name="password", type="string", length=50) */
	private $password;
        
	/** @Column(name="description", type="text") */
	private $description;
        
        /** @Column(name="firstname", type="string", length=100) */
	private $firstname;
        
        /** @Column(name="lastname", type="string", length=100) */
	private $lastname;
        
        /** @Column(name="birthdate", type="date") */
	private $birthDate;
        
        /********************GETTERS SETTERS ******************************/
        
        function getId() {
            return $this->id;
        }

        function getEmail() {
            return $this->email;
        }

        function getPassword() {
            return $this->password;
        }

        function getDescription() {
            return $this->description;
        }

        function getFirstname() {
            return $this->firstname;
        }

        function getLastname() {
            return $this->lastname;
        }

        function getBirthDate() {
            return $this->birthDate;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setPassword($password) {
            $this->password = $password;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setFirstname($firstname) {
            $this->firstname = $firstname;
        }

        function setLastname($lastname) {
            $this->lastname = $lastname;
        }

        function setBirthDate($birthDate) {
            $this->birthDate = $birthDate;
        }


}

?>