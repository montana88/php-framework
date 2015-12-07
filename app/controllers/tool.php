<?php

class Tool extends controller {

    public function selectFramework($start = '', $question1 = '', $question2 = '', $question3 = '', $question4 = '', $question5 = '', $question6 = '', $question7 = '') {

//        print_r($getFramework);



//        $user = $this->model('User');
//        $user->name = $name;
//        $user->mood = $mood;
//        $user->age = $age;

//        $theTest = array(
//            'start' => $start,
//            'question1' => $question1,
//            'question2' => $question2,
//            'question3' => $question3,
//            'question4' => $question4,
//            'question5' => $question5,
//            'question6' => $question6,
//            'question7' => $question7
//        );

//        if($question7){
//            print_r('test');
//            $route = getResult($theTest);
//        }

        $this->view('tool/selectFramework');

    }

    public function details($frame1 = '', $frame2 = '', $frame3 = '', $frame4 = '', $frame5 = '', $frame6 = '', $frame7 = '', $frame8 = '', $frame9 = '', $frame10 = '', $frame11 = '', $frame12 = '', $frame13 = '') {

        $getModel = $this->model('Testimonial');
        $getFramework = $getModel->getFramework();

        $stack = array();

        if(array_key_exists($frame1, $getFramework)) {
            array_push($stack, $getFramework[$frame1]);
        }
        if(array_key_exists($frame2, $getFramework)) {
            array_push($stack, $getFramework[$frame2]);
        }
        if(array_key_exists($frame3, $getFramework)) {
            array_push($stack, $getFramework[$frame3]);
        }
        if(array_key_exists($frame4, $getFramework)) {
            array_push($stack, $getFramework[$frame4]);
        }
        if(array_key_exists($frame5, $getFramework)) {
            array_push($stack, $getFramework[$frame5]);
        }
        if(array_key_exists($frame6, $getFramework)) {
            array_push($stack, $getFramework[$frame6]);
        }
        if(array_key_exists($frame7, $getFramework)) {
            array_push($stack, $getFramework[$frame7]);
        }
        if(array_key_exists($frame8, $getFramework)) {
            array_push($stack, $getFramework[$frame8]);
        }
        if(array_key_exists($frame9, $getFramework)) {
            array_push($stack, $getFramework[$frame9]);
        }
        if(array_key_exists($frame10, $getFramework)) {
            array_push($stack, $getFramework[$frame10]);
        }
        if(array_key_exists($frame11, $getFramework)) {
            array_push($stack, $getFramework[$frame11]);
        }
        if(array_key_exists($frame12, $getFramework)) {
            array_push($stack, $getFramework[$frame12]);
        }
        if(array_key_exists($frame13, $getFramework)) {
            array_push($stack, $getFramework[$frame13]);
        }

        $this->view('tool/details', $stack, $getFramework);

    }

    public function getResult() {

        $getModel = $this->model('Testimonial');
        $getFramework = $getModel->getFramework();

        if(isset($_POST['frameworks']) && isset($_POST['skills'])){

            if($_POST['frameworks'] === '0' && $_POST['skills'] === '1'){
                $this->redirect('/yourframe/public/tutorials');
            }

        }

        foreach($getFramework as $framework){

            //!todo make question2 less valueble when question1 value is 0
            if(isset($_POST['skills']) && $framework['skillLevel'] > $_POST['skills']){
                continue;
            }
            /*if(isset($_POST['documentation']) && $framework['documentation'] <= $_POST['documentation']){
                continue;
            }*/

            if(isset($_POST['purpose'])){
                if( $framework['function'] != $_POST['purpose']){
                    continue;
                }
            }
            if(isset($_POST['method'])){
                if( $framework['method'] != $_POST['method']){
                    if($_POST['method'] != 'none'){
                        continue;
                    }
                }
            }
            if(isset($_POST['compiler'])){
                if($framework['compiler']['sass'] != true && $_POST['compiler'] != 'sass' || $framework['compiler']['less'] != true && $_POST['compiler'] != 'less'){
                    if($_POST['compiler'] != 'none'){
                        continue;
                    }
                }
            }

            echo '<div data-framework-name="/' . $framework['id'] .'" class="framework ' . $framework['name'] .'">';
            echo '<h3>' . $framework['name'] . '</h3>';
            echo '<p>Main function of ' . $framework['name'] . ' is <span>'  . $framework['function'] . '</span>. Thats why this framework is good for you</p>';
            echo '<small class="title">Peoples opinion</small>';
            echo '<small>' . $framework['comments'][1] . '</small>';
            echo '<a class="downloadButton" href="' . $framework['location'] . '">Download</a>';
            echo '</div>';

        }

    }

}