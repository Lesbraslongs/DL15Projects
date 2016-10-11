<?php
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
	
        /** @Column(name="username", type="string", length=200) */
	private $username;
	
        /** @Column(name="password", type="string", length=50) */
	private $password;
        
	/** @Column(name="description", type="text") */
	private $description;
}

?>