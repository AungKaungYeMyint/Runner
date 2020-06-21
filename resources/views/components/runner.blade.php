@foreach ($runners as $key => $runner)
    <div class="runner-card" style="width: 18rem;">
        <div class="profile">
        <img class="runner-profile-image" src="{{$runner->imagable->url}}" alt="Card image cap">
        <div class="runner-profile">
            <a href="{{route('runners.show',$runner->id)}}"><span class="runner-name">{{$runner->username}}</span></a><br>
            <span class="phone-number">{{'09' . substr($runner->phone,3)}}</span>
        </div>
        </div>
        
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
@endforeach