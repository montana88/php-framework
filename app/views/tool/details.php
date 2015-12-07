<?php require_once '../app/views/header.php'; ?>

<div id="details">

    <div class="ui inverted teal vertical segment page grid">

        <div class="sixteen wide column">
            <a class="ui labeled icon button" href="/yourframe/public/home/index">
                <i class="chevron left icon"></i>
                Home
            </a>
        </div>

        <div class="sixteen wide column">

            <?php
                $count = 0;
                $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

                foreach($data as $frame){
                    $count++;
                }
            ?>

            <h2>Overview</h2>

            <table class="ui compact celled definition table countFrame<?= $count ?>">
                <thead>
                <tr>
                    <th></th>
                    <?php foreach($data as $frame): ?>
                        <th>

                            <?= \htmlentities( $frame['name'] , null, 'UTF-8'); ?>
                            <a href="<?= preg_replace('/' . $frame['id'] . '/', '', $url); ?>" class="removeFrame mini ui icon button">
                                <i class="minus icon"></i>
                            </a>

                        </th>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <th>
                            <button class="addFrame mini ui icon button">
                                <i class="plus icon"></i>
                            </button>
                        </th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <tr class="positive">
                    <td>Download</td>
                    <?php foreach($data as $frame): ?>
                        <td><a target="_blank" href="<?= $frame['location'] ?>">Download</a></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Summary</td>
                    <?php foreach($data as $frame): ?>
                        <td><?= $frame['properties']['summary'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Website</td>
                    <?php foreach($data as $frame): ?>
                        <td><a target="_blank" href="<?= $frame['properties']['website'] ?>"><?= $frame['properties']['website'] ?></a></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Github</td>
                    <?php foreach($data as $frame): ?>
                        <td><a target="_blank" href="<?= $frame['properties']['github'] ?>"><?= $frame['properties']['github'] ?></a></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Creator</td>
                    <?php foreach($data as $frame): ?>
                        <td><?= $frame['properties']['creator'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>license</td>
                    <?php foreach($data as $frame): ?>
                        <td><?= $frame['properties']['license'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Commentary</td>
                    <?php foreach($data as $frame): ?>
                        <td>
                            <ul>
                                <?php foreach($frame['comments'] as $comments): ?>
                                    <li><?= $comments ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>difficulty level</td>
                    <?php foreach($data as $frame): ?>
                        <td><?= $frame['skillLevel'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Documentation</td>
                    <?php foreach($data as $frame): ?>
                        <?php if($frame['documentation'] === '1') {
                            echo '<td>+</td>';
                        } else if($frame['documentation'] === '2') {
                            echo '<td>±</td>';
                        } else {
                            echo '<td>-</td>';
                        } ?>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>browser</td>
                    <?php foreach($data as $frame): ?>
                        <td><?= $frame['properties']['browser'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>

                </tbody>
            </table>

            <h2>CSS</h2>

            <table class="ui compact celled definition table countFrame<?= $count ?>">
                <thead>
                <tr>
                    <?//= \htmlentities( $data['name'] , null, 'UTF-8'); ?>
                    <th></th>
                    <?php foreach($data as $frame): ?>
                        <th>

                            <?= \htmlentities( $frame['name'] , null, 'UTF-8'); ?>

                            <a href="<?= preg_replace('/' . $frame['id'] . '/', '', $url); ?>" class="removeFrame mini ui icon button">
                                <i class="minus icon"></i>
                            </a>

                        </th>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <th>
                            <button class="addFrame mini ui icon button">
                                <i class="plus icon"></i>
                            </button>
                        </th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Reset</td>
                    <?php foreach($data as $frame): ?>
                        <td><?= $frame['properties']['reset'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>LESS</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['less'] === 'Yes'){echo 'positive';} else {echo 'negative';} ?>"><?= $frame['less'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>SASS/SCSS</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['sass'] === 'Yes'){echo 'positive';} else {echo 'negative';} ?>"><?= $frame['sass'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                </tbody>
            </table>


            <h2>Grid / Responsive</h2>

            <table class="ui compact celled definition table countFrame<?= $count ?>">
                <thead>
                <tr>
                    <?//= \htmlentities( $data['name'] , null, 'UTF-8'); ?>
                    <th></th>
                    <?php foreach($data as $frame): ?>
                        <th>

                            <?= \htmlentities( $frame['name'] , null, 'UTF-8'); ?>

                            <a href="<?= preg_replace('/' . $frame['id'] . '/', '', $url); ?>" class="removeFrame mini ui icon button">
                                <i class="minus icon"></i>
                            </a>

                        </th>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <th>
                            <button class="addFrame mini ui icon button">
                                <i class="plus icon"></i>
                            </button>
                        </th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>width</td>
                    <?php foreach($data as $frame): ?>
                        <td><?= $frame['properties']['width'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>single column class syntax</td>
                    <?php foreach($data as $frame): ?>
                        <td><code><?= $frame['properties']['single-column-class-syntax'] ?></code></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>container syntax</td>
                    <?php foreach($data as $frame): ?>
                        <td><code><?= $frame['properties']['container-syntax'] ?></code></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>row syntax</td>
                    <?php foreach($data as $frame): ?>
                        <td><code><?= $frame['properties']['row-syntax'] ?></code></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Gutter free row syntax</td>
                    <?php foreach($data as $frame): ?>
                        <td><code><?= $frame['properties']['Gutter-free-row-syntax'] ?></code></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>nested column syntax</td>
                    <?php foreach($data as $frame): ?>
                        <td><code><?= $frame['properties']['nested-column-syntax'] ?></code></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>offset column syntax</td>
                    <?php foreach($data as $frame): ?>
                        <td><code><?= $frame['properties']['offset-column-syntax'] ?></code></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>

                </tbody>
            </table>

            <h2>UI widgets</h2>

            <table class="ui compact celled definition table countFrame<?= $count ?>">
                <thead>
                <tr>
                    <?//= \htmlentities( $data['name'] , null, 'UTF-8'); ?>
                    <th></th>
                    <?php foreach($data as $frame): ?>
                        <th>

                            <?= \htmlentities( $frame['name'] , null, 'UTF-8'); ?>

                            <a href="<?= preg_replace('/' . $frame['id'] . '/', '', $url); ?>" class="removeFrame mini ui icon button">
                                <i class="minus icon"></i>
                            </a>

                        </th>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <th>
                            <button class="addFrame mini ui icon button">
                                <i class="plus icon"></i>
                            </button>
                        </th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>alerts</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['properties']['alerts'] === 'Yes'){ echo ' positive';} else { echo ' negative';} ?>"><?= $frame['properties']['alerts'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>badges</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['properties']['badges'] === 'Yes'){ echo ' positive';} else { echo ' negative';} ?>"><?= $frame['properties']['badges'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Breadcrumbs</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['properties']['Breadcrumbs'] === 'Yes'){ echo ' positive';} else { echo ' negative';} ?>"><?= $frame['properties']['Breadcrumbs'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>buttons</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['properties']['buttons'] === 'Yes'){ echo ' positive';} else { echo ' negative';} ?>"><?= $frame['properties']['buttons'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>carousel</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['properties']['carousel'] === 'Yes'){ echo ' positive';} else { echo ' negative';} ?>"><?= $frame['properties']['carousel'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>dropdown</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['properties']['dropdown'] === 'Yes'){ echo ' positive';} else { echo ' negative';} ?>"><?= $frame['properties']['dropdown'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>forms</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['properties']['forms'] === 'Yes'){ echo ' positive';} else { echo ' negative';} ?>"><?= $frame['properties']['forms'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>grids</td>
                    <?php foreach($data as $frame): ?>
                        <td class="<?php if($frame['properties']['grids'] === 'Yes'){ echo ' positive';} else { echo ' negative';} ?>"><?= $frame['properties']['grids'] ?></td>
                    <?php endforeach; ?>
                    <?php if($count < 3): ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
                </tbody>
            </table>

        </div>

    </div>

    <div class="ui modal">

        <i class="close icon"></i>

        <div class="header">
            Add Framework
        </div>

        <div class="content">

            <?php

            $frame1 = false;
            $frame2 = false;
            $frame3 = false;
            $frame4 = false;
            $frame5 = false;
            $frame6 = false;
            $frame7 = false;
            $frame8 = false;
            $frame9 = false;
            $frame10 = false;
            $frame11 = false;
            $frame12 = false;
            $frame13 = false;

            ?>

            <?php foreach($data as $frame): ?>

                <?php
                if($frame['id'] === '1'){
                    $frame1 = true;
                }
                if($frame['id'] === '2'){
                    $frame2 = true;
                }
                if($frame['id'] === '3'){
                    $frame3 = true;
                }
                if($frame['id'] === '4'){
                    $frame4 = true;
                }
                if($frame['id'] === '5'){
                    $frame5 = true;
                }
                if($frame['id'] === '6'){
                    $frame6 = true;
                }
                if($frame['id'] === '7'){
                    $frame7 = true;
                }
                if($frame['id'] === '8'){
                    $frame8 = true;
                }
                if($frame['id'] === '9'){
                    $frame9 = true;
                }
                if($frame['id'] === '10'){
                    $frame10 = true;
                }
                if($frame['id'] === '11'){
                    $frame11 = true;
                }
                if($frame['id'] === '12'){
                    $frame12 = true;
                }
                if($frame['id'] === '13'){
                    $frame13 = true;
                }
                ?>

            <?php endforeach; ?>

            <?php if(!$frame1): ?>
                <a class="ui button" href="<?= $url . '/1' ?>">Bootstrap</a>
            <?php endif;?>
            <?php if(!$frame2): ?>
                <a class="ui button" href="<?= $url . '/2' ?>">Foundation</a>
            <?php endif;?>
            <?php if(!$frame3): ?>
                <a class="ui button" href="<?= $url . '/3' ?>">Skeleton</a>
            <?php endif;?>
            <?php if(!$frame4): ?>
                <a class="ui button" href="<?= $url . '/4' ?>">Base</a>
            <?php endif;?>
            <?php if(!$frame5): ?>
                <a class="ui button" href="<?= $url . '/5' ?>">Pure</a>
            <?php endif;?>
            <?php if(!$frame6): ?>
                <a class="ui button" href="<?= $url . '/6' ?>">ui-semantics</a>
            <?php endif;?>
            <?php if(!$frame7): ?>
                <a class="ui button" href="<?= $url . '/7' ?>">960-grid</a>
            <?php endif;?>
            <?php if(!$frame8): ?>
                <a class="ui button" href="<?= $url . '/8' ?>">grid-system</a>
            <?php endif;?>
            <?php if(!$frame9): ?>
                <a class="ui button" href="<?= $url . '/9' ?>">kube</a>
            <?php endif;?>
            <?php if(!$frame10): ?>
                <a class="ui button" href="<?= $url . '/10' ?>">gumby</a>
            <?php endif;?>
            <?php if(!$frame11): ?>
                <a class="ui button" href="<?= $url . '/11' ?>">tuktuk</a>
            <?php endif;?>
            <?php if(!$frame12): ?>
                <a class="ui button" href="<?= $url . '/12' ?>">Blueprint</a>
            <?php endif;?>
            <?php if(!$frame13): ?>
                <a class="ui button" href="<?= $url . '/13' ?>">bascss</a>
            <?php endif;?>

        </div>

        <div class="actions">
            <div class="ui button">Cancel</div>
        </div>

    </div>

</div>

<?php if($count === 0): ?>

    <script>

        $('.ui.modal')
            .modal('show')
        ;

    </script>

<?php endif; ?>

    <script>

        $('.addFrame').click(function(){
            $('.ui.modal')
                .modal('show')
            ;
        });

    </script>

<?php require_once '../app/views/footer.php'; ?>