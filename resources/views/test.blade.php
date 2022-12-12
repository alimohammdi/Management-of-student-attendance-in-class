@extends('dashboard.layouts.master')
@section('title',' مدیریت اساتید-داشبورد')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="table-responsive">
                            <table class="table table-sm  border cell-border">
                                <tbody><tr bgcolor="" style="text-align: center">
                                    <th width="8%">&nbsp;</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th><th>19</th><th>20</th></tr>
                                <tr>
                                    <td align="center" width="6%" height="12%">شنبه</td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" bgcolor="" width="6%" height="12%" colspan="2">طراحی شی گرای سیستم ها(3), پدیداران مقدم فرهنگ,
                                        (ساختمان شماره 3 - طبقه اول -  کلاس 312) <span title="مجتمع آموزش عالی اسفراین->ساختمان شماره 3 - طبقه اول -  کلاس 312" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span   title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                </tr>
                                <tr>
                                    <td align="center" width="6%" height="12%">یکشنبه</td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" bgcolor="" width="6%" height="12%" colspan="2">فیزیک۲(3), خرسند زاک علی,
                                        (ساختمان شماره چهار(شهید خدا بنده) _ کلاس 403) <span title="مجتمع آموزش عالی اسفراین->ساختمان شماره چهار(شهید خدا بنده) _ کلاس 403" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;1070&quot;,&quot;17193&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" bgcolor="" width="6%" height="12%" colspan="2">مدارهای الکتریکی(3), حورعلی فاطمه,
                                        (ساختمان شماره 3 - طبقه اول -  کلاس 314) <span title="مجتمع آموزش عالی اسفراین->ساختمان شماره 3 - طبقه اول -  کلاس 314" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;1134&quot;,&quot;17339&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                </tr>
                                <tr>
                                    <td align="center" width="6%" height="12%">دوشنبه</td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" bgcolor="#FFDCB9" width="6%" height="12%" colspan="2">فیزیک۲(3), خرسند زاک علی,
                                        (ساختمان شماره چهار(شهید خدا بنده) _ کلاس 403)*<font size="1" color="#998F8F">شروع زوج</font> <span title="مجتمع آموزش عالی اسفراین->ساختمان شماره چهار(شهید خدا بنده) _ کلاس 403" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;1070&quot;,&quot;17193&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                </tr>
                                <tr>
                                    <td align="center" width="6%" height="12%" rowspan="2">سه شنبه</td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" bgcolor="" width="6%" height="12%" colspan="2">طراحی زبان های برنامه سازی(3), امامی جلال,
                                        (ساختمان شماره 3 - طبقه اول -  کلاس 314) <span title="مجتمع آموزش عالی اسفراین->ساختمان شماره 3 - طبقه اول -  کلاس 314" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;1414&quot;,&quot;17359&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" bgcolor="#FFDCB9" width="6%" height="12%" colspan="2">مدارهای الکتریکی(3), حورعلی فاطمه,
                                        (ساختمان شماره 3 - طبقه اول -  کلاس 313)*<font size="1" color="#998F8F">شروع زوج</font> <span title="مجتمع آموزش عالی اسفراین->ساختمان شماره 3 - طبقه اول -  کلاس 313" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;1134&quot;,&quot;17339&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" bgcolor="" width="6%" height="12%" colspan="2">ازمایشگاه فیزیک۲(1), محمد نژاد آسیه,
                                        (ساختمان اداری- طبقه اول-آزمایشگاه فیزیک1و2) <span title="مجتمع آموزش عالی اسفراین->ساختمان اداری- طبقه اول-آزمایشگاه فیزیک1و2" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;1123&quot;,&quot;17343&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                </tr>
                                <tr>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" bgcolor="#FFDCB9" width="6%" height="12%" colspan="2">طراحی شی گرای سیستم ها(3), پدیداران مقدم فرهنگ,
                                        (ساختمان شماره 3 - طبقه اول -  کلاس 315)*<font size="1" color="#998F8F">شروع فرد</font> <span title="مجتمع آموزش عالی اسفراین->ساختمان شماره 3 - طبقه اول -  کلاس 315" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;6600&quot;,&quot;17501&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                </tr>
                                <tr>
                                    <td align="center" width="6%" height="12%">چهارشنبه</td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" bgcolor="" width="6%" height="12%" colspan="2">آزمایشگاه ریزپردازنده(1), امامی جلال,
                                        (کارگاه کامپیوتر) <span title="مجتمع آموزش عالی اسفراین->کارگاه کامپیوتر" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;1414&quot;,&quot;17345&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" bgcolor="#FFDCB9" width="6%" height="12%" colspan="2">طراحی زبان های برنامه سازی(3), امامی جلال,
                                        (ساختمان شماره 3 - طبقه اول -  کلاس 314)*<font size="1" color="#998F8F">شروع فرد</font> <span title="مجتمع آموزش عالی اسفراین->ساختمان شماره 3 - طبقه اول -  کلاس 314" style="cursor:pointer;"><i class="fas fa-lg fa-info-circle fa-sm"></i></span><span onclick="javascript:ShowCourseSyllabus(&quot;1414&quot;,&quot;17359&quot;)" title="طرح درس" style="cursor:pointer;"><i class="fas fa-lg fa-book-open fa-sm"></i></span></td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                </tr>
                                <tr>
                                    <td align="center" width="6%" height="12%">پنجشنبه</td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                </tr>
                                <tr>
                                    <td align="center" width="6%" height="12%">جمعه</td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                    <td align="center" width="6%" height="12%" colspan="1"> </td>
                                </tr>
                                </tbody>
                            </table>
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
