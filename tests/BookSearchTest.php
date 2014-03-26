<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 3/9/14
 * Time: 8:48 PM
 */


    require_once __DIR__ . '/../classes/BookSearch.php';

    class BookSearchTest extends PHPUnit_Framework_TestCase {

        public $data;

        public function setUp(){
            $this->books = [
                [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
                [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
                [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
                [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
                [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
                [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
                [ 'title' => 'Head First Java', 'pages' => 200 ]
            ];
        }

        public function test_find1(){

            $search = new BookSearch($this->books);
            $results = $search->find('javascript');

            $this->assertEquals(
                $results,
                [
                    [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
                    [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
                    [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ]
                ]
            );

        }


        public function test_find2(){

            $search = new BookSearch($this->books);

            $results = $search->find('javascript web applications', true);

            $this->assertEquals($results,
                [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ]
            );

        }

        public function test_3(){

            $search = new BookSearch($this->books);
            // returns false
            $results = $search->find('The Definitive Guide to Symfony', true);

            $this->assertEquals($results, []);

        }


    }
