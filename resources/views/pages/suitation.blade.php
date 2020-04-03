@extends('master.master')

@section('content')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="cases">
                            <div class="text-center">
                                <h2>Cases Throughout the world</h2>
                            </div>
                            <!--Active Cases-->
                            <div class="active-cases">
                                <div class="title text-center" >
                                        <span>Active Cases</span>
                                </div>
                                <div class="total-cases">
                                    <div class="current text-center">
                                            <h2>537,899</h2>
                                            <p>Curret Infected People</p>
                                    </div>
                                    <div class="condition">
                                        <div class="mild">
                                                <h2>511,180</h2>
                                                <p>Mild Condition</p>
                                        </div>
                                        <div class="serious">
                                            <h2>26,719</h2>
                                            <p>Serious Condition</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of Active Cases-->
                            <div class="closed-cases">
                                <div class="title text-center" >
                                    <span>Closed Cases</span>
                                </div>
                                <div class="total-cases">
                                    <div class="current text-center">
                                        <h2>185,833</h2>
                                        <p>Curret cases being treated</p>
                                    </div>
                                    <div class="condition">
                                        <div class="mild">
                                            <h2>151,833</h2>
                                            <p>Recorvered</p>
                                        </div>
                                        <div class="serious">
                                        <h2>34,000</h2>
                                        <p>Death</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of Active Cases-->
                        </div>
                    </div>
                    <!--Data-->

                    <div class="row cases text-center">
                        <div class="nepal-case">
                            <div class="title">
                               <h2>Cases in Nepal</h2>
                            </div>
                            <ul>
                                <li>
                                    <h3>Total Tested Cases</h3>
                                    <span>917</span>
                                </li>
                                <li>
                                    <h3>Negative cases</h3>
                                    <span>913</span>
                                </li>
                                <li>
                                    <h3>Positive Cases</h3>
                                    <span>4</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End of Data-->

                    <!--News-->
                    <div class="row">
                        <div class="reports-list">
                            <h2>Read News</h2>
                            <div class="new-box">
                                <h3>Latest Reports</h3>
                                <ul>
                                    <li>4th new cases in Nepal <a href="https://www.spotlightnepal.com/2020/03/27/nepal-has-fourth-case-coronavirus-infection/">(Source)</a></li>
                                    <li>Nepali in Australia tests positive for Corona<a href="https://thehimalayantimes.com/nepal/nepali-in-australia-tests-positive-for-coronavirus/">(Source)</a></li>
                                    <li>5th new cases in Nepal <a href="https://ekantipur.com/news/2020/03/28/158539203252448635.html">(Source)</a></li>
                                    <li>Suitation Report by WHO <a href="https://www.who.int/docs/default-source/coronaviruse/situation-reports/20200329-sitrep-69-covid-19.pdf?sfvrsn=8d6620fa_4">(Source)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End of News-->

                    <!--reportlist-->
                    <div class="row">
                        <div class="update-list ">
                            <div class="title">
                                <h2>Corona Updates</h2>
                             </div>
                            <table>
                                <tr>
                                    <th>Country</th>
                                    <th>Total cases</th>
                                    <th>Recorvered</th>
                                    <th>Death</th>
                                </tr>
                                <tr>
                                    <th>USA</th>
                                    <th>142793</th>
                                    <th>4562</th>
                                    <th>2490</th>
                                </tr>
                                <tr>
                                    <th>Italy</th>
                                    <th>97,689</th>
                                    <th>13,030</th>
                                    <th>10,779</th>
                                </tr>
                                <tr>
                                    <th>Spain</th>
                                    <th>85,195</th>
                                    <th>16,780</th>
                                    <th>7,340</th>
                                </tr>
                                <tr>
                                    <th>China</th>
                                    <th>81,470</th>
                                    <th>75,700</th>
                                    <th>3,304</th>
                                </tr>
                                <tr>
                                    <th>Germany</th>
                                    <th>63,929</th>
                                    <th>9,211</th>
                                    <th>560</th>
                                </tr>
                                <tr>
                                    <th>Franch</th>
                                    <th>40,174</th>
                                    <th>7,202</th>
                                    <th>2,606</th>
                                </tr>
                                <tr>
                                    <th>UK</th>
                                    <th>19,522</th>
                                    <th>135</th>
                                    <th>1,228</th>
                                </tr>
                                <tr>
                                    <th>S. Korea</th>
                                    <th>9,661</th>
                                    <th>5,228</th>
                                    <th>158</th>
                                </tr>
                                <tr>
                                    <th>Israel</th>
                                    <th>4,347</th>
                                    <th>134</th>
                                    <th>16</th>
                                </tr>
                                <tr>
                                    <th>Brazil</th>
                                    <th>4,330</th>
                                    <th>120</th>
                                    <th>140</th>
                                </tr>
                                <tr>
                                    <th>Australia</th>
                                    <th>4,245</th>
                                    <th>244</th>
                                    <th>18</th>
                                </tr>
                                <tr>
                                    <th>India</th>
                                    <th>1,071</th>
                                    <th>100</th>
                                    <th>29</th>
                                </tr>
                                <tr>
                                    <th>Greece</th>
                                    <th>1,156</th>
                                    <th>52</th>
                                    <th>39</th>
                                </tr>
                                <tr>
                                    <th>Canada</th>
                                    <th>6,320</th>
                                    <th>573</th>
                                    <th>65</th>
                                </tr>
                                <tr>
                                    <th>Turkey</th>
                                    <th>9,217</th>
                                    <th>105</th>
                                    <th>131</th>
                                </tr>
                                <tr>
                                    <th>Switzerland</th>
                                    <th>15,526</th>
                                    <th>1,823</th>
                                    <th>333</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!--End of reportlist-->
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!--Footer-->
            <footer class="footer">
                <span>Project Sanjeevani</span>
            </footer>
            <!-- partial -->

   @endsection
