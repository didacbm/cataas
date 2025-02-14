@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cat Gallery</h1>

        <div class="row mt-4">
            @foreach($catImages as $catImage)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://cataas.com/cat/{{ $catImage->_id }}" 
                             alt="Cat Image" 
                             width="100%" 
                             height="200px" 
                             style="object-fit: cover; border-radius: 10px;">
                        <div class="card-body">
                            @php
                                $extension = explode('/', $catImage->mimetype)[1];
                            @endphp
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Paginació -->
        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <!-- Enrere -->
                    @if ($catImages->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $catImages->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    @endif

                    <!-- Números de pàgina -->
                    @foreach ($catImages->getUrlRange(1, $catImages->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $catImages->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <!-- Endavant -->
                    @if ($catImages->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $catImages->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link" aria-hidden="true">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>

    </div>
@endsection
