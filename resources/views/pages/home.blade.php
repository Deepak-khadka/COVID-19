@extends('master.master')

@section('title')
     Home
    @endsection

@section('content')


           <div class="main-panel">
            <div class="content-wrapper">
                <!--Defination-->
                <div class="definition">
                    <h2>What is Corona?</h2>
                    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                        Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness
                    </p>
                    <p>
                        The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.
                        The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
                        At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments.
                    </p>
                </div>
                <!--End of Defination-->
                <!--Data-->
                <div class=" grid-margin data-section text-center">
                    <ul>
                        <li>
                            <h3>Corona Cases</h3>
                            <span>621,090</span>
                        </li>
                        <li>
                            <h3>Recovered</h3>
                            <span>137,363</span>
                        </li>
                        <li>
                            <h3>Death</h3>
                            <span>28,662</span>
                        </li>
                    </ul>
                </div>
               <!--End of Data-->

                <!--Symptoms and Preventions-->
                <div class="blocks">
                    <!--Symptoms-->
                    <div class="symptoms-section">
                        <label>Symptoms</label>
                        <p>
                            The COVID-19 virus affects different people in different ways.  COVID-19 is a respiratory disease and most infected people will develop mild to moderate symptoms and recover without requiring special treatment.  People who have underlying medical conditions and those over 60 years old have a higher risk of developing severe disease and death.
                        </p>
                        <p>Some of the Common Symptoms are:</p>
                        <div class="symptoms-list">
                           <ul>master
                               <li class="text-center">
                                   <img src="../images/fever.jpg" alt=""> <br>
                                   fever
                                </li>
                                <li class="text-center">
                                    <img src="../images/headache.jpg" alt=""> <br>
                                    headache
                                </li>
                                <li class="text-center">
                                    <img src="../images/breath.jpg" alt=""> <br>
                                    Shortning of Breath
                                </li>
                                <li class="text-center">
                                    <img src="../images/cough.jpg" alt=""> <br>
                                    Cough
                                </li>
                                <li class="text-center">
                                    <img src="../images/throat.jpg" alt=""> <br>
                                    Sour Throat
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--End of Symptoms-->
                    <!--Preventions-->
                    <div class=" prevention">
                        <label>Preventions</label>
                        <p>To prevent infection and to slow transmission of COVID-19, do the following:</p>
                        <ul>
                            <li>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li>
                            <li>Maintain at least 1 metre distance between you and people coughing or sneezing.</li>
                            <li>Avoid touching your face.</li>
                            <li>Cover your mouth and nose when coughing or sneezing.</li>
                            <li>Stay home if you feel unwell.</li>
                            <li>Refrain from smoking and other activities that weaken the lungs.</li>
                            <li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li>
                        </ul>
                    </div>
                    <!--Preventions-->
                </div>
               <!--End of Symptoms-->
            </div>

            <div class="part">
                <div class="pictures text-center">
                    <span>Sitution in Nepal in Pictures</span>
                    <div class="image">
                        <img src="../images/pic6.jpg" alt="">
                        <p>Hospital Staffs in Safety Suits</p>
                    </div>
                    <div class="image">
                        <img src="../images/pic5.jpg" alt="">
                        <p>Staffs at Tribhuwan International Airport</p>
                    </div>
                    <div class="image">
                        <img src="../images/pic2.jpg" alt="">
                        <p>Hospital Staff being prepared for the battel</p>
                    </div>
                    <div class="image">
                        <img src="../images/pic4.jpg" alt="">
                        <p>Ministry of Health and Population in Public </p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
               <div class="container-fluid">
                   <footer class="footer">
                       <span>Project Sanjeevani</span>
                   </footer>
               </div>

            <!-- partial -->
          </div>


@endsection
