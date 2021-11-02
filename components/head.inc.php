<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>/css/bootstrap.min.css">

    <link href="<?php echo ROOT_DIR; ?>/css/europa-156337870.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>/css/style.css">
    <title>Metropolitan School of Business & Management UK</title>
</head>

<style>
    /* body{
        background-color: #fafbfe;
    } */

    body{
        background-color: #ffffff;
    }

    .quiz-questions-sect h3 {
        font-weight: 700;
    }

    .modal {
        padding-right: 0px;
    }

    .admin-staff-container .nav-pills .nav-link.active,
    .admin-staff-container .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #000000;
        border-radius: 0;
    }

    .admin-staff-container .nav {
        padding-bottom: 20px;
    }

    .admin-staff-container .nav-item a {
        color: #000;
        text-decoration: none;
        background-color: #ccc;
        border-radius: 0;
    }

    .admin-staff-container .nav-item {
        margin: 0 10px;
    }

    .admin-staff-container .nav-item:first-child {
        margin-left: 0;
    }

    .admin-staff-container .nav-item:last-child {
        margin-right: 0;
    }

    .pending-leave-card {
        background-color: #fafafa;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .pending-leave-card .card-body {
        display: flex;
        flex-direction: column;
    }

    .btn-outline-red {
        border: 1px solid #cc0000 !important;
        color: #cc0000;
    }

    .btn-outline-red:hover {
        border: 1px solid #cc0000 !important;
        color: #fff;
        background-color: #cc0000;
    }

    .lead-popup .modal-content {
        background-color: transparent;
        border: 0
    }

    .modal {
        padding-right: 0;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .lead-popup button.close {
        background-color: white;
        border-radius: 50px;
    }

    .lead-popup .modal-header .close {
        padding: 0;
        margin: -1rem -1rem -1rem auto;
    }

    .lead-popup .close {
        height: 40px;
        width: 40px;
        opacity: 1;
    }

    .lead-popup .modal-header {
        border-bottom: none;
        color: #fff;
    }

    .admin-notification {
        position: relative;
        cursor: pointer;
    }

    .notify-msg {
        position: absolute;
        left: -50px;
    }

    .list-lead-display li {
        padding: 10px 0;
        border-bottom: 1px solid #fff;
    }

    .admin-options-display a {
        color: #333 !important;
    }

    .list-lead-display li:last-child {
        padding: 10px 0;
        border-bottom: none;
    }

    .bg-outline-secondary {
        color: #fff;
        border-radius: .5rem;
        background-color: #20c997 !important;
    }

    .bg-outline-secondary h4 {
        font-size: 13px;
        margin-bottom: 0px;
    }

    .bg-outline-secondary:hover {
        border: 2px solid #555;
        border-radius: .5rem;
        color: #fff;
        background-color: #555 !important;
    }

    .bg-outline-secondary:hover h4 {
        transform: translateX(10px);
        transition: all 0.5s ease-in;
        color: #fff;
    }

    .admin-options-display a:hover {
        color: #fff !important;
    }

    .alert-red {
        background-color: #e74c3c;
        color: #fff;
    }

    .split-column-2 {
        column-count: 2;
    }

    .split-column-3 {
        column-count: 3;
    }

    .date-box {
        border: 2px solid #333;
        height: 70px;
        width: 70px;
        align-items: center;
        display: flex;
        justify-content: center;
        background-color: #000;
        color: #fff;
    }

    .pending-date-holder {
        text-align: center;
    }

    .pending-reason {
        flex-grow: 1;
    }

    .pending-reason p {
        font-size: 12px;
    }

    .pending-info-days {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .days-count-arrow {
        width: 30px;
    }

    .pending-show-days {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .date-box span {
        font-size: 30px;
        font-weight: 700;
    }

    .btn-dark,
    .btn-info,
    .btn-primary,
    .btn-secondary {
        color: #fff !important;
    }


    .pending-info-time {
        display: flex;
        justify-content: space-between;
    }

    .btn-light {
        color: #333 !important;
    }

    .custom-select option {
        padding: 5px 0;
    }

    .add-on-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%
    }

    .img-staff {
        object-fit: cover;
    }

    .add-color-orange {
        color: #f59a07;
    }

    .add-color-teal {
        color: #20c997 !important;
    }

    .add-color-purple {
        color: #6f42c1;
    }

    .align-row-cent {
        align-items: center;
    }

    .admin-staff-container label {
        font-weight: 700;
    }

    .hide-copy {
        display: none;
    }

    .table-hover-effect:hover .hide-copy {
        display: initial;
    }

    .admin-staff-container .page-link {
        position: relative;
        display: initial;
        padding: .5rem .75rem;
        margin-left: 8px;
        line-height: 1.25;
        color: #333;
        font-weight: 700;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 50px;
        height: 40px;
        width: 40px;
    }

    .admin-staff-container .page-link:hover {
        background-color: #333;
        color: #fff;
        border: 1px solid #333;
    }

    .admin-staff-container .page-item:first-child .page-link {
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
    }

    .admin-staff-container .page-item:last-child .page-link {
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;
    }

    .chat-pop-up {
        background-image: url(../images/screen.jpg);
        background-position: center center;
        background-size: contain;
        border-bottom: none;
    }

    .profile_row h3 {
        font-size: 1rem;
        font-weight: 700;
    }

    .chat {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chat li {
        margin-bottom: 40px;
        padding-bottom: 5px;
        /* border-bottom: 1px dotted #B3A9A9; */
        margin-top: 10px;
        width: 90%;
    }


    .chat li .chat-body p {
        margin: 0;
        /* color: #777777; */
    }

    .chat-care .chat-img {
        width: 50px;
        height: 50px;
    }

    .chat-care .img-circle {
        border-radius: 50%;
    }

    .chat-care .chat-img {
        display: inline-block;
    }

    .chat .agent .chat-body {
        color: #ffffff;
        background-color: #18bc9c;
        border-color: #18bc9c;
    }

    .chat .admin .chat-body {
        color: #ffffff;
        background-color: #e74c3c;
        border-color: #e74c3c;
    }

    .chat-care .chat-body {
        display: inline-block;
        max-width: 100%;
        /* background-color: #FFC195; */
        border-radius: 12.5px;
        padding: 15px;
    }

    .chat-care .chat-body strong {
        color: #333;
    }

    .chat-care .admin {
        text-align: right;
        float: right;
    }

    .chat-care .admin p {
        text-align: left;
    }

    .chat-care .agent {
        text-align: left;
        float: left;
    }

    .chat-care .left {
        float: left;
        display: none;
    }

    .chat-care .right {
        float: right;
        display: none;
    }

    .clearfix {
        clear: both;
    }

    .required {
        color: red;
    }

    .text-bold {
        font-weight: 700;
    }

    /* .light-card .card {
        background-color: #fafafa;
    }

    .light-card .card:hover {
        background-color: #ededee;
    }

    .light-card a .card:hover {
        color: #333;
    }*/

    .card-assignment-report-review a {
        color: #18bc9c !important;
    }

    .light-card a {
        color: #18bc9c;
    }

    .table-scrollable .media-body h5 {
        font-weight: 300;
        margin-bottom: 0;
        font-size: 16px;
    }

    .table-scrollable .progress {
        width: 150px;
    }

    .table-scrollable .media {
        align-items: center;
    }

    .table-scrollable a {
        text-decoration: none;
        color: #333;
    }

    .admin-staff-pagination {
        float: right !important;
        margin-top: 15px !important;
    }

    .custom-control-inline {
        margin-bottom: 15px;
    }

    .btn-danger {
        color: #fff !important;
    }

    .overview-card {
        margin-bottom: 15px;
    }

    .bg-green {
        background-color: #2aa05e;
    }

    .border-rad-apply {
        border-radius: 0.3rem !important;
    }

    .btn {
        border: none
    }

    .card{
        -webkit-box-shadow: 0 0 35px 0 rgba(154,161,171,.15);
        box-shadow: 0 0 35px 0 rgba(154,161,171,.15);
        /* background-color: #ffffff; */
    }

    .dropdown-2{
    position: relative
    }

    /****New Index Page ***/
    .staff-layout-container .card{
        border: 1px solid rgba(154,161,171,.15);
        margin-bottom: 24px;
    }

    .widget-icon {
        color: #727cf5;
        font-size: 20px;
        background-color: rgba(114,124,245,.25);
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 40px;
        border-radius: 3px;
        display: inline-block;
    }

    .letter-space{
        letter-spacing: 0.2rem
    }

    .text-green{
        color: #0acf97 !important;
    }

    .text-red{
        color: #fa5c7c !important;
    }

    .card-view-sect .header-title {
        margin-bottom: .5rem;
        text-transform: uppercase;
        letter-spacing: .02em;
        font-size: .9rem;
        margin-top: 0;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 15px;
    }

    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#ad0000;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        /* box-shadow: 2px 2px 3px #999; */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index:99;
    }

    .toggle-show{
        display: none;
    }

    .float-side{
        position:fixed;
        width:50px;
        height:50px;
        top:85px;
        left:0px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color:#ad0000;
        color:#FFF;
        border-radius:0px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
        transition: all 0.5s ease-in;
        display: none;
    }

    .float-side:hover{
        width: 200px;
        color: white;
    }

    .float-side:hover .toggle-show{
        display: inline-flex;
    }

    /* .my-float{
        margin-top:22px;
    } */

    .form-control{
        border: 1px solid #000;
    }

    .client-form-sect .btn-danger:hover{
        background-color: #ad0000 !important;
        border: none !important;
    }

    #backtotop {
        display: none;
        position: fixed;
        bottom: 105px;
        right: 40px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #ccc;
        color: black;
        cursor: pointer;
        padding: 15px;
        border-radius: 50px;
    }

    .badge-warning-lighten {
        color: #ffbc00;
        background-color: rgba(255,188,0,.18);
    }

    .badge-danger-lighten {
        color: #fa5c7c;
        background-color: rgba(250,92,124,.18);
    }

    .badge-success-lighten {
        color: #0acf97;
        background-color: rgba(10,207,151,.18);
    }
    .badge-info-lighten {
        color: #fff;
        background-color: #67cce9;
    }

     .badge-dark-lighten {
        color: #fff;
        background-color: #b2b2b2;
    }
    /***Client List */

    .table{
        overflow: hidden;
    }
    .table-user-img{
        position: relative;
        /* overflow: hidden; */
        max-height: 50px;
        max-width: 50px;
    }

    .object-fit-cover{
        object-fit: cover;
        object-position: center center;
    }

    .img-size {
        height: 50px;
        width: 50px;
    }

    /* .table-centered td, .table-centered th {
    vertical-align: middle !important;
    } */

    .stat-indicator{
        height: 10px;
        width: 10px;
        border-radius: 50px;
    }

    .table .thead-light th {
        color: #6c757d;
        background-color: #f1f3fa;
        border-color: #eef2f7;
    }

    .btn-outline-dark{
        border: 1px solid #333
    }

    .max-wid-table{
        max-width: 200px;
        overflow-wrap: break-word;
    }

    .toggle-visible{
        visibility: hidden;
    }

    .table-hover-effect:hover .toggle-visible{
        visibility: visible;
    }

    .lead-count-sect{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height:240px;
    }

    .lead-count-sect h2{
        font-size: 8rem;
    }

    .letter-space-0{
        letter-spacing: 0rem !important;
    }

    .bord-left-1{
        border-left: 1px solid #fff;
    }

    .circle-status{
        height: 15px;
        width: 15px;
        border-radius: 50px;
    }

    .circle-status-disabled{
         background-color: #ddd;
    }

    .circle-status-active{
        background-color: #18c218;
    }

    .circle-status-container{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width: 150px;
        margin: 0 auto;
    }

    .circle-status-container li{
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .circle-status-container a li {
        margin-right: 5px !important;
        margin-bottom: 5px;
    }

    .circle-status-container a li:last-child{
        margin-right: 0px;
    }

    .no-hover-card a:hover .card-view-sect {
        background: transparent !important;
    }

    /***End ClientList ***/

    @media (min-width: 992px){
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
            left: -71px;
        }

        .v-align-bottom{
            vertical-align: bottom !important;
        }

        .v-align-top{
            vertical-align: top !important;
        }
    }

    @media screen and (max-width: 768px){
            .dropdown-black-sm{
            background-color: #000000;
            }

        .flex-wrap-sm{
            flex-wrap: wrap
        }

        .dropdown-black-sm .dropdown-item{
            color: #fff;
        }
    }

    .grid-3-placement{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .dropdown-action-format .dropdown-item{
        font-size: 12px;
        letter-spacing: 0.2rem;
        /* text-transform: uppercase; */
    }

    .dropdown-action-format .dropdown-item:hover{
        background-color: #000;
        color: #fff;
    }

    .dropdown-action-format{
        left:-100px;
    }

    .ft-12p{
        font-size: 12px;
    }

    .pager-sect .page-link{
        color: #000;
    }

    .review-card{
        display: flex;
        flex-direction: column;
        height: 100%
    }

    .carousel-arrow-sect{
        top: 50%;
        bottom: 0;
        height: 100px;
    }

    .profile-image-show-box{
        height: 100px;
        width: 100px;
        position: relative;
        overflow: hidden;
    }

    .profile-details-list{
        border-bottom: 1px solid #eee;
        padding: 20px 0;
    }

    .profile-details-list:last-child{
        border-bottom: 0;
    }

    .accordionFormatView [aria-expanded="true"] .fa-chevron-down {
        display: none;
    }

    .accordionFormatView [aria-expanded="false"] .fa-chevron-up {
        display: none;
    }

    .max-wid-table-2 {
        max-width: 300px;
        overflow-wrap: break-word;
    }

    .action-btn-holder button[aria-expanded="true"] .fa-chevron-down {
        display: none;
    }
    .action-btn-holder button[aria-expanded="false"] .fa-chevron-up {
        display: none;
    }

    .action-btn-holder button[aria-expanded="true"] .show-more {
        display: none;
    }
    .action-btn-holder button[aria-expanded="false"] .show-fewer {
        display: none;
    }

    .v-align-middle {
        vertical-align: middle !important;
    }

    @media screen and (min-width: 991px){
        .float-right-lg{
            float:right;
        }

        .review-card .card-item{
            flex-grow: 1;
            min-height:120px;
        }

        .ft-6{
            font-size: 6rem
        }

    }

    @media screen and (max-width: 768px){
        .btn-full-width{
            width: 100%
        }

        .review-card-sect .col-lg-6{
            border-bottom: 1px solid #bebebe;
        }

        .review-card-sect .col-lg-6:last-child{
            border-bottom: none !important;
        }

        .margin-top-00 {
            margin-top: 30px !important;
        }

    }

    /***From Admin-Header */
    .lt-sp {
        letter-spacing: 0.2rem;
        text-transform: uppercase;
        font-size: 11px;
    }

    .img-holder-xs{
        position:relative;
        overflow: hidden;
        height: 90px;
        width: 70px;
    }

    .img-holder-lg{
        position:relative;
        overflow: hidden;
        height: 300px;
        width: 100%;
    }

    .img-container-holder{
        position:relative;
        overflow: hidden;
        height: 60px;
        width: 60px;
    }

    .fw-400{
        font-weight:400;
    }

    .ob-fit-cover{
        object-fit: cover;
        object-position: center center;
        height:100%
    }

    .make-bold{
        font-weight:700
    }

    .line-clamp {
            display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .module-card {
        width: auto;
        overflow: hidden;
    }
    .card-border{
        border:1px solid rgba(0,0,0,.125);
    }

    .align-center-flex{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 70%;
    }

    .card-notification-view:hover{
        background-color: #f5f5f5;
    }

    .notify-d-flex{
        display:inline-flex;
        justify-content: center;
        align-items: center;
    }

    .notify-info{
        height: 20px;
        width: 20px;
        font-size: 10px;
        border-radius: 25px;
    }

    .cursor-pointer{
      cursor: pointer
    }

    .text-underline{
       text-decoration: underline;
    }

   .question-quiz-options .card{
     border: 1px solid rgba(0,0,0,.125) !important;
   }

   .question-text-view{
      font-size: 18px;
   }

   .question-quiz-options .card:hover{
      background-color: #eee;
      cursor: pointer;
   }

   .pt-50{
      padding-top:50px
   }

   .pb-50{
      padding-bottom:50px
   }

    .preference-content label {
        display: flex;
    }

    .preference-content .form-group {
        display: block;
        margin-bottom: 30px;
        word-break: break-word;
    }

    .preference-content .form-group input {
        padding: 0;
        height: initial;
        width: initial;
        margin-bottom: 0;
        display: none;
        cursor: pointer;
    }

    .preference-content .form-group label {
        position: relative;
        cursor: pointer;
    }

    .preference-content .form-group label:before {
        content: "";
        -webkit-appearance: none;
        background-color: transparent;
        border: 2px solid #333;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05),
            inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 10px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        cursor: pointer;
        height: 20px;
        width: 20px;
        margin-right: 25px;
    }

    .preference-content .form-group input:checked+label:before {
        content: "";
        -webkit-appearance: none;
        background-color: transparent;
        border: 2px solid #0079bf;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05),
            inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 10px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        cursor: pointer;
        margin-right: 25px;
    }

    .preference-content .form-group input:checked+label:after {
        content: "";
        display: block;
        position: absolute;
        top: 2px;
        left: 9px;
        width: 6px;
        height: 14px;
        border: solid #0079bf;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .preference-content p {
        font-weight: 700;
        font-size: 1.3rem;
    }

    .card-option-view:hover{
        background-color: #eee;
    }

    .interactive-border-input {
        border: 2px solid #5e72e4;
        outline: transparent;
    }

    @media screen and (max-width:768px){
       .student_dashboard {
            display: flex;
            flex-direction: column;
        }

       .arrow-navv{
          float: right;
       }

       .student_dashboard .nav-item {
            margin-left: 0px;
        }

        .marg-right-1{
          margin-right:1rem
        }

       .staff-admin-left-navbar .nav-link {
            /* margin-top: 10px; */
            margin-top:0px;
        }

       .ellipsis-nav{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 130px;
       }

    }

    /****Lecture ***/
        #wrapper {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        width: 350px;
        margin-left: -17rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        position: relative;
    }


    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    .bg-grey-o {
        background-color: #222;
    }

    .assignment-info {
        box-shadow: none;
    }

    .move-button {
        position: absolute;
        right: -29px;
    }

    .btn-red-dark {
        background-color: #ad0000;
        border: none;
        border-radius: 0;
        color: #fff;
    }

    .btn-red-dark:hover{
        background-color: #222;
        color: #fff;
    }

    .pad-top-100{
        padding-top:100px
    }

    .bg-dark-light{
        background-color: #f0f0f0;
     }

     .ft-q{
       font-size:1.3rem;
     }

     .bg-black{
        background-color: #000
     }

    .sidemenu-content .student_portal{
       padding:0
    }

    .apply-flex-side{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-font-1{
        font-size: 14px !important;
    }

    .font-sm{
        font-size: 13px !important;
    }

    .courses-content-link .card{
       border: 2px solid #fff;
    }

    .courses-content-link:hover .card{
        border: 2px solid #17a2b8;
    }

    .bg-white{
        background-color:#fff
    }

    .navigator .navbar-nav .nav-link {
        color: rgb(11 11 11);
        font-weight: 600;
    }

    .navigator .navbar-nav .nav-link:focus, .navigator .navbar-nav .nav-link:hover {
        color: #000 !important;
    }

    .navigator .navbar-nav .nav-link.text-white:focus, .navigator .navbar-nav .nav-link.text-white:hover {
        color: #fff !important;
    }

    .btn-transparent{
        background-color:transparent;
    }

    .btn-transparent:hover{
        background-color:transparent !important;
        color:#000 !important;
    }

    .box-shad{
        box-shadow:0px 2px 4px rgba(0,0,0,0.05), 0px 4px 12px rgba(0,0,0,0.05)
    }

    .apply-filter-invert-1{
        filter: invert(1)
    }

    .text-white{
        color: white !important;
    }

    .margin-top-00{
      margin-top:70px
    }

    .recommend-courses-sect .find .card{
        background-color: transparent;
    }

    .student-card-spacing {
        margin-bottom: 30px;
        box-shadow: none;
        /* border: 1px solid rgba(204, 204, 204, 1); */
    }

    .student-card-spacing .card-header {
        background-color: transparent;
    }

    .courses-student-stat-sect a:hover .card-view-sect {
        background: #ededee;
    }

    .courses-student-stat-sect .card.dashboard-action-links{
        background: transparent;
        box-shadow: none !important;
    }

    .card-view-sect .header-title{
        color: #000;
    }

    /* .card.disable-card-shadow{
    box-shadow: none !important;
    } */

    .btn-purple, .bg-purple{
        background-color: #5e72e4 !important;
        color: #fff !important;
    }

    .btn-bord-radius{
        border-radius:4px;
    }

    .student-view-stat .carousel-control-prev {
        left: -1%;
    }

    .student-view-stat .carousel-control-next {
        right: -1%;
    }

    .inner-image-box{
        position: relative;
        overflow: hidden;
        height: 250px;
        width: 100%;
    }
    .auth-footer, .bottom-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 99;
    }

    .notification-view-sect {
        padding: 30px 15px 45px 15px;
        font-size: 14px;
        min-height: 150px;
        transition: padding-bottom .3s ease;
        background-color: red;
        position: absolute;
        bottom: -20px;
        right: 0;
        z-index: -1;
    }

    .correct-answer {
        background-color: #5e72e4;
        color: #fff;
    }

    .incorrect-answer{
        background-color: #ffc107;
        color: #fff;
    }

    .border-white {
        border: 2px solid #fff!important;
    }

    .notify-icon-2 {
        width: 30px;
        position: absolute;
        top: -40px;
        left: 15px;
    }

    .notify-icon-1 {
        width: 55px;
        position: absolute;
        top: -60px;
        right: 0;
    }

    .option-success {
        color: #fff;
        background-color: #0acf97;
        border-color: #0acf97;
    }

    .question-text-interactive{
        font-size: 0.8rem
    }

    .flip-card-view {
        position: relative;
        z-index: 99 !important;
    }

    .flip-card-view::before {
        content: "";
        display: block;
        background: #17a2b8cc;
        width: 100%;
        height: 100%;
        position: absolute;
        left: -1.3rem;
        top: -0.7rem;
        z-index: 1;
        transform: rotate(-174deg);
        border-radius: 4px;
    }

    .flip-card-card {
        min-height: 250px;
    }

    .z-index-99 {
        z-index: 99;
    }

    .flip-card-view .flip-card-card-bottom {
        z-index: 2 !important;
    }

    .flip-card-card-bottom {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .flip-card-view::after {
        content: "";
        display: block;
        background: #ffc1075e;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 1.3rem;
        top: 0.3rem;
        z-index: 1;
        transform: rotate(6deg);
        border-radius: 4px;
    }

    .incorrect-answer-rotate{
        transform: rotate(-5deg);
    }

    .ft-2 {
        font-size: 2rem;
    }

    .btn-outline-white {
        color: #f8f9fa;
        border-color: #f8f9fa;
        border: 1px solid
    }

     .btn-outline-white:hover {
        color: #000;
        border-color: #fff;
        background-color:#fff
    }

    .thumbnail-holder {
        position: relative;
        overflow: hidden;
        height: 250px;
        width: 100%;
    }

    @media screen and (max-width: 768px){
        .stat_card_body .img-fluid {
            width: 60%;
        }

        .notification-view-sect {
            padding: 30px 15px 70px 15px !important;
            width: 100% !important;
            font-size: 14px !important;
            min-height: 150px !important;
            transition: padding-bottom .3s ease !important;
            position: fixed !important;
            bottom: 0 !important;
            right: 0 !important;
            /* top: 0; */
            left: 0;
            z-index: 99 !important;
        }

        .notify-icon-2 {
            width: 40px;
            position: absolute;
            top: unset;
            left: 50%;
            right: 50%;
            top: -25px;
            left: 6%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }

        .flip-card-view::before {
            left: -0.3rem;
        }

        .flip-card-view::after {
            left: 0.3rem;
        }
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -22rem;
        }
    }

    @media screen and (max-width: 768px) {
        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        .w-15{
          width: 15rem;
        }
    }


   @media screen and (min-width: 992px){
      /* .courses-breakdown {
        overflow-y: auto;
        height: 500px;
      } */
       .padding-3-lg{
           padding-left: 3rem;
           padding-right: 3rem;
        }
   }

    #wrapper {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        width: 350px;
        margin-left: -17rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        position: relative;
    }


    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    .bg-grey-o {
        background-color: #222;
    }

    /* .courses-breakdown {
        overflow-y: auto;
        height: 500px;
    } */


    .assignment-info {
        box-shadow: none;
    }

    .move-button {
        position: absolute;
        right: -29px;
    }

    .btn-red-dark {
        background-color: #ad0000;
        border: none;
        border-radius: 0;
        color: #fff;
    }

    .btn-red-dark:hover{
        background-color: #222;
        color: #fff;
    }

    .btn-purple{
        background-color: #5e72e4;
        color: #fff;
    }

    .btn-bord-radius{
        border-radius:4px;
    }

    .bord-radius-10{
        border-radius: 10px;
    }

    .make-content-bold{
        font-size: 20px !important;
        font-weight: 700;
        padding-left: 10px;
        padding-right: 10px;
    }

   .courses-breakdown a:hover {
        text-decoration: none;
        font-weight: 400;
        color: #000;
    }

    .module-side-list .list-group-item{
       padding-left: 0rem;
       padding-right: 0rem;
    }


    .card-height{
        height: 100%
    }

    .text-success-lighten {
        color: #0acf97;
    }

    .id-profile-pix{
        height: 150px;
        width: 150px;
        position: relative;
        overflow: hidden;
    }

    .id-card-size{
        width: 20rem;
        min-height: 520px;
    }

    .border-top-l-rad{
        border-top-left-radius: 10px
    }

    .border-top-r-rad{
        border-top-right-radius: 10px
    }

    .border-bottom-l-rad{
        border-bottom-left-radius: 10px
    }

    .border-bottom-r-rad{
        border-bottom-right-radius: 10px
    }

    .id-grid{
        display: grid;
        grid-template-columns: 1fr 8fr;
        height: 300px;
    }

    .identification-text{
        position: absolute;
        top: 136px;
        transform: rotate(-90deg);
        left: -67px;
        font-style: italic;
        font-family: emoji;
    }

    .id-grid-content{
        display: flex;
        justify-content: center;
        flex-direction: column;
        height: 250px;
    }

	.sidebar-large{
        width: 660px !important;
    }

    .ft-1-5{
        font-size: 1.5rem;
    }

    .btn-border{
        border: 1px solid;
    }

    .position-left-none{
        left: 0 !important;
    }

    .apply-effect{
        transition: all 0.3s ease-in;
    }

    .make-content-bold-2 {
        font-size: 14px !important;
        font-weight: 700;
        padding-left: 10px;
        padding-right: 10px;
    }

    .apply-effect:hover{
        transform: translateY(5px);
        box-shadow: rgb(0 0 0 / 16%) 0px 8px 50px;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .no-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }

    .apply-pre-wrap{
        white-space: pre-wrap
    }

    .font-normal{
        font-size: 16px
    }

    .icon-holder{
        width: 40px;
        height: 40px;
        border: 1px solid #ccc;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .icon-holder-2{
        width: 40px;
        height: 40px;
        border: 1px solid #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .icon-holder:hover{
        border: 1px solid #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #5e72e4 !important;
        color: #fff !important;
    }

    .bord-rad-50{
        border-radius: 50%
    }

    .opt-types.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #181818;
        background-color: transparent;
        font-weight: 900;
        border-bottom: 5px solid #5e72e4;
        border-radius: 0;
    }

    .no-image-hover {
        filter: inherit !important;
    }

    .btn-purple:hover{
        background-color: #374dc7 !important;
    }

    .alert-light-dark{
        background-color: #e9ecef;
    }

    .btn-outline-dark-white{
        color: black;
        border: 1px solid black;
        background-color: white;
    }

    .btn-outline-dark-white:hover{
        background-color: black;
        color: white;
    }
    @media (min-width: 768px){
        #wrapper.toggled .sidebar-large#sidebar-wrapper {
            margin-left: -41.5rem !important;
        }
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -22rem;
        }
    }

    @media screen and (max-width: 768px) {
        #sidebar-wrapper .list-group.manage-view {
            width: 17rem;
        }

        #sidebar-wrapper .list-group.manage-view-module {
            width: 12rem;
        }

        .side-accordion{
            width: 265px;
        }

        .order-switch-sm{
            order: 1
        }
    }

    @media (min-width: 992px){
        .student-dropdown-2 {
            position: absolute;
            left: -150px !important;
        }
    }

    @media screen and (max-width: 812px){
        .notification-view-sect{
            z-index: 99 !important;
        }
    }
</style>
