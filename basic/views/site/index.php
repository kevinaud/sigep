<?php

/* @var $this yii\web\View */

use yii\helpers\html;

$this->title = 'SigEp, Baylor University | Sigma Phi Epsilon';
?>
    <div class="row">
        <div class="col-xs-4">
            <div class="row virtue">
                <div class="col-xs-12">
                    <h2 class="text-purple text-center title-font">Virtue</h2>

                    <p class="text-center">I believe that the word Virtue is an inclusive term; that it is not
                        enough that I be merely passively virtuous: I must be positive on
                        virtue’s behalf. Therefore, I will stand aggressively for honesty in all
                        walks of life, and I will speak cleanly, play cleanly, and live cleanly.</p>

                 </div>
            </div>
            <div class="row diligence">
                <div class="col-xs-12">
                    <h2 class="text-red text-center title-font">Diligence</h2>

                    <p class="text-center">I believe that unless I succeed in being Diligent, I cannot be a
                        good fraternity member. Believing that my fraternity can be no
                        greater than any of its members, I shall strive to make it so high and
                        so worthy that men will consider it an honor and privilege to belong to
                        it, and will strive to be admitted to it.</p>

                 </div>
            </div>
            <div class="row brotherly-love">
                <div class="col-xs-12">
                    <h2 class="text-gold text-center title-font">Brotherly Love</h2>

                    <p class="text-center">I believe that Brotherly Love must be given in order to be
                        received, and that it cannot exist without triumph of the principles of
                        Virtue and Diligence, for these are essential parts of it.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-8 slider">
            <?= dosamigos\gallery\Carousel::widget(['items' => $slides]) ?>
        </div>
    </div>
    <div class="row home-row-two">
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><strong>Fall 2015 Recruitment Dates</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                        <table class="table">
                            <tr>
                                <th>Date</th>
                                <th>Event</th>
                                <th>Time</th>
                                <th>Location</th>
                            </tr>
                            <tr>
                                <td>9/4/2015</td>
                                <td>Recruitment Begins</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>9/8/2015</td>
                                <td>Game Night</td>
                                <td>5-7 PM</td>
                                <td>Baylor Game Room (SUB)</td>
                            </tr>
                            <tr>
                                <td>9/14/2015</td>
                                <td>Range Day</td>
                                <td>5-8 PM</td>
                                <td>Cottonwood Creek Golf Course</td>
                            </tr>
                            <tr>
                                <td>9/17/2015</td>
                                <td>Smoker</td>
                                <td>6-9 PM</td>
                                <td>Vitek's BBQ</td>
                            </tr>
                            <tr>
                                <td>9/21/2015</td>
                                <td>Formal Dinner</td>
                                <td>6-9 PM</td>
                                <td>McLane Stadium President's Suite</td>
                            </tr>
                            <tr>
                                <td>9/25/2015</td>
                                <td>Bid Day</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>