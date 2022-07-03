@extends('layouts.main')

@section('content')

    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Paragliding<em>Schedule</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Choose a paragliding schedule that fits your empty schedule. Make sure to choose the right paragliding guide.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Aris Afriansyah</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday saturday ts-item" data-tsmeta="tuesday" data-tsmeta="saturday">2:00PM - 3:30PM</td>
                                    <td>
                                        <div class="main-button scroll-to-section">
                                            <a href="/payment">Choose</a>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day-time">Hening Paradigma</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>
                                        <div class="main-button scroll-to-section">
                                            <a href="/payment">Choose</a>
                                        </div>    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day-time">Roni Pratama</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>
                                        <div class="main-button scroll-to-section">
                                            <a href="/payment">Choose</a>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day-time">Joni Efendi</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>
                                        <div class="main-button scroll-to-section">
                                            <a href="/payment">Choose</a>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day-time">Jafro Megawanto</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>
                                        <div class="main-button scroll-to-section">
                                            <a href="/payment">Choose</a>
                                        </div>     
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection