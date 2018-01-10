<?php
/**
 * Created by PhpStorm.
 * User: hoangnguyen
 * Date: 10/01/2018
 * Time: 12:54
 */
?>
<header class='card-header'>
    <div class="container">
        <div class='row'>
            <div class='col-md-3'>
                <a class='header-logo' href='#'>
                    <img src='{{ asset('/images/logo.png') }}' width="100" height="100" alt="logo"/>
                </a>
            </div>
            <div class='col-md-6 align-self-center'>
                <div class='header-search'>
                    <form action='/search' id='header-search' method='get'>
                        <input id='header-search-input' name='q' placeholder='Tìm kiếm' type='text' value=''/>
                        <button id='header-search-btn' type='submit'><i class='glyphicon glyphicon-apple'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
