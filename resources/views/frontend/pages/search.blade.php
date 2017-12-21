@include('frontend/inc/header')
        <div id="content">
            <div id="posts">
                @if(!count($all_posts)==0)
                @foreach($all_posts as $single_post)
                <div class="post">
                    <h2><a href="<?php echo url('/single/'.$single_post->post_id)?>">{{$single_post->post_title}}</a></h2>
                    <div><span class="date">{{ date('F d', strtotime($single_post->created_at)) }}</span><span class="categories">in: <a href="<?php echo url('/single/'.$single_post->post_id)?>">{{$single_post->category_name}}</a></span></div>
                    <div class="description">
                        <p>
                            <a href="<?php echo url('/single/'.$single_post->post_id)?>"><img src="{{ asset('public/'.Storage::disk('local')->url($single_post->post_image)) }}" alt="" width="239" height="232" /></a>
                            <?php echo str_limit($single_post->post_description,700,'....') ?>
                        </p>
                    </div>
                    <p class="comments"><a href="<?php echo url('/single/'.$single_post->post_id)?>">Continue Reading</a></p>
                </div>
               @endforeach 
               @else
                your Post Not Found
               @endif
               <div class="post">
                   {!! str_replace('/?', '?', $all_posts->render()) !!}
               </div>
            </div>
            
            
          @include('frontend/inc/sidebar')  
            
        </div>

 @include('frontend/inc/footer')      