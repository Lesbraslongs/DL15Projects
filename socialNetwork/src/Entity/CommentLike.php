<?php
namespace Entity;

/**
 * @Entity
 * @Table(name="commentlike")
 */
class CommentLike {
	/**
        * @Id @Column(name ="post", type="integer")
        * @GeneratedValue
        */
	private $post;
	
        /** @Column(name="comment") */
	private $comment;
	
        /** @Column(name="score", type="integer") */
	private $score;

        
        /********************GETTERS SETTERS ******************************/

        function getPost() {
            return $this->post;
        }

        function getComment() {
            return $this->comment;
        }

        function getScore() {
            return $this->score;
        }

        function setPost($post) {
            $this->post = $post;
        }

        function setComment($comment) {
            $this->comment = $comment;
        }

        function setScore($score) {
            $this->score = $score;
        }
        
}