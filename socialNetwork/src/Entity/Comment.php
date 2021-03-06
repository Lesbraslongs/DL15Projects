<?php 
namespace Entity;

/**
 * @Entity
 * @Table(name="comment")
 */
class Comment {
	/**
        * @Id @Column(name ="id", type="integer")
        * @GeneratedValue
        */
	private $id;
	
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
        * @ManyToOne(targetEntity="Entity\Post", inversedBy="comment")
        * @JoinColumn(name="post_id", referencedColumnName="id")
        */
        private $post;
        
         /********************GETTERS SETTERS ******************************/
        
        function getId() {
            return $this->id;
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

        function getPost() {
            return $this->post;
        }

        function setPost($post) {
            $this->post = $post;
        }

}
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          