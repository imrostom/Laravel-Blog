<div id="sidebar">
    <div id="search">
        <form method="get" action="{{ url('/search') }}">
            <input type="text" name="search" placeholder="Search"> 
            <input type="submit" style="width:45px;height:23px;margin-left: 0px;cursor: pointer" value="Search"> 
        </form>
    </div>
    <div class="list">
        <img src="<?php echo asset('public/frontend') ?>/images/title1.gif" alt="" width="186" height="36" />
        <ul>
            @foreach($category_lists as $single_category)
            <li><a href="{{ url('/category/'.$single_category->category_id)}}">{{$single_category->category_name}}</a></li>
            @endforeach
        </ul>

    </div>
</div>