@extends('layouts.master')

@section('content')
<div class="text-center container" style="padding:5px">
    <div class="col">
        <h2>HOME</h2>
    </div>
    <div class="col">
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus magnam debitis, vero eos
            dolore enim beatae repellendus corporis molestiae soluta eaque similique asperiores placeat. Nulla
            fugit dolore exercitationem impedit vitae ratione doloribus. Asperiores quia quis quisquam tempore
            eveniet placeat sapiente nobis praesentium eos ipsum voluptatem, reprehenderit odio sunt. Vel rem
            quaerat consequatur ipsum repellendus hic, voluptas nisi esse quibusdam? Totam suscipit quaerat,
            cumque ut ratione minima est rem nam perspiciatis, aliquam maiores voluptatem temporibus voluptates
            quisquam neque quia adipisci, in numquam inventore non esse. Voluptate quaerat sint obcaecati
            deleniti rerum at. Illum ipsum natus aliquid ipsam sunt a praesentium, magnam dignissimos accusamus
            voluptatibus, laborum corporis itaque delectus, nesciunt placeat accusantium eligendi cum optio
            neque eos voluptates eaque? Hic ipsa nobis, dicta repudiandae quidem iusto odio voluptates quos non?
            Nobis rerum voluptatum itaque quia temporibus cupiditate reiciendis dolores deleniti? Quibusdam et
            voluptas inventore necessitatibus, qui ipsam tenetur, unde placeat sit consequatur iusto earum
            explicabo labore accusamus, quae suscipit autem iure laborum? Optio consequatur vitae excepturi
            temporibus maxime quas qui officiis nobis incidunt maiores laborum, ipsum nisi consequuntur corporis
            aperiam quae necessitatibus exercitationem provident in ullam dolorum sit perspiciatis harum
            voluptatem. Aliquam beatae quo, impedit non ratione voluptatibus libero praesentium incidunt porro.
        </p>
        <div class="row mt-3"> {{-- 迴圈 --}}
            <h2>方法一 : foreach</h2>
            @foreach ( $blogs as $blog)
                @if ($blog['status'] == 1)
                <div class="card col-md-4 mt-2">
                    <div class="card-body">
                        <h3 class="card-title">{{ $blog['title'] }}</h3>
                        <h4 class="card-subtitle mb-2 text-body-secondary">{{ $blog['body'] }}</h4>
                    </div>
                </div>
                @else
                <div class="card col-md-4 mt-2">
                    <div class="card-body">
                        <h3 class="card-title">{{ $blog['title'] }}</h3>
                        <h4 class="card-subtitle mb-2 text-body-secondary">{{ $blog['body'] }}</h4>
                        <div class="btn btn-warning btn-sm">pending</div>
                    </div>
                </div>
                @endif
            @endforeach

            <p>&nbsp;</p>
            <hr>

            <h2>方法二 : for迴圈</h2>

            @for ($i = 0; $i < count($blogs); $i++)
            <div class="card col-md-4 mt-2">
                <div class="card-body">
                    <h3 class="card-title">{{ $blogs[$i]['title'] }}</h3>
                    <h4 class="card-subtitle mb-2 text-body-secondary">{{ $blogs[$i]['body'] }}</h4>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection