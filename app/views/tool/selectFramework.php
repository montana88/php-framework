<?php require_once '../app/views/header.php'; ?>

    <div id="toolTest">

        <div class="ui page grid">

            <div class="sixteen wide column">

                <a href="/yourframe/public/home/index" class="backButton ui icon button">
                    <i class="home icon"></i>
                </a>

                <form class="ajax" method="post" action="/yourframe/public/tool/getResult">

                    <div data-option="6" class="lastQuestion wrapper">

                        <div class="ui inverted teal vertical segment">

                            <a href="/yourframe/public/home/index" class="backButton ui icon button">
                                <i class="home icon"></i>
                            </a>
                            <a href="/yourframe/public/tool/selectFramework" class="refreshButton ui icon button">
                                <i class="refresh icon"></i>
                            </a>

                            <div class="ui page grid">

                                <div class="sixteen wide column">

                                    <h1>6/6</h1>

                                    <b>
                                        <div class="addFrame mini ui icon button">
                                            <i class="help icon helpPopup25"></i>
                                        </div>
                                        What type of css language do you prefer?
                                    </b>

                                </div>

                            </div>

                        </div>

                        <div class="ui four column stackable">

                            <label class="inputField ui yellow helpPopup26" for="sass">
                                <i class="code large icon"></i><br/><br/>
                                <input class="click" type="radio" name="compiler" value="sass" id="sass"/>
                                Less
                            </label>
                            <label class="inputField ui yellow helpPopup27" for="less">
                                <i class="code large icon"></i><br/><br/>
                                <input class="click" type="radio" name="compiler" value="less" id="less"/>
                                Sass
                            </label>
                            <label class="inputField ui yellow helpPopup28" for="not">
                                <i class="remove large icon"></i><br/><br/>
                                <input class="click" type="radio" name="compiler" value="none" id="not"/>
                                No preference
                            </label>

                        </div>

                        <!--<div class="ui vertical labeled icon buttons">
                            <label class="ui button" for="sass"><input class="click" type="radio" name="compiler" value="sass" id="sass"/> Less <i class="help icon helpPopup26"></i></label>
                            <label class="ui button" for="less"><input class="click" type="radio" name="compiler" value="less" id="less"/> Sass <i class="help icon helpPopup27"></i></label>
                            <label class="ui button" for="not"> <input class="click" type="radio" name="compiler" value="none" id="not"/> No preference <i class="help icon helpPopup28"></i></label>
                        </div>-->

                    </div>

                    <div data-option="5" class="wrapper">

                        <div class="ui inverted teal vertical segment">

                            <a href="/yourframe/public/home/index" class="backButton ui icon button">
                                <i class="home icon"></i>
                            </a>
                            <a href="/yourframe/public/tool/selectFramework" class="refreshButton ui icon button">
                                <i class="refresh icon"></i>
                            </a>

                            <div class="ui page grid">

                                <div class="sixteen wide column">

                                    <h1>5/6</h1>

                                    <b>
                                        <!--<div class="addFrame mini ui icon button">
                                            <i class="help icon helpPopup22"></i>
                                        </div>-->
                                        When styling a website, i will...
                                    </b>

                                </div>

                            </div>

                        </div>

                        <div class="ui four column stackable">

                            <label class="inputField ui yellow helpPopup23" for="oocss">
                                <i class="comments large icon"></i><br/><br/>
                                <input class="click" type="radio" name="method" value="oocss" id="oocss"/>
                                Add class names on everything
                            </label>
                            <label class="inputField ui yellow helpPopup24" for="smacss">
                                <i class="comment large icon"></i><br/><br/>
                                <input class="click" type="radio" name="method" value="smacss" id="smacss"/>
                                Use a class name only on the parent element
                            </label>
                            <label class="inputField ui yellow" for="none">
                                <i class="remove large icon"></i><br/><br/>
                                <input class="click" type="radio" name="method" value="none" id="none"/>
                                No preference
                            </label>

                        </div>

                        <!--<div class="ui vertical labeled icon buttons">
                            <label class="ui button" for="oocss">  <input class="click" type="radio" name="method" value="oocss" id="oocss"/> Add class names on everything <i class="help icon helpPopup23"></i></label>
                            <label class="ui button" for="smacss"> <input class="click" type="radio" name="method" value="smacss" id="smacss"/> Use a class name only on the parent element <i class="help icon helpPopup24"></i></label>
                            <label class="ui button" for="none">   <input class="click" type="radio" name="method" value="none" id="none"/> No preference</label>
                        </div>-->

                    </div>

                    <div data-option="4" class="wrapper">

                        <div class="ui inverted teal vertical segment">

                            <a href="/yourframe/public/home/index" class="backButton ui icon button">
                                <i class="home icon"></i>
                            </a>
                            <a href="/yourframe/public/tool/selectFramework" class="refreshButton ui icon button">
                                <i class="refresh icon"></i>
                            </a>

                            <div class="ui page grid">

                                <div class="sixteen wide column">

                                    <h1>4/6</h1>

                                    <b>
                                        <div class="addFrame mini ui icon button">
                                            <i class="help icon helpPopup15"></i>
                                        </div>
                                        What is the highest priority of this framework?
                                    </b>
<!--What is the most important reason why you want to use a framework?-->
                                </div>

                            </div>

                        </div>

                        <div class="ui four column stackable">

                            <label class="inputField ui yellow helpPopup16" for="speed">
                                <i class="fast forward large icon"></i><br/><br/>
                                <input class="click" type="radio" name="purpose" value="speed" id="speed"/>
                                Development speed
                            </label>

                            <label class="inputField ui yellow helpPopup17" for="best-practices">
                                <i class="student large icon"></i><br/><br/>
                                <input class="click" type="radio" name="purpose" value="best-practices" id="best-practices"/>
                                Learning best practices
                            </label>

                            <label class="inputField ui yellow helpPopup18" for="compatible">
                                <i class="browser large icon"></i><br/><br/>
                                <input class="click" type="radio" name="purpose" value="browser-optimalisation" id="compatible"/>
                                Browser compatible
                            </label>
                            <label class="inputField ui yellow helpPopup19" for="prototyping">
                                <i class="configure large icon"></i><br/><br/>
                                <input class="click" type="radio" name="purpose" value="prototyping" id="prototyping"/>
                                Prototyping
                            </label>
                            <label class="inputField ui yellow helpPopup20" for="layout">
                                <i class="compress large icon"></i><br/><br/>
                                <input class="click" type="radio" name="purpose" value="layout-assistance" id="layout"/>
                                Responsive assistance
                            </label>
                            <label class="inputField ui yellow helpPopup21" for="ui">
                                <i class="tags large icon"></i><br/><br/>
                                <input class="click" type="radio" name="purpose" value="ui-styling" id="ui"/>
                                User Interface styling
                            </label>

                        </div>

<!--                        <div class="ui vertical labeled icon buttons">-->
<!--                            <label class="ui button" for="speed">  <input class="click" type="radio" name="purpose" value="speed" id="speed"/> Development speed <i class="help icon helpPopup16"></i></label>-->
<!--                            <label class="ui button" for="best-practices"><input class="click" type="radio" name="purpose" value="best-practices" id="best-practices"/> Learning best practices <i class="help icon helpPopup17"></i></label>-->
<!--                            <label class="ui button" for="compatible">  <input class="click" type="radio" name="purpose" value="browser-optimalisation" id="compatible"/> Browser compatible <i class="help icon helpPopup18"></i></label>-->
<!--                            <label class="ui button" for="prototyping">  <input class="click" type="radio" name="purpose" value="prototyping" id="prototyping"/> Prototyping <i class="help icon helpPopup19"></i></label>-->
<!--                            <label class="ui button" for="layout"><input class="click" type="radio" name="purpose" value="layout-assistance" id="layout"/> Responsive assistance <i class="help icon helpPopup20"></i></label>-->
<!--                            <label class="ui button" for="ui">  <input class="click" type="radio" name="purpose" value="ui-styling" id="ui"/> User Interface styling <i class="help icon helpPopup21"></i></label>-->
<!--                        </div>-->

                    </div>

                    <div data-option="3" class="wrapper">

                        <div class="ui inverted teal vertical segment">

                            <a href="/yourframe/public/home/index" class="backButton ui icon button">
                                <i class="home icon"></i>
                            </a>
                            <a href="/yourframe/public/tool/selectFramework" class="refreshButton ui icon button">
                                <i class="refresh icon"></i>
                            </a>

                            <div class="ui page grid">

                                <div class="sixteen wide column">

                                    <h1>3/6</h1>

                                    <b>
                                        <div class="addFrame mini ui icon button">
                                            <i class="help icon helpPopup11"></i>
                                        </div>
                                        When i download a framework, i will...
                                    </b>

                                </div>

                            </div>

                        </div>

                        <div class="ui four column stackable">

                            <label class="inputField ui yellow" for="read">
                                <i class="file outline large icon"></i><br/><br/>
                                <input class="click" type="radio" name="documentation" value="3" id="read"/>
                                Never use the documentation
                            </label>

                            <label class="inputField ui yellow" for="noRead">
                                <i class="file text large icon"></i><br/><br/>
                                <input class="click" type="radio" name="documentation" value="1" id="noRead"/>
                                Use documentation as a reference
                            </label>

                            <label class="inputField ui yellow" for="both">
                                <i class="book large icon"></i><br/><br/>
                                <input class="click" type="radio" name="documentation" value="2" id="both"/>
                                Often use the documentation
                            </label>

                        </div>

                    </div>

                    <div data-option="2" class="wrapper">

                        <div class="ui inverted teal vertical segment">

                            <a href="/yourframe/public/home/index" class="backButton ui icon button">
                                <i class="home icon"></i>
                            </a>
                            <a href="/yourframe/public/tool/selectFramework" class="refreshButton ui icon button">
                                <i class="refresh icon"></i>
                            </a>

                            <div class="ui page grid">

                                <div class="sixteen wide column">

                                    <h1>2/6</h1>

                                    <b>
                                        <!--<div class="addFrame mini ui icon button">
                                            <i class="help icon helpPopup5"></i>
                                        </div>-->
                                        What is your experience as a frontend developer
                                    </b>

                                </div>

                            </div>

                        </div>

                        <div class="ui four column stackable">

                            <label for="beginner" class="inputField ui yellow helpPopup6">

                                <i class="star large icon"></i><br/><br/>
                                <input class="click" type="radio" name="skills" value="1" id="beginner"/>
                                Just starting

                            </label>

                            <label for="junior" class="inputField ui yellow helpPopup7">

                                <i class="star large icon"></i>
                                <i class="star large icon"></i><br/><br/>
                                <input class="click" type="radio" name="skills" value="2" id="junior"/>
                                Beginner

                            </label>

                            <label for="junior2" class="inputField ui yellow helpPopup8">

                                <i class="star large icon"></i>
                                <i class="star large icon"></i>
                                <i class="star large icon"></i><br/><br/>
                                <input class="click" type="radio" name="skills" value="3" id="junior2"/>
                                Junior

                            </label>

                            <label for="medior" class="inputField ui yellow helpPopup9">

                                <i class="star large icon"></i>
                                <i class="star large icon"></i>
                                <i class="star large icon"></i>
                                <i class="star large icon"></i><br/><br/>
                                <input class="click" type="radio" name="skills" value="4" id="medior"/>
                                Medior

                            </label>

                            <label for="senior" class="inputField ui yellow helpPopup10">

                                <i class="star large icon"></i>
                                <i class="star large icon"></i>
                                <i class="star large icon"></i>
                                <i class="star large icon"></i>
                                <i class="star large icon"></i><br/><br/>
                                <input class="click" type="radio" name="skills" value="5" id="senior"/>
                                Senior

                            </label>

                        </div>

                        <!--<div class="ui vertical labeled icon buttons" data-content="The default theme's basic popup removes the pointing arrow.">
                            <label class="ui button" for="beginner"> <input class="click" type="radio" name="skills" value="1" id="beginner"/> Just starting <i class="help icon helpPopup6"></i></label>
                            <label class="ui button" for="junior">   <input class="click" type="radio" name="skills" value="2" id="junior"/> Beginner <i class="help icon helpPopup7" ></i></label>
                            <label class="ui button" for="junior2">  <input class="click" type="radio" name="skills" value="3" id="junior2"/> Junior <i class="help icon helpPopup8"></i></label>
                            <label class="ui button" for="medior">   <input class="click" type="radio" name="skills" value="4" id="medior"/> Medior <i class="help icon helpPopup9"></i></label>
                            <label class="ui button" for="senior">   <input class="click" type="radio" name="skills" value="5" id="senior"/> Senior <i class="help icon helpPopup10"></i></label>
                        </div>-->

                    </div>

                    <div data-option="1" class="wrapper">

                        <div class="ui inverted teal vertical segment">

                            <a href="/yourframe/public/home/index" class="backButton ui icon button">
                                <i class="home icon"></i>
                            </a>
                            <a href="/yourframe/public/tool/selectFramework" class="refreshButton ui icon button">
                                <i class="refresh icon"></i>
                            </a>

                            <div class="ui page grid">

                                <div class="sixteen wide column">

                                    <h1>1/6</h1>

                                    <b>
                                        <div class="addFrame mini ui icon button">
                                            <i class="help icon helpPopup1"></i>
                                        </div>
                                        Have you worked with frameworks before?
                                    </b>

                                </div>

                            </div>

                        </div>

                        <div class="ui four column stackable">

                            <label for="no" class="inputField ui yellow"> <!-- <i class="help icon helpPopup2"></i>-->

                                <i class="minus large icon"></i><br/><br/>

                                <input class="click" type="radio" name="frameworks" value="0" id="no"/>
                                Never

                            </label>

                            <label for="some" class="inputField yellow">

                                <!--                                <i class="help icon helpPopup3"></i>-->

                                <i class="radio large icon"></i><br/><br/>

                                <input class="click" type="radio" name="frameworks" value="1" id="some"/>
                                Every now and then

                            </label>

                            <label for="yes" class="inputField yellow"><!-- purple -->

                                <!--                                <i class="help icon helpPopup4"></i>-->

                                <i class="plus large icon"></i><br/><br/>

                                <input class="click" type="radio" name="frameworks" value="2" id="yes"/>
                                Always

                            </label>

                        </div>

                            <!--<label class="ui button" for="no">
                                <input class="click" type="radio" name="frameworks" value="0" id="no"/>
                                Never
                                <i class="help icon helpPopup2"></i>
                            </label>
                            <label class="ui button" for="some">
                                <input class="click" type="radio" name="frameworks" value="1" id="some"/>
                                Every now and then
                                <i class="help icon helpPopup3"></i>
                            </label>
                            <label class="ui button" for="yes">
                                <input class="click" type="radio" name="frameworks" value="2" id="yes"/>
                                Always
                                <i class="help icon helpPopup4"></i>
                            </label>-->

                    </div>

                </form>

                <div class="result">
                    <section id="output"></section>
                </div>

            </div>

        </div>

    </div>

    <script>
        // just initializing
        $('.helpPopup1')
            .popup({
                title   : 'Frameworks',
                content : 'A framework is a standardized set of concepts, practices and criteria for dealing with a common type of problem, which can be used as a reference to help us approach and resolve new problems of a similar nature.'
            })
        ;
        /*$('.helpPopup2')
            .popup({
                title   : 'Popup Title',
                content : 'Hello I am a popup'
            })
        ;
        $('.helpPopup3')
            .popup({
                title   : 'Popup Title',
                content : 'Hello I am a popup'
            })
        ;
        $('.helpPopup4')
            .popup({
                title   : 'Popup Title',
                content : 'Hello I am a popup'
            })
        ;
        $('.helpPopup5')
            .popup({
                title   : 'Popup Title',
                content : 'Hello I am a popup'
            })
        ;*/
        $('.helpPopup6')
            .popup({
                title   : 'Beginner',
                content : 'Started some months ago'
            })
        ;
        $('.helpPopup7')
            .popup({
                title   : 'Beginner',
                content : 'One year experience'
            })
        ;
        $('.helpPopup8')
            .popup({
                title   : 'Junior',
                content : '1-5 years of experience'
            })
        ;
        $('.helpPopup9')
            .popup({
                title   : 'Medior',
                content : '5-10 years of experience'
            })
        ;
        $('.helpPopup10')
            .popup({
                title   : 'Senior',
                content : '>10 years of experience'
            })
        ;
        $('.helpPopup11')
            .popup({
                title   : 'Documentation',
                content : 'Documentation helps a user understanding a framework'
            })
        ;
        /*$('.helpPopup12')
            .popup({
                title   : 'Popup Title',
                content : 'Hello I am a popup'
            })
        ;
        $('.helpPopup13')
            .popup({
                title   : 'Popup Title',
                content : 'Hello I am a popup'
            })
        ;
        $('.helpPopup14')
            .popup({
                title   : 'Popup Title',
                content : 'Hello I am a popup'
            })
        ;*/
        $('.helpPopup15')
            .popup({
                title   : 'Framework',
                content : 'Each framework is specialized on something, which you can base your choice on.'
            })
        ;
        $('.helpPopup16')
            .popup({
                title   : 'Development speed',
                content : 'Do you want to build the website instantly, so you can focus your skills on something else?, Or do you have a low budget? This option should be the best for you'
            })
        ;
        $('.helpPopup17')
            .popup({
                title   : 'Learning best practices',
                content : 'If you want to know more then 1 method to solve a problem? Choose this option'
            })
        ;
        $('.helpPopup18')
            .popup({
                title   : 'Browser compatible',
                content : 'If your browser looks exacly the same in each browser'
            })
        ;
        $('.helpPopup19')
            .popup({
                title   : 'Prototyping',
                content : 'Do you want to build a website to test on users?'
            })
        ;
        $('.helpPopup20')
            .popup({
                title   : 'Responsive',
                content : 'Is responsive the most important aspect for you? Choose this option'
            })
        ;
        $('.helpPopup21')
            .popup({
                title   : 'UI styling',
                content : 'Do you have a lot of dropdowns, modules, popups, etc on your website?'
            })
        ;
        /*$('.helpPopup22')
            .popup({
                title   : 'Example',
                content : 'I am a popup'
            })
        ;*/
        $('.helpPopup23')
            .popup({
                title   : 'Example',
                content : '<h1 class="section-heading no-margin separated">Example Header</h1>'
            })
        ;
        $('.helpPopup24')
            .popup({
                title   : 'Example',
                content : '<aside class="MainStylingAside"><p>content</p> <h1>Header</h1></aside>'
            })
        ;
        $('.helpPopup25')
            .popup({
                title   : 'CSS language',
                content : 'These options are better known as CSS pre-processor. Those pre-processor makes your CSS more dynamic and more lightweight'
            })
        ;
        $('.helpPopup26')
            .popup({
                title   : 'Less',
                content : 'These options are almost the same, the only difference is the markup!'
            })
        ;
        $('.helpPopup27')
            .popup({
                title   : 'Sass',
                content : 'These options are almost the same, the only difference is the markup!'
            })
        ;
        $('.helpPopup28')
            .popup({
                title   : 'None',
                content : 'When you have not worked with these languages before you should choose no preference unless you want to try something new!'
            })
        ;

        $('document').ready(function() {

            $('.click').click(function(){

                $(this).closest('.wrapper').hide();

            });

        });
    </script>

<?php require_once '../app/views/footer.php'; ?>