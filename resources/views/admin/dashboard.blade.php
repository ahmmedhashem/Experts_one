@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">

                <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>الانشطه</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4 style="    font-size: 30px;font-weight: bold;">{{ App\Models\Activitie::count() }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="btc-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>الادوار</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4 style="    font-size: 30px;font-weight: bold;">{{ App\Models\Role::count() }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="eth-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>المهام</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4 style="    font-size: 30px;font-weight: bold;">{{ App\Models\Mission::count() }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="xrp-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Candlestick Multi Level Control Chart -->

            <!-- Sell Orders & Buy Order -->
            <div class="row match-height">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title text-center">عدد الجهات المشاركه في كل معيار</h4>

                        </div>
                        <div class="card-content collapse show">
                        <div class="card-body">
                            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title text-center">الادوار والمسؤليات الرئيسيه</h4>

                        </div>
                        <div class="card-content collapse show">
                        <div class="card-body">
                            <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title text-center">عدد الجهات في نطاق السياسات والتشريعات واللوائح التنظيميه</h4>

                    </div>
                    <div class="card-content collapse show">
                      <div class="card-body">

                        <div id="column-chart"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 100%; height: 400px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="100%" height="400" aria-label="A chart." style="overflow: hidden;"><defs id="_ABSTRACT_RENDERER_ID_6"><clipPath id="_ABSTRACT_RENDERER_ID_7"><rect x="53" y="25" width="100%" height="350"></rect></clipPath></defs><rect x="0" y="0" width="100%" height="400" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="464" y="8" width="138" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                            <g>
                                <rect x="445" y="8" width="59" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                <g>
                                    <text text-anchor="start" x="475" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">تحدیث القوائم للمواد الخطرة</text>
                                </g>
                                <rect x="445" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                            </g>
                            <g>
                                <rect x="600" y="8" width="60" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                <g>
                                    <text text-anchor="start" x="630" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">إعداد السیاسات</text>
                                </g>
                                <rect x="600" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                            </g>
                            <g>
                                <rect x="700" y="8" width="59" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                <g>
                                    <text text-anchor="start" x="730" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">تحلیل المخاطر</text>
                                </g>
                                <rect x="700" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                            </g>
                            <g>
                                <rect x="800" y="8" width="60" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                <g>
                                    <text text-anchor="start" x="830" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">تحلیل البیانات</text>
                                </g>
                                <rect x="800" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                            </g>
                        </g><g><rect x="53" y="25" width="100%" height="350" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(file:///Users/ahmedsaleh/Desktop/adminTheme-master/html/rtl/horizontal-menu-template/google-bar-charts.html#_ABSTRACT_RENDERER_ID_7)"><g><rect x="53" y="374" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="330" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="287" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="243" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="200" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="156" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="112" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="69" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="25" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="352" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="309" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="265" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="221" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="178" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="134" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="90" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="47" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect></g><g>
                            <rect x="90" y="183" width="59" height="191" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                            <rect x="387" y="216" width="59" height="158" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                            <rect x="690" y="166" width="59" height="208" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                            <rect x="990" y="83" width="59" height="291" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>

                            <rect x="150" y="183" width="59" height="191" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                            <rect x="447" y="216" width="59" height="158" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                            <rect x="750" y="166" width="59" height="208" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                            <rect x="1050" y="83" width="59" height="291" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>

                            <rect x="210" y="320" width="59" height="54" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                            <rect x="507" y="310" width="59" height="64" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                            <rect x="810" y="277" width="59" height="97" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                            <rect x="1110" y="281" width="59" height="93" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>

                            <rect x="270" y="320" width="59" height="54" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                            <rect x="567" y="310" width="59" height="64" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                            <rect x="870" y="277" width="59" height="97" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                            <rect x="1170" y="281" width="59" height="93" stroke="none" stroke-width="0" fill="#f6b75a"></rect>

                        </g><g><rect x="53" y="374" width="100%" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g></g><g></g><g><g><text text-anchor="middle" x="207.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2011</text></g><g><text text-anchor="middle" x="504.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2012</text></g><g><text text-anchor="middle" x="806.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2013</text></g><g><text text-anchor="middle" x="1109.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2014</text></g><g><text text-anchor="end" x="41.5" y="378.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="41.5" y="335.075" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">200</text></g><g><text text-anchor="end" x="41.5" y="291.45" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">400</text></g><g><text text-anchor="end" x="41.5" y="247.825" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">600</text></g><g><text text-anchor="end" x="41.5" y="204.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">800</text></g><g><text text-anchor="end" x="41.5" y="160.575" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,000</text></g><g><text text-anchor="end" x="41.5" y="116.95" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,200</text></g><g><text text-anchor="end" x="41.5" y="73.325" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,400</text></g><g><text text-anchor="end" x="41.5" y="29.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,600</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Year</th><th>Sales</th><th>Costs</th></tr></thead><tbody><tr><td>2011</td><td>880</td><td>250</td></tr><tr><td>2012</td><td>730</td><td>300</td></tr><tr><td>2013</td><td>960</td><td>450</td></tr><tr><td>2014</td><td>1,340</td><td>430</td></tr><tr><td>2015</td><td>1,560</td><td>540</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 410px; left: 1078px; white-space: nowrap; font-family: Arial; font-size: 12px;">Costs</div><div></div></div></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="row">
                <div class="col-6">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title text-center">الجهات الاكثر تأثيرا في منظومه المواد الخطره</h4>
                    </div>
                    <div class="card-content collapse show">
                      <div class="card-body">

                        <div class="chart-container">
                          <div id="bar-chart"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 100%; height: 400px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="100%" height="400" aria-label="A chart." style="overflow: hidden;"><defs id="_ABSTRACT_RENDERER_ID_0"><clipPath id="_ABSTRACT_RENDERER_ID_1"><rect x="53" y="25" width="100%" height="350"></rect></clipPath><filter id="_ABSTRACT_RENDERER_ID_14"><feGaussianBlur in="SourceAlpha" stdDeviation="2"></feGaussianBlur><feOffset dx="1" dy="1"></feOffset><feComponentTransfer><feFuncA type="linear" slope="0.1"></feFuncA></feComponentTransfer><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><rect x="0" y="0" width="1068" height="400" stroke="none" stroke-width="0" fill="#ffffff"></rect>
                            <g>
                                <rect x="80" y="8" width="138" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="80" y="8" width="59" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <text text-anchor="start" x="110" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">إنفاذ السیاسات التشریعات</text>
                                    </g>
                                    <rect x="80" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="#2494be"></rect>
                                </g>
                                <g>
                                    <rect x="220" y="8" width="60" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <text text-anchor="start" x="250" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">سیاسات وتشریعات</text>
                                    </g>
                                    <rect x="220" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                                </g>
                                <g>
                                    <rect x="335" y="8" width="59" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <text text-anchor="start" x="365" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">المراقبة والرصد</text>
                                    </g>
                                    <rect x="335" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                                </g>
                                <g>
                                    <rect x="440" y="8" width="60" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <text text-anchor="start" x="470" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">الجاھزیة والاستجابة</text>
                                    </g>
                                    <rect x="440" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                                </g>
                            </g>
                            <g><rect x="53" y="25" width="100%  " height="350" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(file:///Users/ahmedsaleh/Desktop/adminTheme-master/html/rtl/horizontal-menu-template/google-bar-charts.html#_ABSTRACT_RENDERER_ID_1)"><g><rect x="53" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="113" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="173" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="233" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="293" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="353" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="413" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="473" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="533" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="593" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#e9e9e9"></rect></g><g>
                                <rect x="54" y="39" width="327" height="15" stroke="none" stroke-width="0" fill="#2494be"></rect>
                                <rect x="54" y="120" width="137" height="15" stroke="none" stroke-width="0" fill="#2494be"></rect>
                                <rect x="54" y="201" width="275" height="15" stroke="none" stroke-width="0" fill="#2494be"></rect>
                                <rect x="54" y="282" width="303" height="15" stroke="none" stroke-width="0" fill="#2494be"></rect>

                                <rect x="54" y="54" width="170" height="15" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                                <rect x="54" y="135" width="279" height="15" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                                <rect x="54" y="216" width="169" height="15" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                                <rect x="54" y="297" width="357" height="15" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>

                                <rect x="54" y="69" width="227" height="15" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                                <rect x="54" y="150" width="137" height="15" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                                <rect x="54" y="231" width="275" height="15" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                                <rect x="54" y="312" width="203" height="15" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>

                                <rect x="54" y="84" width="349" height="15" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                                <rect x="54" y="165" width="279" height="15" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                                <rect x="54" y="246" width="169" height="15" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                                <rect x="54" y="327" width="257" height="15" stroke="none" stroke-width="0" fill="#f6b75a"></rect>

                            </g><g><rect x="53" y="25" width="1" height="350" stroke="none" stroke-width="0" fill="#333333"></rect></g></g><g></g><g><g><text text-anchor="middle" x="53.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="middle" x="173.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">200</text></g><g><text text-anchor="middle" x="293.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">400</text></g><g><text text-anchor="middle" x="413.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">600</text></g><g><text text-anchor="middle" x="533.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">800</text></g><g><text text-anchor="middle" x="653.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,000</text></g><g><text text-anchor="middle" x="773.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,200</text></g><g><text text-anchor="middle" x="893.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,400</text></g><g><text text-anchor="middle" x="1013.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,600</text></g><g><text text-anchor="end" x="41" y="72.6" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2011</text></g><g><text text-anchor="end" x="41" y="155" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2012</text></g><g><text text-anchor="end" x="41" y="234" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2013</text></g><g><text text-anchor="end" x="41" y="319" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2014</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Year</th><th>Sales</th><th>Costs</th></tr></thead><tbody><tr><td>2011</td><td>880</td><td>250</td></tr><tr><td>2012</td><td>730</td><td>300</td></tr><tr><td>2013</td><td>960</td><td>450</td></tr><tr><td>2014</td><td>1,340</td><td>430</td></tr><tr><td>2015</td><td>1,560</td><td>540</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 410px; left: 1078px; white-space: nowrap; font-family: Arial; font-size: 12px; font-weight: bold;">880</div><div></div></div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">الثغرات</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                        <tr>
                                            <th> الاسم</th>
                                            <th>المعيار</th>
                                            <th>النشاط</th>
                                            <th>تاريخ الاضافه</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-success bg-lighten-5">
                                            <td>اختبار</td>
                                            <td> المعيار الاول</td>
                                            <td>النشاط الاول</td>
                                            <td>01-11-2022</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var xValues = ["المتفجرات", "الأشعاعیة والنوویة", "المواد البیولوجیة", "المواد الكیمیائیة"];
    var yValues = [290, 786, 333, 800 ];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",

    ];

    new Chart("myChart", {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: ""
        }
      }
    });
    </script>

<script>
    var xValues = ["لسیاسات والتشریعات", "إنفاذ السیاسات", "الجاھزیة", "المراقبة والرصد"];
    var yValues = [300, 800, 980, 329, ];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",

    ];

    new Chart("myChart2", {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: ""
        }
      }
    });
    </script>
@endsection
