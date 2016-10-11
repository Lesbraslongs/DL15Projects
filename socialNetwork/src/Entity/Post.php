<?php
namespace Entity;

/**
 * @Entity(repositoryClass="Repository\PostRepository")
 * @Table(name="post")
 */
class Post {
	/**
        * @Id @Column(name ="id", type="integer")
        * @GeneratedValue
        */
	private $id;
	
        /** @Column(name="subject", type="string", length=200) */
	private $subject;
	
        /** @Column(name="date", type="datetime", length=50) */
	private $date;
        
	/** @Column(name="message", type="text") */
	private $message;
        
        /**
        * @ManyToOne(targetEntity="Entity\User")
        * @JoinColumn(name="auteur_id", referencedColumnName="id")
        */
	private $auteur;
        
        /**
        * @OneToMany(targetEntity="Entity\Comment", mappedBy="post", cascade={"remove"})
        */
        private $comment;
        
        /********************GETTERS SETTERS ******************************/
        
        function getId() {
            return $this->id;
        }

        function getSubject() {
            return $this->subject;
        }

        function getDate() {
            return $this->date;
        }

        function getMessage() {
            return $this->message;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setSubject($subject) {
            $this->subject = $subject;
        }

        function setDate($date) {
            $this->date = $date;
        }

        function setMessage($message) {
            $this->message = $message;
        }
        
        function getAuteur() {
            return $this->auteur;
        }

        function setAuteur($auteur) {
            $this->auteur = $auteur;
        }

        function getComment() {
            return $this->comment;
        }

        function setComment($comment) {
            $this->comment = $comment;
        }

}

?>