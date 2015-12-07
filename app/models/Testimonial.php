<?php

class Testimonial {

    public function getFramework()
    {

        // Define frameworks
        $frameworks = array(

            1 => array(
                'id' => '1',
                'name' => 'Bootstrap',
                'function' => 'ui-styling',
                'skillLevel' => '5',
                'method' => 'oocss',
                'documentation' => '3',
                'compiler' => array(
                    'less' => true,
                    'sass' => true
                ),
                'less' => 'Yes',
                'sass' => 'Yes',
                'rating' => '8.1',
                'comments' => array(
                    1 => 'Consistente interface: door de vele grafische componenten zoals fonts, formulieren en buttons, die bovendien aanpasbaar zijn, bouw je stap voor stap aan een consistente interface en daarmee een goede gebruikerservaring.',
                    2 => 'Goedkoper dan maatwerk: het framework zit vol met standaard componenten. Je hoeft het wiel niet opnieuw uit te vinden en kunt een enorme tijdswinst boeken door het gebruik er van.',
                    3 => 'Vriendelijk in de omgang: Het is gewoon erg prettig werken met Bootstrap. Er zitten geen scherpe kantjes aan. Niet voor niets is Bootstrap in korte tijd de lieveling van veel ontwikkelaars geworden!'
                ),
                'location' => '/yourframe/public/assets/frameworks/bootstrap.zip',
                'properties' => array(
                    'summary' => '  <ul>
                                        <li>Grids: Fluid</li>
                                        <li>UI tools: Lots of widgets; good for rapid prototyping</li>
                                        <li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li>
                                    </ul>',
                    'website' => 'getbootstrap.com',
                    'github' => 'github.com/twbs/bootstrap',
                    'creator' => 'Twitter',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'Yes',
                    'badges' => 'Yes',
                    'Breadcrumbs' => 'Yes',
                    'buttons' => 'Yes',
                    'carousel' => 'Yes',
                    'dropdown' => 'Yes',
                    'forms' => 'Yes',
                    'grids' => 'Yes'
                )
            ),

            2 => array(
                'id' => '2',
                'name' => 'Foundation',
                'function' => 'ui-styling',
                'skillLevel' => '4',
                'method' => 'oocss',
                'documentation' => '2',
                'compiler' => array(
                    'less' => false,
                    'sass' => true
                ),
                'less' => 'No',
                'sass' => 'Yes',
                'rating' => '7.3',
                'comments' => array(
                    1 => 'Foundation is gemaakt met Rails en werkt daarom geweldig samen met Rails projecten.',
                    2 => 'Fijn om snel mee te prototypen.',
                    3 => 'Bootstrap is een zeer krachtige responsive css-framework, met de grootste gemeenschap achter het creëren van allerlei grote modules en add-ons, maar het was gewoon te bootstrap-achtig voor onze behoeften. De standaard stijlen van Bootstrap zijn slechts een tikkeltje te eigenwijs om te dienen als het ideale startpunt voor volledig op maat ontwerpen.'
                ),
                'location' => '/yourframe/public/assets/frameworks/foundation.zip',
                'properties' => array(
                    'summary' => '  <ul>
                                        <li>Grids: Fluid. Best in class grids across all viewports.</li>
                                        <li>UI tools: Powerful and modular set of tools. More style agnostic than Bootstrap.</li>
                                        <li>History: Performance and efficiency improvements to v4</li>
                                    </ul>

                                    Updates in version 5.5.0:
                                    <ul>
                                        <li>Now compatible with Sass 3.4</li>
                                        <li>Improvements to Dropdowns to keep them from straying outside page boundaries</li>
                                        <li>Dropdowns now automatically close when a link is clicked</li>
                                        <li>Abide’s validations now work better</li>
                                        <li>Split buttons can now support 2 different events</li>
                                        <li>Accordions can now use &lt;ul&gt; elements instead of &lt;dl&gt; elements</li>
                                    </ul>',
                    'website' => 'foundation.zurb.com',
                    'github' => 'github.com/zurb/foundation',
                    'creator' => 'ZURB',
                    'license' => 'MIT license',
                    'browser' => 'Desktop: Chrome, Firefox, Safari, IE9+ Mobile: iOS (iPhone), iOS (iPad), Android 2, 4 (Phone), Android 2, 4 (Tablet), Windows Phone 7+, Surface',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'Yes',
                    'badges' => 'Yes',
                    'Breadcrumbs' => 'Yes',
                    'buttons' => 'Yes',
                    'carousel' => 'No',
                    'dropdown' => 'Yes',
                    'forms' => 'Yes',
                    'grids' => 'Yes'
                )
            ),

            3 => array(
                'id' => '3',
                'name' => 'Skeleton',
                'function' => 'browser-optimalisation',
                'skillLevel' => '2',
                'method' => 'oocss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => false,
                    'sass' => false
                ),
                'less' => 'No',
                'sass' => 'No',
                'rating' => '6.9',
                'comments' => array(
                    1 => 'Handig voor een snelle inzet.',
                    2 => 'Meer flexibiliteit om aan bestaande projecten of bestanden toe te passen.',
                    3 => 'lichtgewicht en zonder onnodige code'
                ),
                'location' => '/yourframe/public/assets/frameworks/skeleton.zip',
                'properties' => array(
                    'summary' => '<ul>
                                    <li>Grids: Fluid</li>
                                    <li>UI tools: Limited</li>
                                    <li>History: Mobile-first update, new percentage-based grid, more robust form styles, new basic table styling and super basic code styling</li>
                                </ul>',
                    'website' => 'http://getskeleton.com/',
                    'github' => 'github.com/dhg/Skeleton',
                    'creator' => 'Dave Gamache',
                    'license' => 'MIT license',
                    'browser' => 'Latest and previous versions of Chrome, Firefox, Opera, and Safari; IE9+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => 'Columns cannot be nested',
                    'offset-column-syntax' => '&lt;div class&#x3D;&quot;col-lg-4 offset-by-four&quot;&gt;...&lt;&#x2F;div&gt;',
                    'alerts' => 'No',
                    'badges' => 'No',
                    'Breadcrumbs' => 'No',
                    'buttons' => 'Yes',
                    'carousel' => 'No',
                    'dropdown' => 'No',
                    'forms' => 'Yes',
                    'grids' => 'Yes'
                )
            ),

            4 => array(
                'id' => '4',
                'name' => 'Base',
                'function' => 'speed',
                'skillLevel' => '1',
                'method' => 'oocss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => false,
                    'sass' => false
                ),
                'less' => 'No',
                'sass' => 'No',
                'rating' => '6.7',
                'comments' => array(
                    1 => 'Het framework heeft no-js fallback, Wanneer javascript uit is gevallen.',
                    2 => 'Werkt met screen readers, iets waar niet veel frameworks zich mee bezig houden.',
                    3 => 'Met dit framework override je geen code.'
                ),
                'location' => '/yourframe/public/assets/frameworks/base.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'getbase.org/',
                    'github' => 'github.com/matthewhartman/base',
                    'creator' => 'Mathew hartman',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'No',
                    'Breadcrumbs' => 'no',
                    'buttons' => 'Yes',
                    'carousel' => 'No',
                    'dropdown' => 'Yes',
                    'forms' => 'Yes',
                    'grids' => 'Yes'
                )
            ),

            5 => array(
                'id' => '5',
                'name' => 'Pure',
                'function' => 'best-practices',
                'skillLevel' => '3',
                'method' => 'smacss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => false,
                    'sass' => true
                ),
                'less' => 'No',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/pure.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'purecss.io',
                    'github' => 'github.com/yahoo/pure/',
                    'creator' => 'James Salley',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'no',
                    'Breadcrumbs' => 'no',
                    'buttons' => 'Yes',
                    'carousel' => 'No',
                    'dropdown' => 'Yes',
                    'forms' => 'Yes',
                    'grids' => 'Yes'
                )
            ),

            6 => array(
                'id' => '6',
                'name' => 'ui-semantics',
                'function' => 'prototyping',
                'skillLevel' => '5',
                'method' => 'oocss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => true,
                    'sass' => true
                ),
                'less' => 'Yes',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/ui-semantics.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'http://semantic-ui.com/',
                    'github' => 'github.com/Semantic-Org/Semantic-UI',
                    'creator' => 'Unknown',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'Yes',
                    'badges' => 'Yes',
                    'Breadcrumbs' => 'Yes',
                    'buttons' => 'Yes',
                    'carousel' => 'Yes',
                    'dropdown' => 'Yes',
                    'forms' => 'Yes',
                    'grids' => 'Yes',
                    'divider' => 'Yes',
                    'Flag' => 'Yes',
                    'Header' => 'Yes',
                    'icons' => 'Yes',
                    'Image' => 'Yes',
                    'label' => 'Yes',
                    'list-item' => 'Yes',
                    'loader' => 'Yes',
                    'steps' => 'Yes',
                    'message' => 'Yes',
                    'accordion' => 'Yes',
                    'popup' => 'Yes'
                )
            ),

            7 => array(
                'id' => '7',
                'name' => '960-grid',
                'function' => 'best-practices',
                'skillLevel' => '3',
                'method' => 'smacss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => false,
                    'sass' => true
                ),
                'less' => 'No',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/960-grid.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => '960.gs',
                    'github' => 'github.com/nathansmith/960-grid-system/',
                    'creator' => 'nathan Smith',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'No',
                    'Breadcrumbs' => 'No',
                    'buttons' => 'No',
                    'carousel' => 'No',
                    'dropdown' => 'No',
                    'forms' => 'No',
                    'grids' => 'Yes'
                )
            ),

            8 => array(
                'id' => '8',
                'name' => 'responsive-grid-system',
                'function' => 'layout-assistance',
                'skillLevel' => '3',
                'method' => 'smacss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => false,
                    'sass' => true
                ),
                'less' => 'No',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/responsive-grid-system.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'responsivegridsystem.com',
                    'github' => 'github.com/deeve007/responsive-grid-system',
                    'creator' => 'Ethan Marcotte',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'No',
                    'Breadcrumbs' => 'No',
                    'buttons' => 'Yes',
                    'carousel' => 'No',
                    'dropdown' => 'Yes',
                    'forms' => 'Yes',
                    'grids' => 'Yes'
                )
            ),

            9 => array(
                'id' => '9',
                'name' => 'kube',
                'function' => 'prototyping',
                'skillLevel' => '1',
                'method' => 'smacss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => true,
                    'sass' => true
                ),
                'less' => 'Yes',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/kube.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'http://imperavi.com/kube/',
                    'github' => 'github.com/imperavi/kube',
                    'creator' => 'Imperavi',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'No',
                    'Breadcrumbs' => 'No',
                    'buttons' => 'Yes',
                    'carousel' => 'No',
                    'dropdown' => 'No',
                    'forms' => 'Yes',
                    'grids' => 'Yes'
                )
            ),

            10 => array(
                'id' => '10',
                'name' => 'gumby',
                'function' => 'layout-assistance',
                'skillLevel' => '1',
                'method' => 'oocss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => true,
                    'sass' => true
                ),
                'less' => 'Yes',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/gumby.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'gumbyframework.com',
                    'github' => 'github.com/GumbyFramework/Gumby',
                    'creator' => 'Twitter',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'yes',
                    'Breadcrumbs' => 'No',
                    'buttons' => 'Yes',
                    'carousel' => 'yes',
                    'dropdown' => 'No',
                    'forms' => 'yes',
                    'grids' => 'yes'
                )
            ),

            11 => array(
                'id' => '11',
                'name' => 'tuktuk',
                'function' => 'layout-assistance',
                'skillLevel' => '1',
                'method' => 'oocss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => true,
                    'sass' => true
                ),
                'less' => 'Yes',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/tuktuk.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'http://tuktuk.tapquo.com/',
                    'github' => 'github.com/soyjavi/tuktuk',
                    'creator' => 'Javi Jimenez Villar',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'No',
                    'Breadcrumbs' => 'No',
                    'buttons' => 'yes',
                    'carousel' => 'No',
                    'dropdown' => 'yes',
                    'forms' => 'yes',
                    'grids' => 'yes'
                )
            ),

            12 => array(
                'id' => '12',
                'name' => 'Blueprint',
                'function' => 'speed',
                'skillLevel' => '1',
                'method' => 'oocss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => false,
                    'sass' => false
                ),
                'less' => 'Yes',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/blueprint.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'blueprintcss.org',
                    'github' => 'https://github.com/joshuaclayton/blueprint-css',
                    'creator' => 'Christian Montoya',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-xs-2 col-sm-8 col-md-6 col-lg-5&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'No',
                    'Breadcrumbs' => 'No',
                    'buttons' => 'Yes',
                    'carousel' => 'No',
                    'dropdown' => 'No',
                    'forms' => 'Yes',
                    'grids' => 'No'
                )
            ),

            13 => array(
                'id' => '13',
                'name' => 'bascss',
                'function' => 'browser-optimalisation',
                'skillLevel' => '1',
                'method' => 'oocss',
                'documentation' => '1',
                'compiler' => array(
                    'less' => true,
                    'sass' => true
                ),
                'less' => 'Yes',
                'sass' => 'Yes',
                'rating' => '6.4',
                'comments' => array(
                    1 => 'Werkt geweldig samen met YUI van Yahoo.',
                    2 => 'Kan extern ingeladen worden. wordt namelijk gehost vanaf de CND van Yahoo.'
                ),
                'location' => '/yourframe/public/assets/frameworks/bascss.zip',
                'properties' => array(
                    'summary' => '<ul><li>Grids: Fluid</li><li>UI tools: Lots of widgets; good for rapid prototyping</li><li>History: Mobile-first update to the style guide for internal tools developed by Twitter</li></ul>',
                    'website' => 'basscss.com',
                    'github' => 'github.com/basscss/basscss',
                    'creator' => 'Brent Jackson',
                    'license' => 'MIT license',
                    'browser' => 'Chrome (Mac, Windows, iOS, and Android) Safari (Mac and iOS only) Firefox (Mac, Windows) Opera (Mac and Windows) IE8+',
                    'reset' => 'normalize.css',
                    'width' => 'Fluid (480px, 768px, 992px, 1200px)',
                    'columns' => '12',
                    'single-column-class-syntax' => '.col-xs-1<br>.col-sm-1<br>.col-md-1<br>.col-lg-1',
                    'container-syntax' => '&lt;div class&#x3D;&quot;container&quot;&gt;...&lt;&#x2F;div&gt;',
                    'row-syntax' => '&lt;div class&#x3D;&quot;clearfix&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;sm-col sm-col-6 md-col-5 lg-col-4&quot;&gt;...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;sm-col sm-col-6 md-col-5 lg-col-4&quot;&gt...&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'Gutter-free-row-syntax' => 'Not available',
                    'nested-column-syntax' => '&lt;div class&#x3D;&quot;row&quot;&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;row&quot;&gt <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class&#x3D;&quot;col-md-6&quot;&gt...&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;&#x2F;div&gt; <br> &lt;&#x2F;div&gt;',
                    'offset-column-syntax' => '.col-lg-4.col-lg-offset-4',
                    'alerts' => 'No',
                    'badges' => 'Yes',
                    'Breadcrumbs' => 'No',
                    'buttons' => 'Yes',
                    'carousel' => 'No',
                    'dropdown' => 'Yes',
                    'forms' => 'Yes',
                    'grids' => 'Yes'
                )
            )

        );

        // Return testimonials
        return $frameworks;

    }

    public function getTestimonials()
    {

        // Define testimonials
        $testimonials = array(

            1 => array(
                'name' => 'Heleen van Oord',
                'function' => 'Founder',
                'company' => 'dqna',
                'companyName' => 'DQ&A',
                'minContent' => 'test1',
                'content' => 'test1'
            ),

            2 => array(
                'name' => 'Marcel Joosten',
                'function' => 'Director Online',
                'company' => 'centralpoint',
                'companyName' => 'Centralpoint',
                'minContent' => 'test2',
                'content' => 'test2'
            ),

            3 => array(
                'name' => 'Michiel Hilders',
                'function' => 'Senior Strategy Consultant',
                'company' => 'abn',
                'companyName' => 'ABN AMRO',
                'minContent' => 'test3',
                'content' => 'test3'
            ),

            4 => array(
                'name' => 'Mascha Driessen',
                'function' => 'Regional Director Advertising &amp; Online',
                'company' => 'microsoft',
                'companyName' => 'Microsoft',
                'minContent' => 'test4',
                'content' => 'test4'
            ),

            5 => array(
                'name' => 'Diana Kruft',
                'function' => 'Project organisation events',
                'company' => 'mvo',
                'companyName' => 'MVO Nederland',
                'minContent' => 'test5',
                'content' => 'test5'
            ),

            6 => array(
                'name' => 'Maurine Alma',
                'function' => 'Brand Director',
                'company' => 'Wehkamp',
                'companyName' => 'wehkamp.nl',
                'minContent' => 'test6',
                'content' => 'test6'
            ),

            7 => array(
                'name' => 'Bart Monster',
                'function' => 'General Director',
                'company' => 'USG',
                'companyName' => 'USG Engineering',
                'minContent' => 'test7',
                'content' => 'test7'
            )

        );

        // Return testimonials
        return $testimonials;

    }

}