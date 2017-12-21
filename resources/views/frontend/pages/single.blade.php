@include('frontend/inc/header')
        <div id="content">
            <div id="posts">
                <div class="post">
                    <h2>{{ $post_info->post_title}}</h2>
                    <div><span class="date">{{ date('F d', strtotime($post_info->created_at)) }}</span><span class="categories">in: <a href="<?php echo url('/single/'.$post_info->post_id)?>">{{$post_info->category_name}}</a></span></div>
                    <div class="description">
                        <p>
                            <a href="<?php echo url('/single/'.$post_info->post_id)?>"><img src="{{ asset('public/'.Storage::disk('local')->url($post_info->post_image)) }}" alt="" width="550" height="232" /></a>
                            {!! $post_info->post_description !!}
                        </p>
                    </div>
                   </div>
                <div id="comments">
                    <img src="<?php echo asset('public/frontend')?>/images/title3.gif" alt="" width="216" height="39" /><br />																																																																																																																																																																																																																																																															<div class="inner_copy"><a href="http://www.bestfreetemplates.org/">free templates</a><a href="http://www.bannermoz.com/">banner templates</a></div>
                    <div class="fb-comments" data-href="<?php echo url()->full();?>" data-numposts="10"></div>
                </div>
            </div>
            @include('frontend/inc/sidebar')
        </div>
@include('frontend/inc/footer')