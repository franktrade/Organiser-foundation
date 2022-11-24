<div class="col-md-4 padding-15">
    <div class="blog-post">
        <img src="{{Storage::url($impact->cover_image)}}" alt="blog post">
        <div class="blog-content">
            <span class="date"><i class="fa fa-clock-o"></i> {{$impact->published_at->toDayDateTimeString()}}</span>
            <h3><a href="{{route('impact.show', $impact)}}">{{$impact->title}}</a></h3>
            <p>{{Str::limit($impact->excerpt, 100)}}</p>
            <a href="{{route('impact.show', $impact)}}" class="post-meta">Read More</a>
        </div>
    </div>
</div><!-- Post -->
