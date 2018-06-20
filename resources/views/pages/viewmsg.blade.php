@extends('layouts.default')

@section('content')

    <div class="container mt-5">
        <h2>Inbox</h2>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sender</th>
                <th scope="col">Message Title</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody style=".table-">
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>
                    <form action="/contact" method="post">
                        <a class="nav-link" href="/displaymsg">Interested in this promotion?</a>
                    </form>
                </td>
                <td>
                    <form>
                        <button type="submit" class="btn btn-primary mb-2">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>How have you been?</td>
                <td>
                    <form>
                        <button type="submit" class="btn btn-primary mb-2">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>Hey man, check this out!</td>
                <td>
                    <form>
                        <button type="submit" class="btn btn-primary mb-2">Delete</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
        <div/>

@endsection
