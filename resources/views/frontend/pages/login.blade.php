@include('frontend/inc/header')
<div id="content">
    <div id="posts">
        <div class="post">
            <h1>Contact Form</h1>
            <br/>
            <div class="form">
                <form action="#">
                    <textarea placeholder="Your Message..."></textarea><br />
                    <input type="text" placeholder="Name" /><br />
                    <input type="text" placeholder="E-mail" /><br />
                    <input type="text" placeholder="URL (Optional)" /><br />
                    <a href="#"><img src="<?php echo asset('public/frontend') ?>/images/button.gif" alt="" width="94" height="27" /></a>
                </form>
            </div>
        </div>
    </div>

    @include('frontend/inc/sidebar')  

</div>

@include('frontend/inc/footer')      