@include('frontend/inc/header')
<div id="content">
    <div id="posts">
        <div class="post">
            <h1>Contact Form</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <br/>
            <div class="form">
                <form action="<?php echo url('/sendMail') ?>" method="post">
                    {{  csrf_field() }}
                    <textarea name="msg" placeholder="Your Message..."></textarea><br />
                    <input type="text" name="name" placeholder="Name" /><br />
                    <input type="text" name="email" placeholder="E-mail" /><br />
                    <input type="text" name="url" placeholder="URL (Optional)" /><br />
                    <input type="submit" value="Submit" /><br />

                </form>
            </div>
        </div>
    </div>

    @include('frontend/inc/sidebar')  

</div>

@include('frontend/inc/footer')      