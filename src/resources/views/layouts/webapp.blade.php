<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webapp</title>
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="leftcontainer">
            <img src="{{asset('/image/posse.jpg')}}" alt="posse" class="posse" />
            <p class="first">@yield('header_title')</p>
            </div>
            <button id="modal-open" class="kiroku">記録・投稿</button>
        </div>
    </header>
    <div class="container">
        <div class="left-container">
            <div class="hour-container">
            <div class="hourbox">
                <div class="box">
                <p class="top">Today</p>
                @yield('today')
                <p class="hour">hour</p>
                </div>
            </div>
            <div class="hourbox">
            <div class="box">
                <p class="top">Month</p>
                @yield('month')
                <p class="hour">hour</p>
            </div>
            </div>
            <div class="hourbox">
                <div class="box">
                <p class="top">Total</p>
                @yield('total')
                <p class="hour">hour</p>
                </div>
            </div>
        </div>
        <div class="column">

            <div id="column" ></div>
            <div id="column-2"></div>
        </div>
        </div>
        <div class="right-container">

        <div class="pie">
            <div id="pie-1"></div>
            <div id="pie-3"></div>

        </div>
        <div class="pie">
            <div id="pie-2"></div>
            <div id="pie-4"></div>
        </div>
        </div>
    </div>
    <div class="year-container">
        <div class="year">@yield('year')</div>
    </div>
    <div class="yohaku"></div>

    <div id="modal-overlay">
        <div id="modal-content" class="modal-container">
            <div class="modal-box">
            <div class="left-modal">
                <div class="study-day">
                    <label for="">学習日</label>
                <div class="study-container">
                    <input type="text" class="study-box" id="study-box" />
                </div>
            </div>
            <div class="study-content">
                <h1>学習コンテンツ（複数選択可）</h1>
                <div class="content-option">
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="nyobi"  />
                    <div class="content-options">
                    <label for="nyobi">N予備校</label>
                    </div>
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="dotinstall"  />
                <div class="content-options">
                    <label for="dotinstall">ドットインストール</label>
                </div>
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="POSSEkadai"  />
                <div class="content-options">
                    <label for="POSSEkadai">POSSE課題</label>
                </div>
                </div>
            </div>
            <div class="study-language">
                <h1>学習言語（複数選択可）</h1>
                <div class="content-option">
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="html"  />
                    <div class="content-options">
                        <label for="html">HTML</label>
                    </div>
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="css"  />
                <div class="content-options">
                    <label for="css">CSS</label>
                </div>
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="javascript"  />
                <div class="content-options">
                    <label for="javascript">JavaScript</label>
                </div>
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="php"  />
                <div class="content-options">
                    <label for="php">PHP</label>
                </div>
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="laravel"  />
                <div class="content-options">
                    <label for="laravel">Laravel</label>
                </div>
                    <input class="visually-hidden" type="checkbox" name="fruits" id="sql"  />
                <div class="content-options">
                    <label for="sql">SQL</label>
                </div>
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="shell"  />
                <div class="content-options">
                    <label for="shell">SHELL</label>
                </div>
                    <input  class="visually-hidden" type="checkbox" name="fruits" id="jyoho"  />
                <div class="content-options">
                    <label for="jyoho">情報システム基礎知識(その他)</label>
                </div>
                </div>
            </div>
            </div>
            <div class="right-modal">
                <div class="study-time">
                    <label for="">学習時間</label>
                <div class="study-container">
                    <input type="text" class="study-box" />
                </div>
            </div>
            <div class="twitter-comment">
                <label for="">Twitter用コメント</label>
                <div class="twitter-container">
                    <textarea class="twitter-box"></textarea>
                </div>
            </div>
            <div class="twitter-share">
                <section class="bigcheck" id="Bigcheck">
                <div></div>
                </section>
                <li>Twitterにシェアする</li>
            </div>
            </div>
        </div>
        <div class="btn-container">
            <button class="modal-btn" id="finish-btn">記録・投稿</button>
        </div>
            <button id="modal-close" class="close-btn">×</button>
        </div>
    </div>

    <!-- ここからloading画面 -->
    <div id="loading-overlay">
        <div id="loading-page">
            <img src="{{asset('/image/loading-img.png')}}" alt="" class="loading-img , active-img" id="loading">
        </div>
    </div>

    <!-- 完了画面 -->
    <div id="finish-overlay">
        <div id="finish-page">
            <div class="finish-container">
                <div class="finish-content">

                    section class="awesome">AWESOME!</section>
                    <section class="biggest-check">
                        <div></div>
                    </section>
                <section class="finish-word">記録・投稿<br>完了しました</section>
                <button id="finish-close" class="finish-close">×</button>
            </div>
        </div>
    </div>

    </div>

    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('/js/index.js')}}"></script>
</body>
</html>
