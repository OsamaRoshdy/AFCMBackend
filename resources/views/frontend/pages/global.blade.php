@extends('layouts.frontend.app')
@section('scripts')
    <script>
        document.getElementById("search-title").addEventListener("click", searchByTitle);
        document.getElementById("eee").addEventListener("click", sortByAuthor);
        document.getElementById("eej").addEventListener("click", sortByJornal);
        document.getElementById("rrr").addEventListener("click", sortByDate);



        function searchByTitle() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("staff-research");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function sortByAuthor() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("staff-research");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[1];
                    y = rows[i + 1].getElementsByTagName("TD")[1];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }


        function sortByJornal() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("staff-research");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[2];
                    y = rows[i + 1].getElementsByTagName("TD")[2];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }

        function convertDate(d) {
            var p = d.split("/");
            return +(p[2]+p[1]+p[0]);
        }

        function sortByDate() {
            var tbody = document.getElementById("staff-research");
            // get trs as array for ease of use
            var rows = [].slice.call(tbody.querySelectorAll("tr"));

            rows.sort(function(a,b) {
                return convertDate(a.cells[3].innerHTML) - convertDate(b.cells[3].innerHTML);
            });

            rows.forEach(function(v) {
                tbody.appendChild(v); // note that .appendChild() *moves* elements
            });

        }
    </script>

@endsection


@section('content')
    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ $page->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('news_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- Post Detils -->
    <div class="post_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="border-radius: 25px;">
                        <div class="card-body new_keywords">
                            <h3>{{ __('frontend.related_pages') }}</h3>
                            <br>
                            @foreach($relatedPages as $linkPage)
                                <h5>
                                    <a href="{{ url($linkPage->route) }}" class="dropdown-item double-chevron--before" style="color: black">{{$linkPage->name}}</a>
                                </h5>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-8"  style="  border-radius: 25px; padding: 15px; ">

                    {!! $page->content !!}

                    @if($page->images->count())
                    <div class="row" style="border-radius: 25px;">
                        <div class="col-12 hvr-backward">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach($page->images as $index => $image)
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach($page->image as $image)
                                    <div class="carousel-item active" style="border-radius: 25px;">
                                        <img src="{{$image->image}}" style="height: 600px;border-radius: 25px;" class="d-block w-100" alt="...">
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>



@endsection
