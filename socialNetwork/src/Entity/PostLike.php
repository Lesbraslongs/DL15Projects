<?php
namespace Entity;

/**
 * @Entity
 * @Table(name="postlike")
 */
class PostLike {
	/**
        * @Id @Column(name ="post", type="integer")
        * @GeneratedValue
        */
	private $post;
	
        /** @Column(name="user") */
	private $user;
	
        /** @Column(name="score", type="integer") */
	private $score;

        
        /********************GETTERS SETTERS ******************************/
        
        function getPost() {
            return $this->post;
        }

        function getUser() {
            return $this->user;
        }

        function getScore() {
            return $this->score;
        }

        function setPost($post) {
            $this->post = $post;
        }

        function setUser($user) {
            $this->user = $user;
        }

        function setScore($score) {
            $this->score = $score;
        }
        
}