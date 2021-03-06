
@extends('admin.layouts.layouts')

@section('content')




    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Dashboard</h2>
                <div class="page-content__header-description">Welcome to Agile CRM Sales Dashboard</div>
            </div>
            <div class="page-content__header-meta">
                <a href="#" class="btn btn-info icon-left">
                    Add Widget <span class="btn-icon mdi mdi-plus-circle"></span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="widget widget-alpha widget-alpha--color-amaranth">
                    <div>
                        <div class="widget-alpha__amount">278</div>
                        <div class="widget-alpha__description">New Projects</div>
                    </div>
                    <span class="widget-alpha__icon ua-icon-suitcase"></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="widget widget-alpha widget-alpha--color-green-jungle">
                    <div>
                        <div class="widget-alpha__amount">156</div>
                        <div class="widget-alpha__description">New Clients</div>
                    </div>
                    <span class="widget-alpha__icon ua-icon-user-outline"></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="widget widget-alpha widget-alpha--color-orange widget-alpha--donut">
                    <div>
                        <div class="widget-alpha__amount">64,87%</div>
                        <div class="widget-alpha__description">Conversion Rate</div>
                    </div>
                    <span class="widget-alpha__icon ua-icon-conversion-rate"></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="widget widget-alpha widget-alpha--color-java widget-alpha--help">
                    <div>
                        <div class="widget-alpha__amount">425</div>
                        <div class="widget-alpha__description">Support Tickets</div>
                    </div>
                    <span class="widget-alpha__icon ua-icon-ticket"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="statistic-widget statistic-widget-f">
                    <div id="radial-progress-ex1" class="statistic-widget-f__chart">
                        <span class="statistic-widget-f__chart-text"></span>
                    </div>
                    <div class="statistic-widget-f__info">
                        <div class="statistic-widget-f__value color-picton-blue">1445</div>
                        <div class="statistic-widget-f__desc">Pending Tasks</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="statistic-widget statistic-widget-f">
                    <div id="radial-progress-ex2" class="statistic-widget-f__chart">
                        <span class="statistic-widget-f__chart-text"></span>
                    </div>
                    <div class="statistic-widget-f__info">
                        <div class="statistic-widget-f__value color-waterlemon">685</div>
                        <div class="statistic-widget-f__desc">New Users</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="statistic-widget statistic-widget-f">
                    <div id="radial-progress-ex3" class="statistic-widget-f__chart">
                        <span class="statistic-widget-f__chart-text"></span>
                    </div>
                    <div class="statistic-widget-f__info">
                        <div class="statistic-widget-f__value color-heliotrope">1248</div>
                        <div class="statistic-widget-f__desc">Completed Tasks</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="statistic-widget statistic-widget-f">
                    <div id="radial-progress-ex4" class="statistic-widget-f__chart">
                        <span class="statistic-widget-f__chart-text"></span>
                    </div>
                    <div class="statistic-widget-f__info">
                        <div class="statistic-widget-f__value color-success">886</div>
                        <div class="statistic-widget-f__desc">Registered Users</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="widget widget-tabs widget-index-chart">
                    <div class="widget-tabs__header">
                        <div>
                            Weight vs weather
                        </div>
                        <ul class="nav nav-tabs widget-tabs__tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#widget-ww-all-accounts">All Accounts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#widget-ww-all-account2">Account 2</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-tabs__content">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="widget-ww-all-accounts">
                                <div class="dropdown widget-index-chart__select-date">
                                    <button class="btn btn-select btn-rounded dropdown-toggle" type="button" data-toggle="dropdown">Jan-Feb 2017</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Jan-Feb 2017</a>
                                        <a class="dropdown-item" href="#">Feb-Apr 2017</a>
                                        <a class="dropdown-item" href="#">Apr-Dec 2017</a>
                                    </div>
                                </div>
                                <div id="widget-index-chart-container" class="widget-index-chart__container"></div>
                                <div class="widget-index-chart__items">
                                    <div class="widget-index-chart__item widget-index-chart__item--yellow">
                                        <span>Your index</span>
                                        <span>17%</span>
                                    </div>
                                    <div class="widget-index-chart__item widget-index-chart__item--green">
                                        <span>Another index</span>
                                        <span>25%</span>
                                    </div>
                                    <div class="widget-index-chart__item widget-index-chart__item--grey">
                                        <span>Foreign</span>
                                        <span>10%</span>
                                    </div>
                                    <div class="widget-index-chart__item widget-index-chart__item--orange">
                                        <span>US Bond</span>
                                        <span>7%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="widget-ww-all-account2">Widget tab content</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="widget widget-controls widget-table widget-summary">
                    <div class="widget-controls__header">
                        <div>
                            Portfolio Summary
                        </div>
                        <div class="widget-controls__header-controls">
                            <span class="widget-controls__header-control ua-icon-settings"></span>
                        </div>
                    </div>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-emerland" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
                        <div class="progress-bar bg-kournikova" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">35%</div>
                        <div class="progress-bar bg-coral-light" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
                    </div>
                    <div class="widget-controls__content js-scrollable">
                        <table class="table table-no-border table-striped">
                            <thead>
                            <tr>
                                <th>Assets class</th>
                                <th>Goals</th>
                                <th>Amount</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="table__tag table__tag--green">Cash</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--orange">International Bonds</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--orange">US Bonds</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--yellow">International Stocks</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--blue">International Stocks</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--green">Cash</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--orange">International Bonds</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--orange">US Bonds</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--yellow">International Stocks</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            <tr>
                                <td><span class="table__tag table__tag--blue">International Stocks</span></td>
                                <td>17%</td>
                                <td>23%</td>
                                <td>$12,423</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-12">
                <div class="widget widget-user-card">
                    <div class="widget-user-card__bg"></div>
                    <div class="widget-user-card__content">
                        <img src="{{asset('images/backend/img/users/user-9.png')}}" alt="" width="120" height="120" class="widget-user-card__avatar">

                        <div class="widget-user-card__info">
                            <div class="widget-user-card__name">Rebecca Harris</div>
                            <div class="widget-user-card__occupation">Frontend Developer</div>
                        </div>

                        <div>
                            <a href="#" class="btn btn-info btn-rounded btn-lg widget-user-card__follow">Follow</a>
                        </div>
                    </div>
                    <div class="widget-user-card__statistics">
                        <div class="widget-user-card__statistics-item">
                            <span class="widget-user-card__statistics-amount">1420</span>
                            <span class="widget-user-card__statistics-type">Posts</span>
                        </div>
                        <div class="widget-user-card__statistics-item">
                            <span class="widget-user-card__statistics-amount">1.1m</span>
                            <span class="widget-user-card__statistics-type">Followers</span>
                        </div>
                        <div class="widget-user-card__statistics-item">
                            <span class="widget-user-card__statistics-amount">320</span>
                            <span class="widget-user-card__statistics-type">Following</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="widget widget-controls widget-contacts widget-controls--dark">
                    <div class="widget-controls__header">
                        <div>
                            <span class="widget-controls__header-icon ua-icon-user-solid"></span> Contacts
                        </div>
                        <div class="widget-controls__header-controls">
                            <span class="widget-controls__header-control ua-icon-search"></span>
                            <span class="widget-controls__header-control ua-icon-sort"></span>
                        </div>
                    </div>
                    <div class="widget-controls__content js-scrollable">
                        <div class="widget-controls__content-wrap">
                            <div class="widget-contacts__item">
                                <img src="{{asset('images/backend/img/users/user-4.png')}}" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                                <div>
                                    <a href="#" class="widget-contacts__item-name">Gabriel Saunders</a>
                                    <div class="widget-contacts__item-email">gabriel@example.com</div>
                                </div>
                            </div>
                            <div class="widget-contacts__item">
                                <img src="{{asset('images/backend/img/users/user-5.png')}}" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                                <div>
                                    <a href="#" class="widget-contacts__item-name">Shawna Cohen</a>
                                    <div class="widget-contacts__item-email">shawna@example.com</div>
                                </div>
                            </div>
                            <div class="widget-contacts__item">
                                <img src="{{asset('images/backend/img/users/user-6.png')}}" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                                <div>
                                    <a href="#" class="widget-contacts__item-name">Jason Kendall</a>
                                    <div class="widget-contacts__item-email">jason@example.com</div>
                                </div>
                            </div>
                            <div class="widget-contacts__item">
                                <img src="{{asset('images/backend/img/users/user-7.png')}}" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                                <div>
                                    <a href="#" class="widget-contacts__item-name">Thomas Banks</a>
                                    <div class="widget-contacts__item-email">thomas@example.com</div>
                                </div>
                            </div>
                            <div class="widget-contacts__item">
                                <img src="{{asset('images/backend/img/users/user-8.png')}}" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                                <div>
                                    <a href="#" class="widget-contacts__item-name">Rebecca Harris</a>
                                    <div class="widget-contacts__item-email">rebecca@example.com</div>
                                </div>
                            </div>
                            <div class="widget-contacts__item">
                                <img src="{{asset('images/backend/img/users/user-6.png')}}" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                                <div>
                                    <a href="#" class="widget-contacts__item-name">Jason Kendall</a>
                                    <div class="widget-contacts__item-email">jason@example.com</div>
                                </div>
                            </div>
                            <div class="widget-contacts__item">
                                <img src="{{asset('images/backend/img/users/user-7.png')}}" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                                <div>
                                    <a href="#" class="widget-contacts__item-name">Thomas Banks</a>
                                    <div class="widget-contacts__item-email">thomas@example.com</div>
                                </div>
                            </div>
                            <div class="widget-contacts__item">
                                <img src="{{asset('images/backend/img/users/user-8.png')}}" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                                <div>
                                    <a href="#" class="widget-contacts__item-name">Rebecca Harris</a>
                                    <div class="widget-contacts__item-email">rebecca@example.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-controls__footer">
                        <a href="#" class="widget-controls__footer-add-control">
                            <span class="icon ua-icon-user-add"></span>
                        </a>
                        <a href="#" class="widget-controls__footer-view-all">
                            <span class="widget-controls__footer-view-all-icon iconfont-arrow-circle-right"></span><span>View more</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12">
                <div class="widget widget-table widget-controls widget-payouts widget-controls--dark">
                    <div class="widget-controls__header">
                        <div>
                            <span class="widget-controls__header-icon ua-icon-wallet"></span> Previous Payouts
                        </div>
                    </div>
                    <div class="widget-controls__content js-scrollable">
                        <table class="table table-no-border table-striped">
                            <tbody>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            <tr>
                                <td class="table__datetime">May 29, 2017</td>
                                <td><span class="font-semibold color-info">Paypal</span></td>
                                <td><span class="font-semibold">+$1450.00 USD</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-welcome">
                    <div class="widget-welcome__message">
                        <h4 class="widget-welcome__message-l1">Welcome back!</h4>
                        <h6 class="widget-welcome__message-l2">Your portfolio has a 5% growth for the last mounth</h6>
                    </div>
                    <div class="widget-welcome__stats">
                        <div class="widget-welcome__stats-item early-growth">
                            <span class="widget-welcome__stats-item-value">-$1,530</span>
                            <span class="widget-welcome__stats-item-desc">Yearly Growth</span>
                        </div>
                        <div class="widget-welcome__stats-item monthly-growth">
                            <span class="widget-welcome__stats-item-value">+$550</span>
                            <span class="widget-welcome__stats-item-desc">Monthly Growth</span>
                        </div>
                        <div class="widget-welcome__stats-item daily-growth">
                            <span class="widget-welcome__stats-item-value">96%</span>
                            <span class="widget-welcome__stats-item-desc">Daily Growth</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="widget widget-controls widget-step-goal">
                    <div class="widget-controls__header">
                        <div>
                            Step Goal
                        </div>
                        <div>
                            <div class="dropdown widget-controls__dropdown">
                                <button class="btn btn-select btn-rounded dropdown-toggle" type="button" data-toggle="dropdown">By Price</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">By Price</a>
                                    <a class="dropdown-item" href="#">By Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-controls__content">
                        <div class="widget-step-goal__donut">
                            <div class="widget-step-goal__donut-wrap">
                                <div class="widget-step-goal__donut-progress">
                                    <div class="widget-step-goal__donut-progress-amount">+75%</div>
                                    <div class="widget-step-goal__donut-progress-desc">Your profit</div>
                                </div>
                                <div id="widget-step-goal-donut-chart" class="widget-step-goal__donut-chart"></div>
                            </div>
                            <div class="widget-step-goal__donut-labels">
                                <div class="widget-step-goal__donut-label">
                <span class="widget-step-goal__donut-label-name">
                  <span class="widget-step-goal__donut-label-status widget-step-goal__donut-label-status--yellow"></span>APPL
                </span>
                                    <span class="widget-step-goal__donut-label-progress is-up">$136.22</span>
                                </div>
                                <div class="widget-step-goal__donut-label">
                <span class="widget-step-goal__donut-label-name">
                  <span class="widget-step-goal__donut-label-status widget-step-goal__donut-label-status--green"></span>MSFT
                </span>
                                    <span class="widget-step-goal__donut-label-progress is-up">$64.70</span>
                                </div>
                                <div class="widget-step-goal__donut-label">
                <span class="widget-step-goal__donut-label-name">
                  <span class="widget-step-goal__donut-label-status widget-step-goal__donut-label-status--orange"></span>FB
                </span>
                                    <span class="widget-step-goal__donut-label-progress is-down">$133.08</span>
                                </div>
                            </div>
                        </div>
                        <div id="widget-step-goal-bar" class="widget-step-goal__bar"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="widget widget-controls widget-table widget-account-activity">
                    <div class="widget-controls__header">
                        <div>
                            Account Activity
                        </div>
                    </div>
                    <div class="widget-controls__content js-scrollable">
                        <table class="table table-no-border table-striped">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Deposit</td>
                                <td><span class="table__cell-up">$15</span></td>
                                <td>$31,313</td>
                            </tr>
                            <tr>
                                <td>Deposit</td>
                                <td><span class="table__cell-up">$15</span></td>
                                <td>$31,313</td>
                            </tr>
                            <tr>
                                <td>Account Withdrawal</td>
                                <td><span class="table__cell-down">$15</span></td>
                                <td>$31,313</td>
                            </tr>
                            <tr>
                                <td>Deposit</td>
                                <td><span class="table__cell-down">$15</span></td>
                                <td>$31,313</td>
                            </tr>
                            <tr>
                                <td>Deposit</td>
                                <td><span class="table__cell-up">$15</span></td>
                                <td>$31,313</td>
                            </tr>
                            <tr>
                                <td>Deposit</td>
                                <td><span class="table__cell-up">$15</span></td>
                                <td>$31,313</td>
                            </tr>
                            <tr>
                                <td>Deposit</td>
                                <td><span class="table__cell-up">$15</span></td>
                                <td>$31,313</td>
                            </tr>
                            <tr>
                                <td>Deposit</td>
                                <td><span class="table__cell-up">$15</span></td>
                                <td>$31,313</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="widget-controls__footer widget-controls__footer-btn">
                        <a href="#" class="btn btn-info btn-rounded">Make a transaction</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="widget widget-controls widget-table widget-brands">
                    <div class="widget-brands__header">
                        <ul class="nav nav-tabs widget-brands__tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#widget-brands-microsoft">Microsoft</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#widget-brands-facebook">Facebook</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#widget-brands-google">Apple Inc.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-brands__content">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="widget-brands-microsoft">
                                <h5 class="widget-brands__brand-name">Microsoft</h5>
                                <div class="widget-brands__separator"></div>
                                <div class="widget-brands__desc">+25% <span class="widget-brands__time">In the past year</span></div>
                                <div class="widget-brands__btn">
                                    <a href="#" class="btn btn-info btn-rounded">Make a transaction</a>
                                </div>
                                <div id="widget-brands-chart" class="widget-brands__chart"></div>
                            </div>
                            <div class="tab-pane fade" id="widget-brands-facebook">2</div>
                            <div class="tab-pane fade" id="widget-brands-google">3</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="widget widget-controls widget-table widget-billing">
                    <div class="widget-controls__header">
                        <div>
                            Billing Notice
                        </div>
                        <div class="widget-controls__header-controls">
                            <a href="#" class="widget-controls__header-control">Learn More</a>
                        </div>
                    </div>
                    <div class="widget-billing__header">
          <span class="widget-billing__card-number">
            <img src="{{asset('images/backend/img/flags/de.png')}}" alt="" width="24" height="24" class="widget-billing__card-country rounded-circle">
            <span>Ending **** 5896</span>
          </span>
                        <span class="widget-billing__card-expired">05/19</span>
                        <span class="widget-billing__card-type">Visa</span>
                    </div>
                    <div class="widget-controls__content js-scrollable">
                        <table class="table table-no-border">
                            <tbody>
                            <tr>
                                <td>PRO Package</td>
                                <td class="table__cell-text-light">Standart Payment</td>
                                <td class="table__cell-text-light text-right">19 Jan 2017</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Job Posted</td>
                                <td class="table__cell-text-light">30-Days Recuring</td>
                                <td class="table__cell-text-light text-right">24 Nov 2016</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PRO Package</td>
                                <td class="table__cell-text-light">Gift</td>
                                <td class="table__cell-text-light text-right">7 Mar 2016</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PRO Package</td>
                                <td class="table__cell-text-light">Standart Payment</td>
                                <td class="table__cell-text-light text-right">19 Jan 2017</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Job Posted</td>
                                <td class="table__cell-text-light">30-Days Recuring</td>
                                <td class="table__cell-text-light text-right">24 Nov 2016</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PRO Package</td>
                                <td class="table__cell-text-light">Gift</td>
                                <td class="table__cell-text-light text-right">7 Mar 2016</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PRO Package</td>
                                <td class="table__cell-text-light">Standart Payment</td>
                                <td class="table__cell-text-light text-right">19 Jan 2017</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Job Posted</td>
                                <td class="table__cell-text-light">30-Days Recuring</td>
                                <td class="table__cell-text-light text-right">24 Nov 2016</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PRO Package</td>
                                <td class="table__cell-text-light">Gift</td>
                                <td class="table__cell-text-light text-right">7 Mar 2016</td>
                                <td class="table__cell-compact">
                                    <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget widget-controls widget-content-tabs widget-activity">
                    <div class="widget-controls__header">
                        <div>
                            Activity
                        </div>
                        <div class="widget-controls__header-controls">
                            <a href="#" class="widget-controls__header-control">Learn More</a>
                        </div>
                    </div>
                    <div class="widget-controls__content widget-content-tabs__tabs">
                        <nav class="nav nav-tabs">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#widget-activity-tab">Activity</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#widget-blocked-users-tab">Blocked Users</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#widget-nda-tab">NDAs</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#widget-customer-invoices-tab">Customers Invoices</a>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="widget-activity-tab">
                                <div class="tab-pane__content js-scrollable">
                                    <div class="widget-activity__items">
                                        <span class="widget-activity__date">Today</span>
                                        <div class="widget-activity__item widget-activity__item--green">
                                            <div class="widget-activity__item-text">
                                                Prepared all declared documents for invoice confirmation
                                            </div>
                                            <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                                        </div>
                                        <div class="widget-activity__item widget-activity__item--orange">
                                            <div class="widget-activity__item-text">
                                                Fulfill the necessary action plan for current deadlines
                                            </div>
                                            <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                                        </div>
                                        <div class="widget-activity__item widget-activity__item--blue">
                                            <div class="widget-activity__item-text">
                                                Prepared all declared documents for invoice confirmation
                                            </div>
                                            <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                                        </div>
                                        <div class="widget-activity__item widget-activity__item--green">
                                            <div class="widget-activity__item-text">
                                                Prepared all declared documents for invoice confirmation
                                            </div>
                                            <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                                        </div>
                                        <span class="widget-activity__date">Yesterday</span>
                                        <div class="widget-activity__item widget-activity__item--green">
                                            <div class="widget-activity__item-text">
                                                Prepared all declared documents for invoice confirmation
                                            </div>
                                            <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                                        </div>
                                        <div class="widget-activity__item widget-activity__item--green">
                                            <div class="widget-activity__item-text">
                                                Prepared all declared documents for invoice confirmation
                                            </div>
                                            <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="widget-blocked-users-tab">
                                <div class="widget-activity__blocked-users">Blocked Users</div>
                            </div>
                            <div class="tab-pane" id="widget-nda-tab">
                                <div class="widget-activity__nda">NDA</div>
                            </div>
                            <div class="tab-pane" id="widget-customer-invoices-tab">
                                <div class="widget-activity__customer-invoices">Customer Invoices</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget widget-controls widget-contacts widget-todo widget-controls--dark">
                    <div class="widget-controls__header">
                        <div>
                            <span class="widget-controls__header-icon ua-icon-todo"></span> Todo Lists
                        </div>
                    </div>
                    <div class="widget-controls__content js-scrollable">
                        <div class="widget-controls__content-wrap">
                            <span class="widget-todo__date">Today</span>
                            <div class="widget-todo__item is-completed">
              <span class="widget-todo__item-icon">
                <span class="ua-icon-check"></span>
              </span>
                                <div class="widget-todo__item-info">
                                    <span class="widget-todo__item-name">Consectetur Sem Sollicitudin</span>
                                    <span class="widget-todo__item-date">08:22 AM</span>
                                </div>
                            </div>
                            <div class="widget-todo__item is-completed">
              <span class="widget-todo__item-icon">
                <span class="ua-icon-check"></span>
              </span>
                                <div class="widget-todo__item-info">
                                    <span class="widget-todo__item-name">Consectetur Sem Sollicitudin</span>
                                    <span class="widget-todo__item-date">08:22 AM</span>
                                </div>
                            </div>
                            <span class="widget-todo__date">Tomorrow</span>
                            <div class="widget-todo__item">
                                <span class="textavatar widget-todo__item-avatar widget-todo__item-avatar--orange" data-width="40" data-height="40" data-name="Richard Hendrick" data-toggle="textavatar"></span>
                                <div class="widget-todo__item-info">
                                    <span class="widget-todo__item-name">Porta Vevenatis Quam</span>
                                    <span class="widget-todo__item-date">10:30 PM</span>
                                </div>
                            </div>
                            <div class="widget-todo__item">
                                <span class="textavatar widget-todo__item-avatar widget-todo__item-avatar--green" data-width="40" data-height="40" data-name="Deborah Allen" data-toggle="textavatar"></span>
                                <div class="widget-todo__item-info">
                                    <span class="widget-todo__item-name">Nullam quis risus eget urna mollis ornare leo</span>
                                    <span class="widget-todo__item-date">rebecca@masterskin.ru</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-controls__footer">
                        <a href="#" class="widget-controls__footer-add-control">
                            <span class="icon ua-icon-plus-circle"></span>
                        </a>
                        <a href="#" class="widget-controls__footer-view-all">
                            <span class="widget-controls__footer-view-all-icon iconfont-arrow-circle-right"></span><span>View more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="statistic-widget statistic-widget-g">
                    <div class="statistic-widget-g__info">
                        <div class="statistic-widget-g__title">Followers</div>
                        <div class="statistic-widget-g__desc">
                            Get Around Easily A New <br>
                            York Limousine Service
                        </div>
                        <a href="#" class="statistic-widget-g__link">Details</a>
                    </div>
                    <div id="radial-progress-ex5" class="statistic-widget-g__chart">
                        <span class="statistic-widget-g__chart-text"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="statistic-widget statistic-widget-g">
                    <div class="statistic-widget-g__info">
                        <div class="statistic-widget-g__title">Orders</div>
                        <div class="statistic-widget-g__desc">
                            Get Around Easily A New <br>
                            York Limousine Service
                        </div>
                        <a href="#" class="statistic-widget-g__link">Details</a>
                    </div>
                    <div id="radial-progress-ex6" class="statistic-widget-g__chart">
                        <span class="statistic-widget-g__chart-text"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="statistic-widget statistic-widget-g">
                    <div class="statistic-widget-g__info">
                        <div class="statistic-widget-g__title">Tasks</div>
                        <div class="statistic-widget-g__desc">
                            Get Around Easily A New <br>
                            York Limousine Service
                        </div>
                        <a href="#" class="statistic-widget-g__link">Details</a>
                    </div>
                    <div id="radial-progress-ex7" class="statistic-widget-g__chart">
                        <span class="statistic-widget-g__chart-text"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="statistic-widget statistic-widget-g">
                    <div class="statistic-widget-g__info">
                        <div class="statistic-widget-g__title">Clients</div>
                        <div class="statistic-widget-g__desc">
                            Get Around Easily A New <br>
                            York Limousine Service
                        </div>
                        <a href="#" class="statistic-widget-g__link">Details</a>
                    </div>
                    <div id="radial-progress-ex8" class="statistic-widget-g__chart">
                        <span class="statistic-widget-g__chart-text"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection