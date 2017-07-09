<li class="{{ Request::is('antMiners*') ? 'active' : '' }}">
    <a href="{!! route('antMiners.index') !!}"><i class="fa fa-edit"></i><span>AntMiners</span></a>
</li>



<li class="treeview active">
    <a href="#">
        <i class="fa fa-star"></i>
        <span>AntMiners </span>
        <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span>
    </a>
    <ul class="treeview-menu active">
        @foreach(\App\Models\AntMiner::orderBy('id','ASC')->get() as $antMiner)
            <li class="treeview active">
                <a href="{!! route('antMiners.show', $antMiner->id) !!}"><i class="fa fa-book"></i> {{$antMiner->title}}</a>
            </li>
        @endforeach
    </ul>
</li>