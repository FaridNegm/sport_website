@extends('website/app')

@section('header')

@endsection

@section('content')

    <!--// SubHeader \\-->
        <div class="sportsmagazine-subheader sportsmagazine-subheader-teams">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>ترتيب الفرق</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li>ترتيب الفرق</li>
                            <li><a href="index-2.html" style="color:#ebce19;font-size:14px;">الرئيسيه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

        <!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-fullstanding-full">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
                            <div class="sportsmagazine-playoff-staning">
                                <h4>الدوري الاسباني
                                     <img src="{{ url('website/extra-images/liga.png') }}" class="img-responsive teams_logo" style="width: 105px;height: 105px;margin: -30px 0px;">
                                </h4>
                                <table class="sportsmagazine-client-detail">
                                    <tr>
                                        <th>Pos</th>
                                        <th>Teams</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>PCT</th>
                                        <th>Home</th>
                                        <th>Road</th>
                                        <th>PPG</th>
                                        <th>OP PPG</th>
                                        <th>DIF</th>
                                        <th>STRK</th>
                                        <th>L10G</th>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img3.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img4.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img5.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img6.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="sportsmagazine-playoff-staning">
                                <h4>الدوري الإنجليزي
                                        <img src="{{ url('website/extra-images/prem.png') }}" class="img-responsive teams_logo">
                                    </h4>
                                <table class="sportsmagazine-client-detail">
                                    <tr>
                                        <th>Pos</th>
                                        <th>Teams</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>PCT</th>
                                        <th>Home</th>
                                        <th>Road</th>
                                        <th>PPG</th>
                                        <th>OP PPG</th>
                                        <th>DIF</th>
                                        <th>STRK</th>
                                        <th>L10G</th>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img3.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img4.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img5.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img6.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="sportsmagazine-playoff-staning">
                                <h4>الدوري الإيطالي
                                    <img src="{{ url('website/extra-images/seriea.png') }}" class="img-responsive teams_logo" style="width: 80px;height: 45px;">
                                </h4>
                                <table class="sportsmagazine-client-detail">
                                    <tr>
                                        <th>Pos</th>
                                        <th>Teams</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>PCT</th>
                                        <th>Home</th>
                                        <th>Road</th>
                                        <th>PPG</th>
                                        <th>OP PPG</th>
                                        <th>DIF</th>
                                        <th>STRK</th>
                                        <th>L10G</th>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img3.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img4.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img5.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img6.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="sportsmagazine-playoff-staning">
                                <h4>الدوري الألماني
                                    <img src="{{ url('website/extra-images/bunds.png') }}" class="img-responsive teams_logo" style="width: 80px;height: 45px;">
                                </h4>
                                <table class="sportsmagazine-client-detail">
                                    <tr>
                                        <th>Pos</th>
                                        <th>Teams</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>PCT</th>
                                        <th>Home</th>
                                        <th>Road</th>
                                        <th>PPG</th>
                                        <th>OP PPG</th>
                                        <th>DIF</th>
                                        <th>STRK</th>
                                        <th>L10G</th>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img3.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img4.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img5.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img6.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>
                                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Ocean Kings</h6>
                                                <span>Patrick’s Institute</span>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>09</td>
                                        <td>.895</td>
                                        <td>33 - 8</td>
                                        <td>24 - 17</td>
                                        <td>106.2</td>
                                        <td>101.3</td>
                                        <td>+6.0</td>
                                        <td>L1</td>
                                        <td>6-4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

@endsection

@section('footer')

@endsection
