@extends('layouts.front')
@section('title', 'プロフィール一覧')

@section('content')
    <div class="container">
        {{-- <hr color="#c0c0c0"> --}}
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
            <h3>プロフィール一覧</h3>
                <table class="table-profile">
                    <thread>
                        <tr>
                            <th width=20%>名前</th>
                            <th width=10%>性別</th>
                            <th width=20%>趣味</th>
                            <th width=50%>自己紹介</th>
                        </tr>
                    </thread>
                    <tbody>
                        @foreach($posts as $post)
                            <div class="post">
                                <div class="row">
                                    <div class="text col-md-6">
                                        <tr>
                                            <td>{{ str_limit($post->name, 20) }}</td>
                                            <td>{{ str_limit($post->gender, 5) }}</td>
                                            <td>{{ str_limit($post->hobby, 50) }}</td>
                                            <td>{{ str_limit($post->introduction, 100) }}</td>
                                        </tr>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection