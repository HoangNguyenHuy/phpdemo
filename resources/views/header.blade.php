<?php
/**
 * Created by PhpStorm.
 * User: hoangnguyen
 * Date: 10/01/2018
 * Time: 12:54
 */
?>
<header class='header'>
    <div class='row'>
        <div class='col-md-2 col-sm-2 col-xs-12'>
            <a class='header-logo' href='#'>
                <img src='logo.png' alt="logo"/>
            </a>
        </div>
        <div class='col-lg-1 col-md-1 visible-lg visible-md'></div>
        <div class='col-lg-5 col-md-5 col-sm-6 col-xs-12 hidden-xs'>
            <div class='header-search'>
                <form action='/search' id='header-search' method='get'>
                    <input id='header-search-input' name='q' placeholder='Tìm kiếm' type='text' value=''/>
                    <button id='header-search-btn' type='submit'><span class='fa fa-search'></span></button>
                </form>
            </div>
        </div>
    </div>
</header>
